<div>
    <label for="m">Sexo</label>
    <input type="hidden" name="op" value="consultas">
    <input type="radio" id="m" name="sexo_rdo" title="Tu sexo" value="M" <?php if($_GET["sexo_rdo"] == "M") echo " checked"?> required>
    <label for="m" id="lm">Masculino</label>
    &nbsp;&nbsp;&nbsp;
    <input type="radio" name="sexo_rdo" id="f" title="Tu sexo" value="F"<?php if($_GET["sexo_rdo"] == "F") echo " checked"?> required>
    <label for="f" id="lf">Femenino</label>
</div>
<input type="submit" value="buscar" name="enviar_brn" id="enviar-buscar" class="cambio">
<?php
    if($_GET["sexo_rdo"] != null){
        $sexo = $_GET["sexo_rdo"];
        $query = "SELECT * FROM contactos WHERE sexo = '$sexo'";
        include("tabla-resultados.php");
    }
?>