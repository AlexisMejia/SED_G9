<?php

require __DIR__ . '/../vendor/autoload.php';
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/..');
$dotenv->load();

$servername = $_ENV['DB_HOST'];;
$database = $_ENV['DB_NAME'];;
$username = $_ENV['DB_USER'];;
$password = $_ENV['DB_PASS'];;
// Create connection
$conex = mysqli_connect($servername, $username, $password, $database);
// Check connection
    if (!$conex) {
        die("Connection failed: " . mysqli_connect_error());
    }
?>