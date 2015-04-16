<?php
    require_once(__DIR__ . "/database.php");
    session_start();
    session_regenerate_id(true);
    
    $path = "/JorgeH-Awsomenauts/php/";
    
    $host = "localhost";
    $username = "root";
    $password = "root";
    $database = "awsomenauts_db";
    /* the isset  is a word that asks if it is set or connected to the database*/
    if(!isset($_SESSION["connection"])) {
        echo 'connection set';
        $connection = new Database($host, $username, $password, $database);
        $_SESSION["connection"] = $connection;
    }