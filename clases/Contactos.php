<?php

    require_once "Conexion.php";

    class Contactos extends Conexion {
        public function agregarContacto($datos){
            $conexion = Conexion::conectar();

            $sql = "INSERT INTO t_contactos (id_categoria,
                                             nombres,
                                             apellidos,
                                             telefono,
                                             email)
                    VALUES (?, ?, ?, ?, ?)";
            $query = $conexion->prepare($sql);
            $query->bind_param('issss', $datos['idCategoria'],
                                        $datos['nombres'],
                                        $datos['apellidos'],
                                        $datos['telefono'],
                                        $datos['email'],);
            $respuesta = $query->execute();
            return $respuesta;
        }

        public function eliminarContacto($idContacto) {
            $conexion = Conexion::conectar();

            $sql = "DELETE FROM t_contactos WHERE id_contacto = ?";
            $query = $conexion->prepare($sql);
            $query->bind_param('i', $idContacto);
            $respuesta = $query->execute();
            return $respuesta;
        }

        public function obtenerDatosContacto($idContacto) {
            $conexion = Conexion::conectar();

            $sql = "SELECT id_categoria,
                            nombres,
                            apellidos,
                            telefono,
                            email,
                            id_contacto 
                    FROM t_contactos 
                    WHERE id_contacto = '$idContacto'";
            $result = mysqli_query($conexion,$sql);
            $contacto = mysqli_fetch_array($result);
            $datos = array(
                            "id_contacto" => $contacto['id_contacto'],
                            "id_categoria" => $contacto['id_categoria'],
                            "nombres" => $contacto['nombres'],
                            "apellidos" => $contacto['apellidos'],
                            "telefono" => $contacto['telefono'],
                            "email"=> $contacto['email'],
                                );
            return $datos;
        }

        public function actualizarContacto($datos) {
            $conexion = Conexion::conectar();

            $sql = "UPDATE t_contactos SET id_categoria = ?,
                                            nombres = ?,
                                            apellidos = ?,
                                            telefono = ?,
                                            email = ? 
                    WHERE id_contacto = ?";
            $query = $conexion->prepare($sql);
            $query->bind_param('issssi',$datos['idCategoria'],
                                        $datos['nombres'],
                                        $datos['apellidos'],
                                        $datos['telefono'],
                                        $datos['email'],
                                        $datos['idContacto']);
            $respuesta = $query->execute();
            return $respuesta;
        }
    }
?>