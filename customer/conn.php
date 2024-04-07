<?php

$conn = new mysqli('localhost', 'root', '', 'egg');

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

?>