<?php


session_start();
$host = "localhost";
$username = "root";
$password = "";

try {

    $conn = new PDO("mysql:host=$host; dbname=uas2", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    return $conn;
} catch(PDOException $e) {
    echo "Error : " . $e->getMessage();
}