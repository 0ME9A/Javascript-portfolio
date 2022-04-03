<?php 
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "maddb";

    // create connection
    $conn = new mysqli($servername, $username, $password, $dbname);


    // check connection
    if($conn->connect_error){
        die("connection faild: ". $conn->connect_error);
    }
    // echo "Connected successfully";


    // create database
    $sql = 'CREATE DATABASE madDB';
    if ($conn->query($sql)===TRUE) {
        # code...
        // echo "database created successfully";
        echo "code 001x01";
        
    }
    else{
        // echo "error creating database ". $conn->error;
        echo "code 001x02";
    }

    // create table
    $sql = "CREATE TABLE project(
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        title VARCHAR(30) NOT NULL,
        thumbnail VARCHAR(30) NOT NULL,
        source VARCHAR(200) NOT NULL,
        blog VARCHAR(1000) NOT NULL,

        reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP

    )";

    if ($conn->query($sql)===TRUE){
        // echo "table project created successfully";
        echo "code 001x03";
    }
    else{
        // echo "error createing table: ". $conn->error;
        echo "code 001x04";
    }




?>