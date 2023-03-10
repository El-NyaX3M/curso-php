<?php
    error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING);
    $op = $_GET["op"];
    $titulo = "Home";
    switch($op){
        case 'alta':
            $contenido = "php/alta-contacto.php";
            $titulo = "Alta de contactos";
            break;
        
        case 'baja':
            $contenido = "php/baja-contacto.php";
            $titulo = "Baja de contactos";
            break;

        case 'cambios':
            $contenido = "php/cambios-contacto.php";
            $titulo = "Cambios de contactos";
            break;

        case 'consultas':
            $contenido = "php/consultas-contacto.php";
            $titulo = "Consultas de contactos";
            break;

        default:
            $contenido = "php/home.php";
            $titulo = "Mis Contactos";
            break;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $titulo?></title>
    <link rel="stylesheet" href="css/mis-contactos.css">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="js/jquery.min.js"></script>
    <script src="js/mis-contactos.js"></script>
</head>
<body>
    <section id="contenido">
        <nav>
            <ul>
                <li><a class="cambio" href="index.php">Home</a></li>
                <li><a class="cambio" href="?op=alta">Alta de Contacto</a></li>
                <li><a class="cambio" href="?op=baja">Baja de Contacto</a></li>
                <li><a class="cambio" href="?op=cambios">Cambios de Contacto</a></li>
                <li><a class="cambio" href="?op=consultas">Consultas de Contacto</a></li>
            </ul>
        </nav>
        <section id="principal">
            <?php include($contenido);?>
        </section>
    </section>
    
</body>
</html>