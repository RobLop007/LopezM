<?php
    
    $servidor = "localhost";
    $basedatos = "proyect_web";
    $usuario = "root";
    $password = "1234567";

    $con = mysqli_connect($servidor,$usuario,$password,$basedatos) or die("Problemas al conectar con el servidor");
    $consulta = "select * from usuario";
    $registros = mysqli_query($con,$consulta) or die("Problemas en el select");
    $result = mysqli_fetch_all($registros);
    mysqli_close($con);
    echo json_encode($result);

?>