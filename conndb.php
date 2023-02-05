<?php
$servername = "localhost";
$username = "root";
$password = "";
$dataname = "eng_ru";

// Create connection
$conn = new mysqli($servername, $username, $password, $dataname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>