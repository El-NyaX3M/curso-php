<?php
    if(empty($_GET["pais_slc"])) include("conexion.php");
    include("funciones.php");
    $exec = $conexion->query($query);
    $num_regs = $exec->num_rows;
    
    if($num_regs == 0) echo "<br><br><span class='mensajes'>No se encontraron registros para esta búsqueda.</span><br><br>";
    else {
?>
<br><br>
<table>
    <thead>
        <tr>
            <th>email</th>
            <th>nombre</th>
            <th>sexo</th>
            <th>nacimiento</th>
            <th>telefono</th>
            <th>pais</th>
            <th>imagen</th>
        </tr>
    </thead>
    <tbody>
        <?php
            while($registro = $exec->fetch_assoc()){
        ?>
                <tr>
                    <td><?php echo $registro["email"]; ?></td>
                    <td><?php echo $registro["nombre"]; ?></td>
                    <td><?php echo ($registro["sexo"] == "M")?"Masculino":"Femenino"; ?></td>
                    <td><?php echo $registro["nacimiento"]; ?></td>
                    <td><?php echo $registro["telefono"]; ?></td>
                    <td><?php echo $registro["pais"]; ?></td>
                    <td><img src="img/fotos/<?php echo $registro["imagen"]; ?>"></td>
                </tr>
            <?php
            }; 
            ?>
    </tbody>
</table>
<?php
}
?>