<?php

$operacion = $_POST['operacion'];

if(isset($operacion)){

    $numero_carta = random_int(1, 12);
    $tipos_cartas = array('oro','copas','espada','basto');
    $tipo_carta = random_int(0, 3);

    echo "Tu carta es el ".$numero_carta." de ".$tipos_cartas[$tipo_carta];

}


?>