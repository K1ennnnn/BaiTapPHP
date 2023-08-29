<?php
    $host = "localhost";
    $user = "root";
    $pass = "";
    $dbName = "demoSql";
    $conn = new mysqli($host,$user,$pass,$dbName);
    if ($conn->connect_error) {
        die("Error connecting ".$conn->connect_error);
    }else{
        echo "Connection";   
    } 
?>      