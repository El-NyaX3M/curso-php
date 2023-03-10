<?php
    //Pasos para conectarse a una base de datos MySQL con PHP.
    //1) Conectarme a la BD, esto con 'mysql_connect' necesitando 4 datos:
        //1) Servidor
        //2) Usuario de la BD
        //3) Password del usuario de la BD
        //4) Seleccionar la base de datos
    $conexion = mysqli_connect("localhost", "root", "root", "mis_contactos");
    echo "Se ha conectado a MySQL.<br>";

    //2) Crear consulta SQL.
    $query = "SELECT * FROM pais";

    //3) Ejecutar consulta SQL.
    $ejecutar_query = mysqli_query($conexion, $query);

    //4) Mostrar el resultado de ejecutar la consulta, esto dentro de un ciclo
    //y en una variable.
    while($registro = mysqli_fetch_array($ejecutar_query)){
        echo $registro["id_pais"]." - ".$registro["pais"]."<br>";
    }

    //5) Cerrar la conexión a la BD.
    mysqli_close($conexion);
    
?>