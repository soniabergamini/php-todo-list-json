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
    <div id="app" class="bg-black">
        <!-- Project Main Container -->
        <main class="h-screen text-white">
            <span>{{ myString }}</span>
        </main>
    </div>

    <!-- Script App JS -->
    <script src="./app.js"></script>

</body>

</html>