<?php 
session_start(); 
include "./db.php";
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Todo App</title>
        <link rel="stylesheet" href="styles.css">
    </head>
    <body>
        <div class="container">
            <?php if(isset($_SESSION['msg'])): ?>
                <p><?= $_SESSION['msg']; ?></p>
                <?php unset($_SESSION['msg']); ?>
            <?php endif; ?>
            <form class="form-add" action="./handler.php" method="post">
                <input type="text" name="task" placeholder="Enter task" required>
                <button name="add" type="submit">Add task</button>
            </form>
    
            <h3>Tasks</h3>
            <?php 
                $query = "SELECT * FROM task ORDER BY id DESC";
                $result = mysqli_query($connect, $query);

                // Check if there's any row returned from the query
                if(mysqli_num_rows($result)) {
                    while($row = mysqli_fetch_assoc($result)){
                        //print_r($row);
                       ?>
                        <div class="todo-item">
                            <?php if(isset($_GET["id"]) && $_GET["id"] == $row["id"]): ?>
                                <form action="./handler.php" class="form-save" method="post">
                                    <input type="text" class="input-save" value="<?= $row["content"] ?>" name ="edit">
                                    <input type="hidden" value="<?=  $row["id"] ?> " name="id">
                                    <button class="link" name="save">Save</button>
                                    <a href="./index.php" class="link red">Cancel</a>
                                </form>
                            <?php else: ?>
                                <div class="task-inner">
                                    <p class="text">
                                        <?= $row['content']; ?>
                                    </p>
                                    <div class="options">
                                            <a href="./handler.php?id=<?= $row["id"]; ?>" class="link red">Delete</a>
                                            <a href="?id=<?= $row["id"]; ?>" class="link blue">Edit</a>
                                    </div>
                                </div>
                            <?php endif; ?>
                        </div>
                       <?php
                    };
                };
            ?>
        </div>
    </body>
</html>