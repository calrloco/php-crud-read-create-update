<?php
include __DIR__.'/env.php';
$conn = new mysqli($servername, $username, $password,$dbname);
// Check connection
if ($conn && $conn->connect_error) {
echo "Connection failed: " . $conn->connect_error;
die();
}