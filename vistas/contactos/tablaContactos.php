<?php
    require_once "../../clases/Conexion.php";
    $con = new Conexion();
    $conexion = $con->conectar();

    $sql = "SELECT
                contactos.nombres as nombres,
                contactos.apellidos as apellidos,
                contactos.telefono as telefono,
                contactos.email as email,
                categorias.nombre as categoria,
                contactos.id_contacto as idContacto
            FROM
                t_contactos as contactos
                    INNER JOIN
                t_categorias as categorias
            ON contactos.id_categoria = categorias.id_categoria";
    $result = mysqli_query($conexion,$sql);
?>

<div class="card">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-hover table-condensed" id="tablaContactosDT">
                <thead>
                    <tr>
                        <th>Nombres</th>
                        <th>Apellidos</th>
                        <th>Telefono</th>
                        <th>Email</th>
                        <th>Categoria</th>
                        <th>Editar</th>
                        <th>Eliminar</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        while($mostrar = mysqli_fetch_array($result)){
                            $idContacto = $mostrar['idContacto'];
                     ?>
                    <tr>
                        <td><?php echo $mostrar['nombres'] ?></td>
                        <td><?php echo $mostrar['apellidos'] ?></td>
                        <td><?php echo $mostrar['telefono'] ?></td>
                        <td><?php echo $mostrar['email'] ?></td>
                        <td><?php echo $mostrar['categoria'] ?></td>
                        <td>
                            <span class="btn btn-warning btn-sm" onclick="obtenerDatosContacto('<?php echo $idContacto ?>')" data-toggle="modal" data-target="#modalActualizarContacto">
                                <span class="fas fa-user-edit"></span>
                            </span>
                        </td>
                        <td>
                            <span class="btn btn-danger btn-sm" onclick="eliminarContacto('<?php echo $idContacto ?>')">
                                <span class="fas fa-user-minus"></span>
                            </span>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

