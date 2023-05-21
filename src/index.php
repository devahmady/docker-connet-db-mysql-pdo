<?php
$servername = "192.168.10.0";
$username = "coba";
$password = "testing";

try {
  $conn = new PDO("mysql:host=$servername;dbname=tes_aja", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Connected successfully tes";
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
?> 