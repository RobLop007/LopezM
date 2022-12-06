<?php
include("conexion.php");
$consulta = "select * from usuario";
$query = mysqli_query($con ,$consulta);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>grid</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <link type="text/css" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jsgrid/1.5.3/jsgrid.min.css" />
    <link type="text/css" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jsgrid/1.5.3/jsgrid-theme.min.css" />
    <script src="jquery-3.6.1.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jsgrid/1.5.3/jsgrid.min.js"></script>
</head>
<body>    
    <div class="mt-2 container d-flex justify-content-center align-items-center">
        <form class="row g-0 py-3 d-flex gap-2 border col-md-12 col-lg-8 justify-content-center align-items-center formulario">            
            <!-- Nombres -->
            <div class="form-group col-sm-12 col-md-5">
                <label for="nombre" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="nombre" placeholder="Nombre">
            </div>              
            <!-- Apellido -->            
            <div class="form-group col-sm-12 col-md-5">
                <label for="apellido" class="form-label">Apellido</label>
                <input type="text" class="form-control" id="apellido" placeholder="Apellido">
            </div>            
            <!-- Correo -->
            <div class="form-group col-sm-12 col-md-5">
                <label for="correo" class="form-label">Correo electronico</label>
                <input type="email" class="form-control" id="correo" placeholder="nombre@ejemplo.com">
            </div>           
            <!-- Contraseñas -->
            <div class="form-group col-sm-12 col-md-5">
                <label for="contraseña" class="form-label">Contraseña</label>
                <input type="password" class="form-control" id="contraseña" placeholder="De 8-20 caracteres">
            </div>    
            <!-- Botones -->
            <div class="d-flex justify-content-center align-items-center">
                <button id="btnInsertar" type="submit" class="btn btn-outline-success btn-sm mb-2 ms-1 me-2">Insertar</button>                
            </div>            
        </form>
    </div>   
    <div class="container">
        <table class="table">
            <thead>
                <th>Id</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Correo</th>
                <th>Contraseña</th>
            </thead>
            <tbody>
                <?php 
                while($row = mysqli_fetch_array($query)):
                ?>
                <tr>
                <td><?=$row['Id'] ?></td>
                <td><?=$row['Nombre'] ?></td>
                <td><?=$row['Apellido'] ?></td>
                <td><?=$row['Correo'] ?></td>
                <td><?=$row['Clave'] ?></td>
                </tr>
                <?php 
                endwhile;
                ?>
            </tbody>
        </table>
    </div>

</body>
</html>