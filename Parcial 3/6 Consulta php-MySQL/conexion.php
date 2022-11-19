<?php
    
    $servidor = "localhost";
    $usuario = "root";
    $password = "1234567";
    $db = "Northwind";

    $con = mysqli_conect($servidor,$usuario,$password,$db) or die("Problemas en la conexion a la base de datos");        
    $consulta = "select * from categories";
    $registros = mysqli_query($con,$consulta) or die("Problemas en el select");

    $result = mysqli_fetch_all($registros);
    mysqli_close($con);
    echo json_encode($result);

    
    $mysqli = new mysqli("localhost", "usuario", "contraseña", "basedatos");
    if ($mysqli->connect_errno) {
        echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
    }
    echo $mysqli->host_info . "\n";

    $mysqli = new mysqli("127.0.0.1", "usuario", "contraseña", "basedatos", 3306);
    if ($mysqli->connect_errno) {
        echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
    }

    echo $mysqli->host_info . "\n";

?>