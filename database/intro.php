<?php
    $username = "root";
    $password = "";
    $db_name  = "intro";
    $host     = "localhost"; //127.0.0.1

    /*
    $connection = new mysqli($host, $username, $password);

    // Check connection
    if ($connection->connect_error) {
        die("Connection failed: " . $connection->connect_error);
    }

    echo " success ";

    $connection->close();
    */

    try {
        $connection = new PDO("mysql:host=$host;dbname=$db_name", $username, $password);
        // set the PDO error mode to exception
        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Connected successfully";
      } catch(PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
      }





?>