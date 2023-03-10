<?php
    function conectarse(){
        $servidor = "localhost";
        $usuario = "root";
        $password = "root";
        $bd = "mis_contactos";

        $conectar = mysqli_connect($servidor, $usuario, $password, $bd) or die("No se pudo conectar al servidor.");
        return $conectar;
    }
    $conexion = conectarse();
?>