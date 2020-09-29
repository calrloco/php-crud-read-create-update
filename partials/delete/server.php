<?php
include __DIR__.'/../database.php';

if(empty($_POST['id'])){
   die();
}
$idStanza = $_POST['id'];
$sql = "DELETE FROM stanze WHERE id = $idStanza";
$result = $conn->query($sql);
$conn->close();
if($result){
   echo 'ok';
}else{
   echo 'non ho cancellato';
}
?>