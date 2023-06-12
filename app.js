const { createApp } = Vue

createApp({
    data() {
        return {
            myString: "Welcome 🍿",
        }
    },
    methods: {
        // Print a string in console
        test() {
            console.log(this.myString)
        }
    },
    mounted() {
        console.log("Hello from VueJS 👋")
        this.test()
    }
}).mount('#app')