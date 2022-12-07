<?php
    //Procedural
    //$host = "localhost";
    //$username = "root";
    //$password = "";
    //$database = "todo";

    //$connect = mysqli_connect($host, $username, $password, $database);

    //if($connect) echo "Connection Established!!";

    //OBJECT ORIENTED METHOD
    /* $connect = new mysqli($host, $username, $password, $database);
    if($connect) echo "Connection Established!!"; */

    //PDO
   /*  $DSN = "mysql:host=$host;dbname:$database";
    $connect= new PDO($DSN, $username, $password);

    if($connect) echo "Connection successcful";
 */
   // <?php

// Procedural
/* $host = "localhost";
$username = "root"; 
$password = ""; 
$database = "todo";

$connect = mysqli_connect($host, $username, $password, $database); */
// if($connect) echo "Connection Established!!";

// Object Oriented

// $connect = new mysqli($host, $username, $password, $database);
// if ($connect) echo "Connection Established!!";

// PDO
// $DSN = "mysql:host=$host;dbname=$database";
// $connect = new PDO($DSN, $username, $password);

// if($connect) echo "Connection Established";



// Procedural
$host = "localhost";
$username = "root"; 
$password = ""; 
$database = "todo";

$connect = mysqli_connect($host, $username, $password, $database);
// if($connect) echo "Connection Established!!";

// Object Oriented

// $connect = new mysqli($host, $username, $password, $database);
// if ($connect) echo "Connection Established!!";

// PDO
// $DSN = "mysql:host=$host;dbname=$database";
// $connect = new PDO($DSN, $username, $password);

// if($connect) echo "Connection Established";

?>