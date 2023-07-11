<?php 
var_dump($_POST);
var_dump($_FILES);
$filename = $_FILES["avatar"]["name"];//a.png
$destination = "images/" . $filename;//images/a.png
move_uploaded_file($_FILES["avatar"]["tmp_name"], $destination);
// move_uploaded_file("C:\xampp\tmp\php66E4.tmp","images/a.png");
 ?>