<form id="baja-contact" name="baja_frm" action="php/eliminar-contacto.php" method="post" enctype="application/x-www-form-urlencoded">
    <fieldset>
        <legend>Baja de Contacto</legend>
        <div>
            <label for="email">Correo: </label>
            <select name="email_slc" id="email" class="cambio" required>
                <option value="">- - -</option>
                <?php include("select-email.php")?>
            </select>
        </div>
        <div>
            <input type="submit" name="enviar_btn" value="eliminar" id="enviar-baja" class="cambio">
        </div>
        <?php include("php/mensajes.php") ?>
    </fieldset>
</form>