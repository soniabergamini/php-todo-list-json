const { createApp } = Vue

createApp({
    data() {
        return {
            myString: "Welcome 🍿",
            API: 'http://localhost:8888/php-todo-list-json/api.php',
            todoList: []
        }
    },
    methods: {
        // Print a string in console
        printString() {
            console.log(this.myString)
        },
        // Return ToDoList from API call
        todoApiCall() {
            for (let i = 0; i < 10; i++) {
                axios.get(this.API).then((response) => {
                    this.todoList.push(response.data[i])
                    // console.log(this.todoList)
                });
            };
        },
    },
    mounted() {
        console.log("Hello from VueJS 👋"),
        this.printString(),
        this.todoApiCall()
    }
}).mount('#app')