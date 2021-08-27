<?php

require_once("Person.php");
require_once('Conection.php');


if(isset($_REQUEST["enviar"])){
    session_start();
    error_reporting(0);
    $email=$_REQUEST["email"];
    $password=$_REQUEST["password"];
 
    $person=new Person($email,$password);  //instanciar y llamar al objeto person aca se compara con la bd
    $a=$person->getAccess();
    $b=$person->getByPassword($password).$registro['pasword'];
    $c=$person->getAccessP();



    if(($password ==null || $password=='')|| ($email ==null || $email=='')){  
        $msg="Digte el correo y la clave por favor";
        $apathOrigin=explode('?', $_SERVER['HTTP_REFERER']);
        $pathOrigin=$apathOrigin[0];
        header("Location:$pathOrigin?msg=$msg");
        die();

     }

     else{ 
         if($email===$a and $password===$b){
             //creamos sesion
             
             $_SESSION["email"]=$email;
             $_SESSION["password"]=$password;
             $_SESSION["id"]=random_int(1,1000);
             echo "<br>";
             echo "<br>";
             echo"<h1> bienvenido iniciaste sesion: </h1>";
             echo "<br>";
             echo "tus datos de usuario son: ";
             echo "<br>";
             echo "Correo Electronico: ".$a;
             echo "<br>";
             echo "Clave de Usuario ".$c;
             echo "<br>";
             echo "<br>";
             echo "<a href='cerrar.php'>cerrar Sesion</a>";
             echo "<br>";
             echo "<br>";
             echo "<br>";         

            //

         }
         else {

             $msg="Usuario y contraseña incorrectos ";
             $apathOrigin=explode('?', $_SERVER['HTTP_REFERER']);
             $pathOrigin=$apathOrigin[0];
             header("Location:$pathOrigin?msg=$msg");
         }
     }


  
}
////

echo'
<!DOCTYPE html>
<html>
<head>
	<title>PDO</title>
	<link rel="stylesheet" type="text/css" href="librerias/bootstrap4/bootstrap.min.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
</head>

<body>


<div class="container">
<div class="row">
    <h2>Datos Usuarios </h2>
    <div class="col-sm-12">
        <div class="card text-left">
            <div class="card-header">
                <ul class="nav nav-tabs card-header-tabs">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Datos</a>
                    </li>
                </ul>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-12">
                        <span class="btn btn-primary" data-toggle="modal" data-target="#insertarModal">
                            <i class="fas fa-plus-circle"></i> Nuevo registro
                        </span>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-sm-12">
                        <div id="tablaDatos"></div>
                                
                            
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<script src="librerias/bootstrap4/jquery-3.4.1.min.js"></script>
<script src="librerias/bootstrap4/popper.min.js"></script>
<script src="librerias/bootstrap4/bootstrap.min.js"></script>
<script src="librerias/sweetalert.min.js"></script>
<script src="js/crud.js"></script>

<script type="text/javascript">
mostrar();
</script>

</body>
</html>

';

require_once "formularioInsertar.php";
require_once "modalUpdate.php";


?>

