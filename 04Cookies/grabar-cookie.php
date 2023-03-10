<?php
//Para que la cookie funcione se tiene que especificar la ruta del directorio
//en el cuarto parámetro con "/", se entiende que la cookie existirá en
//todo el directorio del sitio.
    setcookie("idioma_solicitado", $_GET["idioma"], time() + 864000, "/");
    header("Location: usar-cookie.php");
?>