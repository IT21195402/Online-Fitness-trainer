<?php

    //definig host
    $host = "localhost";
    //define username
    $username = "root";
    //define password
    $password = "";
    //define database
    $database = "fitmore";

    $conn = mysqli_connect($host, $username, $password, $database);

    if($conn->connect_error){
        die("Database connection failed " . $conn->connect_error);
    }
?>
