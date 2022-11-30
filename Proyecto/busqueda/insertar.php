<?php
    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellido"];
    $correo = $_POST["correo"];
    $telefono = $_POST["telefono"];
    $fechaNac = $_POST["fechaNac"];
    $genero = $_POST["genero"];
    $id = $_POST["id"];
    $contraseña = $_POST["contraseña"];
    $servidor = "localhost";
    $basedatos = "proyect_web";
    $usuario = "root";
    $password = "1234567";


    try{
        $con = new PDO($servidor,$basedatos,$usuario,$password);
    } catch(PDOException $e){
        echo $e->getMessage();
        exit();
    }


    try{
        $consultaSql = "insert into usuario (nombre,apellido,correo,telefono,fechaNac,genero,id,contraseña) 
        values ('$nombre','$apellido','$correo',$telefono,$fechaNac,'$genero','$id','$contraseña');";
        $consulta = $con -> prepare($consultaSql);
        $consulta -> execute();
        $resultado = $consulta->fetch(PDO::FETCH_ASSOC);
        $consulta->closeCursor();

    }catch(PDOException $e){
        echo "Error al insertar";
        echo $e->getMessage();

    }

    $resultadoJSON = json_encode($resultado);
    echo $resultadoJSON;
?>