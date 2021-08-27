<?php
//se conecta con la base de datos
require_once("Conection.php");
require_once("Person.php");

session_start();

if ($_SESSION) {
    header("Location:http://localhost/clases_php/ejercicios/inicio.php");
}

$msg = $_REQUEST["msg"] ?? '';
?>


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
    <div class="container">
        <div class="d-flex justify-content-center h-100">
            <div class="card">
                
                <div class="card-body">
                    <form action="sesion.php" method="POST">
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-user"></i></span>
                            </div>
                            <label for="username" class="text-info"></label>
                            <input type="text" name="email" class="form-control" placeholder="username">
                        </div>


                        <br>

                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-key"></i></span>
                            </div>
                            <label for="password" class="text-info"> </label>
                            <input type="password" name="password" class="form-control" placeholder="password">
                        </div>
                        <br>

                        <div class="form-group">
                            <input type="submit" name="enviar" class="btn float-right login_btn">
                        </div>

                        <a href='crearUser.php'>crear usuario</a>

                        <br>
                        <br>
                        <br>
                        <p class="d-flex justify-content-center links">
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