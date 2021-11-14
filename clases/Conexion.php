<?php

    class Conexion {
        public function conectar() {
            $servidor = "localhost";
            $usuario = "root";
            $password = "";
            $bd = "agenda";

            $conexion = mysqli_connect($servidor, $usuario, $password, $bd);

            return $conexion;
        }
    }

?>