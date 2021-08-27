<?php

require_once("Conection.php");
require_once("Person.php");

session_start();

if ($_SESSION) {
    header("Location:http://localhost/clases_php/ejercicios/inicio.php");
}

$newconection = new Conection;//INSTANCIAR LA CLASE CONECTION.PHP
$newconection->init();

if(isset($_REQUEST["emailCrear"]) && isset($_REQUEST["passwordCrear"])&&isset($_REQUEST["nombre"])&& isset($_REQUEST["apellido"])&&isset($_REQUEST["alias"])){
    $emailCrear =$_REQUEST["emailCrear"];
    $passwordCrear = $_REQUEST["passwordCrear"]; 
    $nombre = $_REQUEST["nombre"];
    $apellido = $_REQUEST["apellido"];
    $alias=$_REQUEST["alias"];

    if(($passwordCrear ==null || $passwordCrear=='') || ($emailCrear ==null || $emailCrear=='')|| ($nombre ==null || $nombre=='')|| ($apellido ==null || $apellido=='')|| ( $alias ==null ||  $alias=='')){  
        $msg="Diligiencie los datos por favor";     
        $apathOrigin=explode('?', $_SERVER['HTTP_REFERER']);  
        $pathOrigin=$apathOrigin[0]; 
        header("Location:$pathOrigin?msg=$msg");
     }
     else{
        echo "<br>";
        echo "<br>";
        $sql="INSERT INTO usuario(email,pasword,nombre,apellido,alias) value ('$emailCrear', '$passwordCrear','$nombre','$apellido','$alias')";
        $ded =$newconection->init()->query($sql);
        if($ded == true ) {    
            header("Location:http://localhost/clases_php/ejercicios/inicio.php");
        }
        else{
            echo"conexion fallo";
        }
     }
}
///






echo '



<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<!--Fontawesome CDN-->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">


<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" type="text/css" href="css/styles.css">
    <title>Inicio de sesion POO en PHP</title>
</head>


<body>

    <div class="d-flex justify-content-center links">
    <h1>Crea una cuenta Gratuita</h1>
    </div>
    
    <div class="container">
    
        <div class="d-flex justify-content-center h-100">
        
            <div class="card">
                    <form action="crearUser.php" method="POST">

                    <div class="card-body">

                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-user"></i></span>
                            </div>
                                <label for="username" class="text-info"></label>
                                <input type="text" name="emailCrear" class="form-control" placeholder="username">
                        </div>


                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-key"></i></span>
                            </div>
                                <label for="password" class="text-info"> </label>
                                <input type="password" name="passwordCrear" class="form-control" placeholder="password">
                        </div>
  

                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-user"></i></span>
                            </div>
                                <label for="username" class="text-info"></label>
                                <input type="text" name="nombre" class="form-control" placeholder="name">
                        </div>

                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-user"></i></span>
                            </div>
                                <label for="username" class="text-info"></label>
                                <input type="text" name="apellido" class="form-control" placeholder="lastname">
                        </div>

                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-user"></i></span>
                            </div>
                                <label for="username" class="text-info"></label>
                                <input type="text" name="alias" class="form-control" placeholder="alias">
                        </div>


                        <div class="form-group">
                            <input type="submit" name="enviarCrear" value="crear" class="btn float-right login_btn">
                        </div>

                        <br>
                        <br>
                        <p class="d-flex justify-content-center links">'.$msg = $_REQUEST["msg"] ?? ''.'
                            <?php

                            echo $msg;

                            ?>
                        </p>


                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
';
