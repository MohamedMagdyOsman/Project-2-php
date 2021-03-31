<?php
    $dsn = 'mysql:host=localhost;dbname=company';
    $username = 'root';
    $password = 'mohamed3032000*';
    $options = [];
    global $connection;
    
    try {
    $connection = new PDO($dsn, $username, $password, $options);
    } catch(PDOException $e) {

    }
?>