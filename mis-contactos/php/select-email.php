<?php
    include("conexion.php");
    $query = "SELECT * FROM contactos ORDER BY email";
    $exe = $conexion->query($query);

    while($registro = $exe->fetch_assoc()){
        echo "<option value='".$registro["email"]."'";
        if($_GET["contacto_slc"] == $registro["email"]){
            echo " selected";
        }
        echo ">".$registro["email"]."</option>";
    }
?>