<?php
    $email = $_POST["email_slc"];
    include("conexion.php");
    $query = "DELETE FROM contactos WHERE email = '$email'";
    $exec = $conexion->query($query);
    if($exec) $mensaje = "El registro de <b>$email</b> ha sido eliminado exitosamente.";
    else $mensaje = "El registro no se pudo eliminar";

    header("Location: ../index.php?op=baja&mensaje=$mensaje");
?>