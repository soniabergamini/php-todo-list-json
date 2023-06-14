<?php 

// // 1° SOLUTION: PHP ARRAY

// // Array
// $todoList = [
//     "Go to the market", 
//     "Have launch with Jack", 
//     "Send emails", 
//     "Call the doctor",
//     "Learn PHP", 
//     "Take a walk with Dea 🦮", 
//     "Sleep all day all night",
//     "Go to the vet",
//     "Make lasagna with grandma",
//     "Organize Betta's party"
// ];

// // Transform php array into json object
// header('Content-Type: application/json');
// echo json_encode($todoList);

?>

<?php

// 2° SOLUTION: JSON ARRAY

// Get Json Data and Decode Data
header('Content-Type: application/json');
$todoList = file_get_contents("./data.json");

// Data Processing
$todoListData = json_decode($todoList, true);
if (isset($_POST['newTask'])) {

    // Add New Task to PHP Array and JSON Array
    $todoListData[] = $_POST['newTask'];
    file_put_contents("./data.json", json_encode($todoListData));

} else if (isset($_POST['deleteTask'])) {

    // Remove Task to PHP and JSON Array
    $taskIndex = $_POST['deleteTask'];
    array_splice($todoListData, $taskIndex, 1);
    file_put_contents("./data.json", json_encode($todoListData));

} else if (isset($_POST['changeStatusTask'])) {

    // Change Task Status to PHP and JSON Array
    $taskIndex = $_POST['changeStatusTask'];
    $todoListData[$taskIndex]["done"] = !$todoListData[$taskIndex]["done"];
    file_put_contents("./data.json", json_encode($todoListData));

} else if (isset($_POST['changeTaskText'])) {

    // Change Task Text to PHP and JSON Array
    $taskIndex = $_POST['taskIndex'];
    $taskText = $_POST['changeTaskText'];
    $todoListData[$taskIndex]["text"] = $taskText;
    file_put_contents("./data.json", json_encode($todoListData));
    
}
$todoList = json_encode($todoListData);

echo $todoList;

?>