<?php
    if($_POST["usuario_txt"] == "Niggel" && $_POST["password_txt"] == "1234"){
        session_start(); //inicio de sesión

        $_SESSION["autentificado"] = true;
        $_SESSION["usuario"] = $_POST["usuario_txt"];

        header("Location: archivo-protegido.php");
    }
    else{
        header("Location: index.php?error=si");
    }
?>