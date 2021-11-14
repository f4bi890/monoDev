<?php

    require_once "../../clases/Contactos.php";
    $Contactos = new Contactos();
    $datos = array(
                "idCategoria" => $_POST['idCategoriaSelect'],
                "nombres" => $_POST['nombres'],
                "apellidos" => $_POST['apellidos'],
                "telefono" => $_POST['telefono'],
                "email" => $_POST['email']
                    );

    echo $Contactos->agregarContacto($datos);

?>