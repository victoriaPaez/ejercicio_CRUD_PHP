<?php
require_once('Crud.php');
$id=$_POST['id'];

$obj= new Crud();
$dato=$obj->obtenerDatos($id);
echo json_encode($dato);
?>