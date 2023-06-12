<?php 

// Array
$todoList = [
    "Go to the market", 
    "Have launch with Jack", 
    "Send emails", 
    "Call the doctor",
    "Learn PHP", 
    "Take a walk with Dea 🦮", 
    "Sleep all day all night"
];

// Transfor php array into json object
header('Content-Type: application/json');
echo json_encode($todoList);

?>