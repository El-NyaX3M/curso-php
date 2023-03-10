<?php
    $de = $_POST["de_txt"];
    $para = $_POST["para_txt"];
    $asunto = $_POST["asunto_txt"];
    $mensaje = $_POST["mensaje_txa"];

    $cabeceras = "MIME-Version: 1.0\r\n";
    $cabeceras .= "Content-type: text/html; charset=iso-8859-1\r\n";
    $cabeceras .= "From: $de \r\n";

    $archivo = $_FILES["archivo_fls"]["tmp_name"];
    $destino = $_FILES["archivo_fls"]["name"];

    if(move_uploaded_file($archivo, $destino)){
        include("PHPMailer.php");
        include("SMTP.php");

        $mail = new PHPMailer();
        $mail -> isSMTP();
        $mail -> SMTPAuth = true;
        $mail -> SMTPSecure = "ssl";
        $mail -> Host = "smtp.gmail.com";
        $mail -> Port = 465;
        $mail -> From = $de;
        $mail -> AddAddress($para);
        $mail -> Username = "ngl.rpgamer@gmail.com";
        $mail -> password = "AAHN010913HDFLRGA2";
        $mail -> Subject = $asunto;
        $mail -> Body = $mensaje;
        $mail -> WordWrap = 50;
        $mail -> msgHTML($mensaje);
        $mail -> AddAttachment($destino);

        if($mail->Send()){
            $respuesta = "El mensaje ha sido enviado por medio de PHPMailer y la cuenta de gmail.";
        }
        else{
            $respuesta = "El mensaje no se pudo enviar con PHPMailer y la cuenta de gmail.";
            $respuesta .= " Error: ".$mail->ErrorInfo;
        }
    }
    else{
        $respuesta = "Ocurrió un error al subir el archivo adjunto.";
    }
    header("Location: formulario-phpmailer.php?respuesta=$respuesta");
?>