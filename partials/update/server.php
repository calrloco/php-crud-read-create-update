<?php
include __DIR__.'/../database.php';
include __DIR__.'/../functions.php';
if(empty($_GET['id'])){
   die();
}
$idStanza = $_GET['id'];

$row = update($idStanza,$conn,'stanze');
?>