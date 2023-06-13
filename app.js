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
        }
    },
    mounted() {
        console.log("Hello from VueJS 👋"),
        this.getApiData()
    }
}).mount('#app')