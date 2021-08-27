<?php
require_once('Crud.php');

$datos = array(
        'email' => $_POST['emailu'],
        'pasword' => $_POST['paswordu'],
        'nombre' => $_POST['nombreu'],
        'apellido' => $_POST['apellidou'],
        'alias' => $_POST['aliasu'],
        'id' => $_POST['id']
            );


        $obj= new Crud();
        $dato=$obj->actualizarDatos($datos);
        echo $dato;

?>