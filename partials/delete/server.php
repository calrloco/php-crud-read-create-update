<?php
include __DIR__ . '/../database.php';
include __DIR__ . '/../functions.php';
$id = $_POST['id'];
$roomNumber= $_POST['roomNumber'];
remove($conn,'stanze',$id,$basepath,$roomNumber);