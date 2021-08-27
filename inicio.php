<?php
session_start();
$varsesion =$_SESSION["email"];
if($varsesion ==null || $varsesion ==''){
header("Location:login.php");
die();
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=h1, initial-scale=1.0">
    <title>Login</title>
</head>

<body>
    <h1 class="h1">sesion inciada felicitaciones !!!
        <br>
        <?php
        echo $_SESSION["email"];
        ?>
        <br>
        <br>

        <!-- cerrar la sesion!-->
        <form action="cerrar.php" method="post">
        <button type="submit" name="">cerrar sesion</button>
        </form>
    </h1>
</body>

</html>