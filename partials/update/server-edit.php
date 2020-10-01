<?php
include __DIR__ . '/../database.php';

$sql = "UPDATE  stanze 
SET room_number = ?,floor = ?,beds = ?, updated_at = NOW()
WHERE id = ?";

$stmt = $conn->prepare($sql);

$stmt->bind_param("iiii", $roomNumber, $floor, $bed, $id);

$roomNumber = $_POST['roomNumber'];
$floor = $_POST['floor'];
$bed = $_POST['beds'];
$id = $_POST['id'];
$noChange = 'null';
$stmt->execute();

if ($stmt && $stmt->affected_rows > 0) {
  header("Location: $basepath/show.php?id=$id");
} elseif ($stmt->affected_rows == 0) {
  header("Location: $basepath/update.php?id=$id");
} else {
  header("Location: $basepath/update.php?id=$id");
}
$stmt->close();
$conn->close();