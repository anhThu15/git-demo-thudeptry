<?php
function connectdb(){
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "testdauvao";
    $port = "3306";

    try {
        $conn = new PDO("mysql:host=$servername;port=$port;dbname=".$database, $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        //echo "Connected successfully";
        return $conn;
    } catch(PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }
}