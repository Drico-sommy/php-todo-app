<?php

/* session_start();
include("./db.php");
// CRUD
// Add to DB
if(isset($_POST['add'])) {
    // Get the value of the input field
    $task = $_POST['task'];

    try {
        // Add this task to db
        $query = "INSERT INTO tasks(content) VALUES ('$task')"; 
        // Run the query
        $result = mysqli_query($connect, $query);
        
        if(!$result) throw new Exception("Failed to add task to database");
        $_SESSION['msg'] = "Task added successfully";

        header("Location: ./index.php");
    }
    catch(Exception $err) {
        echo $err->getMessage();
    }
} */





session_start();

include("./db.php");
// CRUD
// Add to DB
if(isset($_POST['add'])) {
    // Get the value of the input field
    $task = $_POST['task'];

    try {
        // Add this task to db
        $query = "INSERT INTO task(content) VALUES ('$task')"; 
        // Run the query
        $result = mysqli_query($connect, $query);
        
        if(!$result) throw new Exception("Failed to add task to database");
        $_SESSION['msg'] = "Task added successfully";

        header("Location: ./todo.php");
    }
    catch(Exception $err) {
        echo $err->getMessage();
    }
}

if(isset($_POST["save"])){
    try{
        $new_text = $_POST["edit"];
        $id = $_POST["id"];
        $edit = "UPDATE task SET content = '$new_text' WHERE id = '$id'";
        $result = mysqli_query($connect, $edit);

        if(!$result) throw new Exception("failed to update task");
        $_SESSION['msg'] = "Task updated successfully";

        header("Location: ./todo.php");
    }
    catch(Exception $err){
        echo $err->getMessage();
    }
}

if($_GET["id"]){
    $id = $_GET["id"];
    $delete = "DELETE FROM task WHERE  id ='$id'";

    $delete_task = mysqli_query($connect, $delete);

    $_SESSION['msg'] = "Task deleted successfully";

    header("Location: ./todo.php");
}  
?>