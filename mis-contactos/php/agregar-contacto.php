<?php
    $email = $_POST["email_txt"];
    $nombre = $_POST["nombre_txt"];
    $sexo = $_POST["sexo_rdo"];
    $nacimiento = $_POST["nacimiento_txt"];
    $telefono = $_POST["telefono_txt"];
    $pais = $_POST["pais_slc"];

    $imagen_generica = ($sexo == "M")?"amigo.png":"amiga.png";

    include("conexion.php");
    $query = "SELECT * FROM contactos WHERE email = '$email'";
    $exec = $conexion->query($query);
    $num_regs = $exec->num_rows;

    if($num_regs == 0){
        include("funciones.php");
        $tipo = $_FILES["foto_fls"]["type"];
        $archivo = $_FILES["foto_fls"]["tmp_name"];
        $se_subio_imagen = subir_imagen($tipo, $archivo, $email);

        $imagen = empty($archivo)?$imagen = $imagen_generica:$se_subio_imagen;

        $query = "INSERT INTO contactos(email, nombre, sexo, nacimiento, telefono, pais, imagen) VALUES ('$email', '$nombre', '$sexo', '$nacimiento', '$telefono', '$pais', '$imagen')";
        $exec = $conexion->query($query);

        if($exec) $mensaje = "Se ha dado de alta el contacto correctamente.";
        else $mensaje = "No se pudo dar de alta al contacto.";
    }
    else{
        $mensaje = "No se pudo dar de alta al contacto porque ya existe.";
    }
    $conexion->close();
    header("Location: ../index.php?op=alta&mensaje=$mensaje");
?>