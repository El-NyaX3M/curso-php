<?php
    $conection = mysqli_connect("localhost", "root", "root", "mis_contactos");

    echo "<h1>Las 4 operaciones básicas a una BD</h1>";

    echo "<h2>INSERCIÓN DE DATOS</h2>";
    $query = "INSERT INTO contactos(email, nombre, sexo, nacimiento, telefono, pais, imagen) VALUES ('niggel@g.com', 'Niggel Alther', 'M', '2001-09-13', '6121190766', 'México', 'miau.png')";
    //$execute = mysqli_query($conection, $query);
    echo "Datos insertados.";

    echo "<h2>ELIMINACIÓN DE DATOS</h2>";
    $query = "DELETE FROM contactos WHERE email = 'niggel@gmail.com'";
    //$execute = mysqli_query($conection, $query);
    echo "Datos eliminados.";

    echo "<h2>MODIFICACIÓN DE DATOS</h2>";
    $query = "UPDATE contactos SET email = 'miaumiau@gmail.com', nombre = 'gray', imagen = 'cuchufleto.png' WHERE email = 'niggel@gmai.com'";
    //$execute = mysqli_query($conection, $query);
    echo "Datos modificados.";

    echo "<h2>CONSULTA DE DATOS</h2>";
    $query = "SELECT * FROM contactos WHERE email = 'miaumiau@gmail.com'";
    $execute = mysqli_query($conection, $query);
    while($registro = mysqli_fetch_array($execute)){
        echo $registro["email"];
    }
?>
