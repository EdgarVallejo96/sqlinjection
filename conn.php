<?php
    $server = "localhost";
    $username = "root";
    $password = "";
    $database = "sqlinjection";

    try {
        $conn = new PDO("mysql:host=$server;dbname=$database", $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Connected successfully";
    }
    catch(PDOException $e){
        echo "Connection failed: " . $e->getMessage();
    }
?>