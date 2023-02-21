<?php

$user = "root";
$pass = "";

try {
    $connect = new PDO("mysql:host=localhost;dbname=garage", $user, $pass);
 $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
// echo "connectie is gelukt";
} catch (PDOException $e){
    echo "connectie mislukt: " . $e ->getMessage();
}