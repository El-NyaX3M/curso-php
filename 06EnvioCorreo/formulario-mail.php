<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Envío de correo con la función mail de PHP</title>
    <style>
        form{
            margin: 1em auto;
            text-align: center;
        }
        span{
            color: #F60;
            font-size: 1.5em;
        }
    </style>
    <script>
        function validarForm(){
            var verificar = true;
            var expRegEmail = /^\b[\w.%+-]+@[\w.-]+\.[a-zA-Z]{2,4}$/;

            if(!document.mail_frm.de_txt.value){
                alert("El campo de 'De' es requerido.")
                document.mail_frm.de_txt.focus();
                verificar = false;
            }
            else if(!expRegEmail.exec(document.mail_frm.de_txt.value)){
                alert("El campo 'De' no es válido.");
                document.mail_frm.de_txt.focus();
                verificar = false;
            }
            else if(!document.mail_frm.para_txt.value){
                alert("El campo de 'Para' es requerido.")
                document.mail_frm.para_txt.focus();
                verificar = false;
            }
            else if(!expRegEmail.exec(document.mail_frm.para_txt.value)){
                alert("El campo 'Para' no es válido.");
                document.mail_frm.para_txt.focus();
                verificar = false;
            }
            else if(!document.mail_frm.asunto_txt.value){
                alert("El campo de 'Asunto' es requerido.")
                document.mail_frm.asunto_txt.focus();
                verificar = false;
            }
            else if(!document.mail_frm.mensaje_txa.value){
                alert("El campo de 'Mensaje' es requerido.")
                document.mail_frm.mensaje_txa.focus();
                verificar = false;
            }

            if(verificar){
                document.mail_frm.submit();
            }
        }

        window.onload = function(){
            document.mail_frm.enviar_btn.onclick = validarForm;
        }
    </script>
</head>
<body>
    <form name="mail_frm" action="http://bextlan.com/alumnos/recursos/curso-php/enviar-mail.php" method="post" enctype="application/x-www-form-urlencoded">
        De: <input type="text" name="de_txt">
        <br><br>
        Para <input type="text" name="para_txt">
        <br><br>
        Asunto: <input type="text" name="asunto_txt">
        <br><br>
        Mensaje: <textarea name="mensaje_txa"></textarea>
        <br><br>
        <input type="button" name="enviar_btn" value="Enviar">
        <br>
        <?php
            error_reporting(E_ALL ^E_NOTICE ^E_WARNING);
            if(isset($_GET["respuesta"])){
                echo "<span>".$_GET["respuesta"]."</span>";
            }
        ?>
    </form>
</body>
</html>