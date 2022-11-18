<?php
    $registro['nombres'] = "Roberto";
    $registro['apellido'] = "López";
    $registro['mail'] = "rjlom001@gmail.com";
    $registro['telefono'] = "8672445834";
    $registro['fechaNac'] = "18/10/2000";
    $registro['genero'] = "Masculino";
    $registro['id'] = "19100207";
    $registro['contraseña'] = "1234";
    $registro['contraseñaVal'] = "1234";
    echo json_encode($registro);

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

