<form id="alta-contacto" name="alta_frm" action="php/agregar-contacto.php" method="post" enctype="multipart/form-data">
    <fieldset>
        <legend>Alta de Contacto</legend>
        <div>
            <label for="email">Email: </label>
            <input type="email" id="email" class="cambio" name="email_txt" placeholder="Introduce email" title="Tu email" required>
        </div>
        <div>
            <label for="nombre">Nombre: </label>
            <input type="text" id="nombre" class="cambio" name="nombre_txt" placeholder="Introduce nombre" title="Tu nombre" required>
        </div>
        <div>
            <label for="m">Sexo: </label>
            <input type="radio" id="m" name="sexo_rdo" title="Tu sexo" value="M" required>&nbsp;<label for="m">Masculino</label>
            &nbsp;&nbsp;&nbsp;
            <input type="radio" id="f" name="sexo_rdo" title="Tu sexo" value="F" required>&nbsp;<label for="f">Femenino</label>
        </div>
        <div>
            <label for="nacimiento">Fecha de nacimiento: </label>
            <input type="date" name="nacimiento_txt" id="nacimiento" class="cambio" placeholder="Escribe tu cumpleaños" title="Tu cumpleaños" required>
        </div>
        <div>
            <label for="telefono">Teléfono: </label>
            <input type="number" id="telefono" name="telefono_txt" class="cambio" placeholder="Ingresa teléfono" title="Tu telefono" required>
        </div>
        <div>
            <label for="pais">País: </label>
            <select name="pais_slc" id="pais" class="cambio">
                <option value="">- - -</option>
                <?php include("select-pais.php");?>
            </select>
        </div>
        <div>
            <label for="foto">Foto: </label>
            <div class="adjuntar-archivo cambio">
                <input type="file" id="foto" name="foto_fls" title="Sube tu foto">
            </div>
        </div>
        <div>
            <input type="submit" id="enviar-alta" class="cambio" name="enviar_btn" value="agregar">
        </div>
        <?php include("php/mensajes.php");?>
    </fieldset>
</form>