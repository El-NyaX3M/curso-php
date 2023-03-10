<?php
    session_start();

    //Evalúo que la sesión continúe verificando una de las variables creadas en control.php;
    //cuando esta ya no coincida con su valor inicial se redirige al archivo de salir.php
    if(!$_SESSION["autentificado"]){
        header("Location: salir.php");
    }
?>