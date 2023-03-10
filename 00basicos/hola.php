<?php
echo("hola mundo. <br />Hola cruel mundo.<br /> <h1>Estoy aprendiendo PHP.</h1>");
$nombre = "Niggel";
$Nombre = "Alexis";

echo $nombre." y ".$Nombre." no son la misma persona.";
echo "<br/>";

$num1 = 20;
$num2 = 13;

$suma = $num1 + $num2;

echo $suma;

echo "<br>La variable \$suma tiene el valor de $suma. <br>";
$module = $num2 % 2;
if($module == 0){
    echo "El número es PAR.";
}
else{
    echo "El número es IMPAR.";
}
echo "<br><br>";

for($i = 0; $i <= 10; $i++){
    echo $i."<br>";
}
?>