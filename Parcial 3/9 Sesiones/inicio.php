<!DOCTYPE html>
<html lang="en">
<?php
    session_start();
    if(!isset($_SESSION['usuario']) || empty($_SESSION['usuario'])){
        header("Location: ./sesion.html");}
        
    ?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</head>
<body>
    <div class="d-flex justify-content-center algin-items-center col-sm-12 col-md-7">
        <div class="row">
            <h1 class="text-primary text-center">Pagina principal de aplicacion</h1>
            <button type="button" class="btn btn-outline-success mt-3 btn-sm mb-2 ms-1 me-2"><?php echo $_SESSION['usuario'];  ?></button>
        </div>
    </div>
</body>
</html>