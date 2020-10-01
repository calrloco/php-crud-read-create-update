<?php
include __DIR__ . '/../database.php';

if (empty($_POST['roomNumber'])) {
    die('non hai inserito il numero della stanza');
}
if(empty($_POST['floor'])){
    die('non hai inserito il piano');
}
if(empty($_POST['beds'])){
    die('non hai inserito il numero dei letti');
}

$sql = "INSERT INTO stanze (room_number,floor,beds,created_at,updated_at) values(?,?,?,NOW(),NOW())";

//bind params specifica valori che gli passo////
$stmt = $conn->prepare($sql);
/// bind params restituisce un valore booleano
//sostituendo i ?? con i valori passiti nel metodo;
$stmt->bind_param("iii",$roomNumber,$floor,$beds);

$roomNumber = $_POST['roomNumber'];
$floor = $_POST['floor'];
$beds = $_POST['beds'];

$stmt->execute();
if($stmt && $stmt->affected_rows > 0){
    header("Location: $basepath/show.php?id=$stmt->insert_id");
}elseif ($stmt){
  die('nessun inserimento');
}else{
 die('nessun inserimento per errore');
}
$stmt->close();
$conn->close();