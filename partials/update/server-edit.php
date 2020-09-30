<?php
include __DIR__.'/../database.php';

$sql = "UPDATE  stanze 
SET room_number = ?,floor = ?,beds = ? 
WHERE id = ?";

$stmt = $conn->prepare($sql);

$stmt->bind_param("iiii",$roomNumber,$floor,$bed,$id);

$roomNumber = $_POST['roomNumber'];
$floor = $_POST['floor'];
$bed = $_POST['beds'];
$id = $_POST['id'];

$stmt->execute();

if($stmt && $stmt->affected_rows >0){
    header("Location: $basepath/show.php?id=$id");
}elseif ($stmt->affected_rows == 0) {
  echo 'dato non modificato';
}else {
   die('errore dato non valido');
}