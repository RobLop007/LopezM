<?php    
    $servidor = "localhost";
    $basedatos = "proyect_web";
    $usuario = "root";
    $password = "1234567";

    $nombre = "#nombre";
    $apellido = "#apellido";
    $correo = "#correo";
    $telefono = "#telefono";
    $fechaNac = "#fechaNac";
    $genero = "#genero";
    $id = "#id";
    $contraseña = "#contraseña";


    $con = mysqli_connect($servidor,$usuario,$password,$basedatos) or die("Problemas al conectar con el servidor");

    $insert = "insert into usuario (nombre, apellido, correo, telefono, fechaNac, genero, id, contraseña)
    values ('$nombre', '$apellido', '$correo', '$telefono', '$fechaNac', '$genero', '$id', '$contraseña')";
    $registros = mysqli_query($con,$insert) or die("Problemas en el insert");

    $result = mysqli_fetch_all($registros,MYSQLI_ASSOC);
    mysqli_close($con);
    echo json_encode($result);    
?>