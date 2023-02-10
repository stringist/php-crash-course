<?php
define('DB_HOST', 'localhost');
define('DB_USER', 'kalle');
define('DB_PASS', '123456');
define('DB_Name', 'php_dev');

// Create connection

$conn = new mysqli(
    DB_HOST,
    DB_USER,
    DB_PASS,
    DB_Name
);

// Check connection
if($conn->connect_error) {
    die('Connection Failed' . $conn->connect_error);
}
