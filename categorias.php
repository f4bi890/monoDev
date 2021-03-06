<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="icon" type="image/png" href="public/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categorias de Contactos</title>
    <?php require_once "dependencias.php"; ?>
</head>

<body>
    <div class="container">
        <?php require_once "menu.php"; ?>

        <div class="jumbotron">
            <h1 class="display-4">Categorias</h1>
            <button class="btn btn-primary" data-toggle="modal" data-target="#modalAgregarCategoria">
                <span class="far fa-plus-square"></span> Agregar categoria
            </button>
            <hr class="my-4">

            <div id="cargaTablaCategorias"></div>
        </div>
        <?php
            require_once "vistas/categorias/modalAgregar.php";
            require_once "vistas/categorias/modalActualizar.php";
        ?>
    </div>

    <script src="public/js/categorias.js"></script>
</body>

</html>