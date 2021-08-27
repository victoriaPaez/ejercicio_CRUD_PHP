<?php
require_once('Crud.php');
$id=$_POST['id'];

$obj= new Crud();
$dato=$obj->eliminarDatos($id);
echo $dato;
?>