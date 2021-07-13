<?php
    $hostname = "localhost";
    $db_username = "root";
    $db_password = "";
    $db_name = "rw";

    $conn = new mysqli($hostname,$db_username,$db_password,$db_name);

    if ($conn -> connect_errno) {
        echo "Failed to connect to MySQL: " . $conn -> connect_error;
        exit();
    }
?>