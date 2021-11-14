<?php

    require_once "../../clases/Contactos.php";
    $Contactos = new Contactos();
    $datos = array(
                "idContacto" => $_POST['idContactoU'],
                "nombres" => $_POST['nombresU'],
                "apellidos" => $_POST['apellidosU'],
                "telefono" => $_POST['telefonoU'],
                "email" => $_POST['emailU'],
                "idCategoria" => $_POST['idCategoriaSelectU']
                    );

    echo $Contactos->actualizarContacto($datos);

?>