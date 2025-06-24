<!DOCTYPE html>
<?php
$host = "sql309.infinityfree.com";
$dbname = "if0_38711566_mydb";
$username = "if0_38711566";
$password = "gaGJIqNhxjl";

// Create connection
$conn = new mysqli($host, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>
