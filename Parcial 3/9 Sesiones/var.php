<?php
session_start();
$user = $_POST['usuario'];
$pas = $_POST['password'];

if(isset($_SESSION['usuario'])){
    printf("Reanudadndo sesion <br>");
    printf("Bienvenido de nuevo <br>");
}
else{
    $_SESSION["usuario"] = $user;
    printf("Nueva sesion <br>");
    printf("Bienvenido %s",$user );
}




?>