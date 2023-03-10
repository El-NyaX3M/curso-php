<script>
    window.onload = function(){
        var lista = document.getElementById("contacto-lista");
        lista.onchange = seleccionarContacto;

        function seleccionarContacto(){
            window.location = "?op=cambios&contacto_slc="+lista.value;
        }
    }
</script>
<form action="php/modificar-contacto.php" name="cambio_frm" id="cambio-contacto" method="post" enctype="multipart/form-data">
    <fieldset>
        <legend>Cambio de Contacto</legend>
        <div>
            <label for="contacto-lista">Contacto: </label>
            <select name="contacto_slc" class="cambio" id="contacto-lista" required>
                <option value="">- - -</option>
                <?php include("select-email.php") ?>
            </select>
        </div>
        <?php 
            if(isset($_GET["contacto_slc"])){
                $conexion2 = conectarse();
                $contacto = $_GET["contacto_slc"];
                $query_contacto = "SELECT * FROM contactos WHERE email = '$contacto'";
                $exec = $conexion2->query($query_contacto);
                $registro_contacto = $exec->fetch_assoc();
                include("php/cambio-form.php");
            }
            include("php/mensajes.php");
        ?>
    </fieldset>
</form>