<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP ToDo</title>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">

    <!-- Script Axios -->
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

    <!-- Script Tailwind -->
    <script src="./cdn.tailwindcss.3.3.2"></script>
    <!-- <script src="https://cdn.tailwindcss.com"></script> -->

    <!-- Script Vue Js -->
    <!-- <script src="./vue.3.2.47.js"></script> -->
    <script src="https://unpkg.com/vue@3"></script>
</head>

<body>

    <!-- Vue JS App -->
    <div id="app" class="bg-black min-h-screen">

        <header class="text-white text-center py-5">
            <h3 class="font-bold text-2xl">📍 TO DO LIST:</h3>
        </header>

        <!-- Project Main Container -->
        <main class="text-white max-w-lg mx-auto py-5">

            <!-- To Do List from API -->
            <ul v-if="todoList.length>0" class="list-disc list-inset px-4 my-2">
                <li v-for="(todo,i) in todoList" class="my-3 flex justify-between border-b-2 border-gray-800 rounded py-2">

                    <!-- Task Name -->
                    <span @click="changeTaskStatus(i)" :class="!todo.done ? 'line-through' : null">{{ todo.text }}</span>

                    <!-- Task Status and Buttons -->
                    <div class="flex gap-1 items-center">

                        <!-- Task Status -->
                        <small>DONE:</small>
                        <span v-if="todo.done" class="text-emerald-600">{{ todo.done }}</span>
                        <span v-else="!todo.done" class="text-rose-800">{{ todo.done }}</span>

                        <!-- Change Status & Trash Buttons -->
                        <button v-if="todo.done" @click="changeTaskStatus(i)"><i class="fa-regular fa-circle-xmark text-rose-800"></i></button>
                        <button v-else="!todo.done" @click="changeTaskStatus(i)"><i class="fa-solid fa-circle-check text-emerald-600"></i></button>
                        <button @click="removeTask(i)"><i class="fa-regular fa-trash-can"></i></button>

                    </div>

                </li>
            </ul>

            <!-- Add New Task Button -->
            <div class="my-4">
                <input @keyup.enter="addTask" v-model="newTask" type="text" placeholder="Add new task here..." class="px-2 py-1 text-black mx-3 rounded w-[65%]">
                <button @click="addTask" class="bg-emerald-500 px-4 py-1 rounded hover:bg-teal-300 hover:text-zinc-700">ADD</button>
            </div>

        </main>
    </div>

    <!-- Script App JS -->
    <script src="./app.js"></script>

</body>

</html>