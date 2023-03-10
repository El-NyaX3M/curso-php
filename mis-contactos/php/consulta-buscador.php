<div>
    <input type="hidden" name="op" value="consultas">
    <label for="buscador">Buscador: </label>
    <input type="search" name="q" id="buscador" class="cambio" placeholder="Ingresa tu búsqueda" title="Buscador">
    <input type="submit" name="enviar_btn" id="enviar-buscar" value="buscar" class="cambio">
    <?php
        if($_GET["q"] != null){
            $q = $_GET["q"];
            $query = "SELECT * FROM contactos WHERE MATCH(email, nombre, sexo, telefono, pais) AGAINST('$q' IN BOOLEAN MODE)";
            include("tabla-resultados.php");
        }
    ?>
</div>