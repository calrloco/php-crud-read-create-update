<?php
include __DIR__.'/../database.php';
include __DIR__.'/../functions.php';
if(empty($_GET['id'])){
   die();
}
$row = update($_GET['id'],$conn,'stanze');
?>