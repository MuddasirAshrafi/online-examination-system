<?php

$host = "localhost:3308";
$user = "root";
$pass = "";
$db   = "cee_db";
$conn = null;

try {
  $conn = new PDO("mysql:host={$host};dbname={$db};",$user,$pass);
} catch (Exception $e) {

}


 ?>
