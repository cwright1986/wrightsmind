<?php
$servername = "127.0.0.1:3306";
$username = "u212788254_a023506";
$password = "your_password_here";
$dbname = "u212788254_users";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>
