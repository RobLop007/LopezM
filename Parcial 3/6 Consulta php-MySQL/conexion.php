<?php

    $servidor = "localhost";
    $basedatos = "proyect_web";
    $usuario = "root";
    $password = "";

    $con = mysqli_connect($servidor,$usuario,$password,$basedatos)or die ("no se pudo conectar a localhost");
    $consulta = "select * from usuario";
    $registros = mysqli_query($con,$consulta)or die("problemas en el select");


    $result = mysqli_fetch_all($registros);
    mysqli_close($con);
    echo json_encode($result);

?>