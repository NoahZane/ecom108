<?php
    $server = "localhost";
    $user = "root";
    $password = "";
    $database = "rose_mall";
    $dsn = "mysql:host=$server; port = 3309; dbname=$database";

    try{
        $conn = new PDO($dsn, $user, $password);
        //to show exceptioin messages
        $conn -> setAttribute(PDO::ATTR_ERRMODE, PDO:: ERRMODE_EXCEPTION);
        // to access table row in object style
        $CONN -> setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
        echo "connection established";
    }
    catch(PDOException $e){
        echo $e -> getMessage();
    }
?>