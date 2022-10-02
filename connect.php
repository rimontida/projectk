<?php
$servername = "localhost";
$username = "root";
$password = "root1234";
$dbname = "db_kitty";  //ชื่อฐานข้อมูล

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
  die("ผิดพลาด Connection failed: " . mysqli_connect_error());
  //echo "เชื่อมต่อฐานข้อมูลได้ Connected successfully";
}



?>