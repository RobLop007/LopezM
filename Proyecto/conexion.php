<?php    
    $servidor = "localhost";
    $basedatos = "proyect_web";
    $usuario = "root";
    $password = "roblop";

    $con = mysqli_connect($servidor,$usuario,$password,$basedatos) or die("Problemas al conectar con el servidor");

    mysqli_select_db($con, $basedatos);


?>