const { createApp } = Vue

createApp({
    data() {
        return {
            API: 'api.php',
            todoList: [],
            newTask: ""
        }
    },
    methods: {
        // Return ToDoList from API
        getApiData() {
            axios.get(this.API).then((response) => {
                this.todoList = response.data;
            });
        },
        // Send ToDoList Data to API
        postApiData(data) {
            axios.post(this.API, data, { headers: { 'Content-Type': 'multipart/form-data' } }).then((response) => {
                this.todoList = response.data;
                this.newTask = "";
            });
        },
        addTask() {
            this.postApiData({newTask: this.newTask})
        },
        removeTask(i) {
            this.postApiData({ deleteTask: i })
        },
        changeTaskStatus(i) {
            this.postApiData({ changeStatusTask: i })
        }
    },
    mounted() {
        console.log("Hello from VueJS 👋"),
        this.getApiData()
    }
}).mount('#app')


// [
// "Go to the market",
//     "Have launch with Jack",
//     "Send emails",
//     "Call the doctor",
//     "Learn PHP",
//     "Take a walk with Dea 🦮",
//     "Sleep all day all night",
//     "Go to the vet",
//     "Make lasagna with grandma",
//     "Organize Betta's party"
// ]