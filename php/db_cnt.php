<?php

$servername = "localhost";
$database = "sed";
$username = "root";
$password = "";
// Create connection
$conex = mysqli_connect($servername, $username, $password, $database);
// Check connection
    if (!$conex) {
        die("Connection failed: " . mysqli_connect_error());
    }
?>