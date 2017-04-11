<?php
$servername = "localhost";
$username = "root";
$password = "12345678";
$dbname = "eatery";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
}
//echo '<h1 align="center">Database Connected</h1><hr>';
?>
