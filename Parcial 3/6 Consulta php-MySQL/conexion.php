<?php
    
    $servidor = "localhost";
    $basedatos = "Northwind";
    $usuario = "root";
    $password = "";

    $con = mysqli_conect($servidor,$usuario,$password,$basedatos) or die("Problemas al conectar con el servidor");

    $consulta = "select * from categories";
    $registros = mysqli_query($con,$consulta) or die("Problemas en el select");

    $result = mysqli_fetch_all($registros);
    mysqli_close($con);
    echo json_encode($result);

?>