<?php
include __DIR__ . '/../database.php';
include __DIR__ . '/../functions.php';
$id = $_POST['id'];

remove($conn,'stanze',$id,$basepath);