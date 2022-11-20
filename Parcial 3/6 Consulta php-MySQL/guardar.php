<?php

    require "./conexion.php";

    $nombres = $_POST["#nombres"];
    $apellido = $_POST["#apellido"];
    $correo = $_POST["#correo"];
    $telefono = $_POST["#telefono"];
    $fecha = $_POST["#fechaNac"];
    $genero = $_POST["#genero"];
    $id = $_POST["#id"];
    $contraseña = $_POST["#contraseña"];

    $insert = "INSERT INTO usuario values ('$nombres', '$apellido', '$correo', '$telefono', '$fecha', '$genero', )"

?>