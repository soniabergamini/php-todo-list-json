<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP ToDo</title>

    <!-- Script Axios -->
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

    <!-- Script Tailwind -->
    <script src="./cdn.tailwindcss.3.3.2"></script>
    <!-- <script src="https://cdn.tailwindcss.com"></script> -->

    <!-- Script Vue Js -->
    <script src="./vue.3.2.47.js"></script>
    <!-- <script src="https://unpkg.com/vue@3"></script>  // this CDN script doesn't work on github preview, due to CORS proxy -->
</head>

<body>

    <!-- Vue JS App -->
    <div id="app" class="bg-black h-screen">

        <header class="text-white text-center py-5">
            <h3 class="font-bold text-2xl">📍 TO DO LIST:</h3>
        </header>

        <!-- Project Main Container -->
        <main class="text-white flex flex-col items-center max-w-lg border mx-auto">
            <!-- To Do List from API -->
            <ul v-if="todoList.length>0" class="list-disc list-inside my-2">
                <li v-for="item in todoList">
                    <span>{{ item }}</span>
                </li>
            </ul>

        </main>
    </div>

    <!-- Script App JS -->
    <script src="./app.js"></script>

</body>

</html>