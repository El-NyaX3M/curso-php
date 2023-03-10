<?php
    $email = $_POST["email_hdn"];
    $nombre = $_POST["nombre_txt"];
    $sexo = $_POST["sexo_rdo"];
    $nacimiento = $_POST["nacimiento_txt"];
    $telefono = $_POST["telefono_txt"];
    $pais = $_POST["pais_slc"];

    include("conexion.php");
    $query = "SELECT * FROM contactos WHERE email = '$email'";
    $exec = $conexion->query($query);
    $num_regs = $exec->num_rows;

    if($num_regs == 1){
        if(empty($_FILES["foto_fls"]["tmp_name"])){
            $imagen = $_POST["foto_hdn"];
        }else{
            include("funciones.php");
            $tipo = $_FILES["foto_fls"]["type"];
            $archivo = $_FILES["foto_fls"]["tmp_name"];
            $imagen = subir_imagen($tipo, $archivo, $email);
        }

        $query = "UPDATE contactos SET nombre = '$nombre', sexo = '$sexo', nacimiento ='$nacimiento', telefono = '$telefono', pais = '$pais', imagen = '$imagen' WHERE email = '$email'";
        $exec = $conexion->query($query);
        if($exec)$mensaje = "Se han concretado los cambios exitosamente.";
        else $mensaje = "Los cambios no se pudieron llevar a cabo.";
    }else{
        $mensaje = "No se pudieron concretar los cambios. El correo no existe o está duplicado.";
    }
    $conexion->close();
    header("Location: ../index.php?op=cambios&mensaje=$mensaje");
?>