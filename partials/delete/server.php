<?php
include __DIR__ . '/../database.php';

if (empty($_POST['id'])) {
   die();
}
$sql = "DELETE FROM stanze WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param('i', $idStanza);
$idStanza = $_POST['id'];
$stmt->execute();
$conn->close();
if ($stmt && $stmt->affected_rows > 0) {
   header("Location: $basepath/index.php?roomId=$idStanza");
} else {
   header("Location: $basepath/index.php");
}
