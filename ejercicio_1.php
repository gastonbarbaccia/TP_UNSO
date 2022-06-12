<?php

echo "Ejercicio 1 <br>";
echo "Dado un Número entero, determinar si es capicua.";
echo "<br>";

$numero = 2123212;
$num_inv = 0;
$aux = $numero;

while ($aux != 0) {
    $resto = $aux % 10;
    $num_inv = $num_inv * 10 + $resto;
    $aux = (int)($aux / 10);
}
if ($numero == $num_inv)
    print "El n&uacute;mero $numero Es capic&uacute;a<br />";
else
    print "El n&uacute;mero $numero NO es capic&uacute;a<br />";


?>