<?php

    $servidor = "localhost";
    $usuario = "root";
    $password = "";
    $db = "proyect_web";

    $con = mysqli_conect($servidor,$usuario,$password,$db);
    
    /*$consulta = "select * from categories";
    $registros = mysqli_query($con,$consulta) or die("Problemas en el select");

    $result = mysqli_fetch_all($registros);
    mysqli_close($con);
    echo json_encode($result);*/

?>