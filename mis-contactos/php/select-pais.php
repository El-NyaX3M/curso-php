<?php
    if(!$registro_contacto["pais"]) include("conexion.php");
    $query = "SELECT * FROM pais ORDER BY pais";
    $exe = $conexion->query($query);

    while($registro = $exe->fetch_assoc()){
        $nombre_pais = $registro["pais"];
        echo "<option value='$nombre_pais'";
        if($nombre_pais == $registro_contacto["pais"]) echo " selected";
        else if($_GET["pais_slc"] == $registro["pais"]) echo " selected";
        echo ">$nombre_pais</option>";
    }
?>