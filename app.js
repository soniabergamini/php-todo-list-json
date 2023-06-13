const { createApp } = Vue

createApp({
    data() {
        return {
            API: 'api.php',
            todoList: []
        }
    },
    methods: {
        // Return ToDoList from API call
        todoApiCall() {
            axios.get(this.API).then((response) => {
                this.todoList = response.data;
            });
        },
    },
    mounted() {
        console.log("Hello from VueJS 👋"),
        this.todoApiCall()
    }
}).mount('#app')