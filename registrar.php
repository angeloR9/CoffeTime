<?php

include("con_db.php");

if (isset($_POST['enviar'])) {
    if (strlen($_POST['nombres'])) >= 1 && strlen($_POST['apellidos']) >= 1  && strlen($_POST['telefono']) >= 1  && strlen($_POST['correo']) >= 1  && strlen($_POST['comentarios']) >= 1{
        $nombre = $_POST['nombres'];
        $apellido = $_POST['apellidos'];
        $telefono = $_POST['telefono'];
        $correo = $_POST['correo'];
        $comentario = $_POST['comentarios'];

        $consulta = "INSERT INTO usuarios(Nombres, Apellidos, Telefono, Correo, Comentarios) VALUES ('$nombre','$apellido','$telefono','$correo','$comentarios')";
        $resultado = mysqli_query($conex,$consulta);
        if ($resultado) {
            ?>
            <h3>Te has registrado Correctamente!</h3>
            <?php 
        }else {
            ?>
            <h3>Ups ha ocurrido un error!</h3>
            <?php
        }
    }   else {
        ?>
        <h3>Por favor complete todos los campos!</h3>
        <?php
    }
}

?>