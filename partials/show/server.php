<?php
include __DIR__.'/../database.php';

if(empty($_GET['id'])){
   die();
}
$idStanza = $_GET['id'];
$sql = "SELECT id,room_number,floor,beds FROM stanze WHERE id = $idStanza";
$result = $conn->query($sql);
if ($result && $result->num_rows > 0) {
$row = $result->fetch_assoc();
} elseif ($result) {
echo "0 results";
} else {
echo "query error";
}
$conn->close();
?>