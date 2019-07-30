<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?php echo constant('URL'); ?>public/config/main.css">
    <title>Document</title>
</head>
<body>
    <?php
        require 'Views/header.php';
    ?>
    <div id="main">
        <h1 class="center">Seccion de nuevo</h1>
        <form action="<?php echo constant('URL') ?>nuevo/registrar" method="post">
            <p>
                <label for="matricula">Matricula:</label>
                <input type="text" name="matricula ">
            </p>
            <br>
            <p>
                <label for="">Nombre:</label>
                <input type="text">
            </p>
            <br>
            <p>
                <label for="">Apellido:</label>
                <input type="text">
            </p>
            <br>
            <p>
                <input type="submit" value="Registrar nuevo alumno">
            </p>
        </form>
    </div>
    <?php
        require 'Views/footer.php';
    ?>
</body>
</html>