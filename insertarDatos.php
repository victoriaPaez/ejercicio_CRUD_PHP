<?php
require_once('Crud.php');


if($_POST['email']== null || $_POST['email']=="" || $_POST['pasword']==null || $_POST['pasword']==""|| $_POST['nombre']==null || $_POST['nombre']=="" || $_POST['apellido']==null || $_POST['apellido']==""){
    $msg="fallo la insersion";     
    $apathOrigin=explode('?', $_SERVER['HTTP_REFERER']);  
    $pathOrigin=$apathOrigin[0]; 
    header("Location:$pathOrigin?msg=$msg");

}
else{
        $datos = array(
            'email' => $_POST['email'],
            'pasword' => $_POST['pasword'],
            'nombre' => $_POST['nombre'],
            'apellido' => $_POST['apellido'],
            'alias' => $_POST['alias']
                );
 
            $obj= new Crud();
            $dato=$obj->insertarDatos($datos);
            echo $dato;          
}



?>