<?php 
$nome = $_POST['pessoa'];
$idade = $_POST['idade'];
$email = $_POST['email'];
$id = $_POST['id'];

$obj = new Crud($conect);

$obj->update($id,$nome,$idade,$email);


 ?>