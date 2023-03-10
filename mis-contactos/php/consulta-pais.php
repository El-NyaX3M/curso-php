<div>
    <input type="hidden" name="op" value="consultas">
    <label for="pais_slc" id="pais">País: </label>
    <select name="pais_slc" id="pais" class="cambio">
        <option value="">- - -</option>
        <?php include("select-pais.php") ?>
    </select>
</div>
<input type="submit" id="enviar-buscar" class="cambio" name="enviar_btn" value="buscar">
<?php
    if($_GET["pais_slc"] != null){
        $pais = $_GET["pais_slc"];
        $query = "SELECT * FROM contactos WHERE pais = '$pais'";
        include("tabla-resultados.php");
    }
?>