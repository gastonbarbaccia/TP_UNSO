<?php

$fecha = $_POST['fecha'];
$nombres = $_POST['nombres'];
$impuesto = $_POST['provincia'];

$fila1_codigo = $_POST['codigo1'];
$fila1_descripcion = $_POST['descripcion1'];
$fila1_cantidad = $_POST['cantidad1'];
$fila1_precio = $_POST['precio1'];

$fila2_codigo = $_POST['codigo2'];
$fila2_descripcion = $_POST['descripcion2'];
$fila2_cantidad = $_POST['cantidad2'];
$fila2_precio = $_POST['precio2'];

$precio_total1 = $fila1_precio * $fila1_cantidad;
$precio_total2 = $fila2_precio * $fila2_cantidad;

$precio_neto = $precio_total1 + $precio_total2;

if($impuesto == 10){
    $impuesto_total = $precio_neto * 10 / 100;
}else{
    $impuesto_total = $precio_neto * 20 / 100;
}

$total_final = $impuesto_total  + $precio_neto;

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla de impuestos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>

<body>

    <div style="padding-left:2% ;padding-top:2%">
        Consigna - Clase 10
    </div>
    <div style="padding-left:2% ;padding-top:2%">
        <div style="border: 1px solid;width:70%;padding-left:2%;padding-top:2%;padding-right:3%;padding-bottom:3%">
            <table>
                <tr>
                    <td style="width:45%;border: 1px solid;">Fecha:</td>
                    <td><input class="form-control" type="text" style="width:85%;border: 1px solid" value="<?php echo $fecha ?>"></td>
                </tr>
                <tr>
                    <td style="width:45% ;border: 1px solid; border-radius: 25px;">Nombres:</td>
                    <td><input class="form-control" style="width:85%;border: 1px solid" value="<?php echo $nombres ?>"></td>
                </tr>
                <tr>
                    <td style="width:45% ;border: 1px solid; border-radius: 25px;">Impuesto:</td>
                    <td><input class="form-control" style="width:85%;border: 1px solid" value="<?php echo $impuesto ?>"></td>
                </tr>
            </table>
            <div style="padding-top:1%;border: 1px solid;">Detalle</div>
            <table style="border: 1px solid;">
                <tr>
                    <th style="width:20% ;border: 1px solid;">Codigo</th>
                    <th style="width:20% ;border: 1px solid;">Descripcion</th>
                    <th style="width:20% ;border: 1px solid;">Cantidad</th>
                    <th style="width:20% ;border: 1px solid;">Precio</th>
                    <th style="width:20% ;border: 1px solid;">Total</th>
                </tr>
                <tr>
                    <td><input type="text" class="form-control" value="<?php echo $fila1_codigo ?>" style="border: 1px solid;"></td>
                    <td><input type="text" class="form-control" value="<?php echo $fila1_descripcion ?>" style="border: 1px solid;"></td>
                    <td><input type="text" class="form-control" value="<?php echo $fila1_cantidad ?>" style="border: 1px solid;"></td>
                    <td><input type="text" class="form-control" value="<?php echo $fila1_precio ?>" style="border: 1px solid;"></td>
                    <td><input type="text" class="form-control" value="<?php echo $precio_total1 ?>" style="border: 1px solid;"></td>
                </tr>
                <tr>
                    <td><input type="text" class="form-control" value="<?php echo $fila2_codigo ?>" style="border: 1px solid;"></td>
                    <td><input type="text" class="form-control" value="<?php echo $fila2_descripcion ?>" style="border: 1px solid;"></td>
                    <td><input type="text" class="form-control" value="<?php echo $fila2_cantidad ?>" style="border: 1px solid;"></td>
                    <td><input type="text" class="form-control" value="<?php echo $fila2_precio ?>" style="border: 1px solid;"></td>
                    <td><input type="text" class="form-control" value="<?php echo $precio_total2 ?>" style="border: 1px solid;"></td>
                </tr>
                <tr>
                    <td><input type="text" class="form-control" style="display:none"></td>
                    <td><input type="text" class="form-control" style="display:none"></td>
                    <td><input type="text" class="form-control" style="display:none"></td>
                    <td><input type="text" class="form-control" value="Neto" style="border: 1px solid;"></td>
                    <td><input type="text" class="form-control" style="border: 1px solid;" value="<?php echo $precio_neto ?>"></td>
                </tr>
                <tr>
                    <td><input type="text" class="form-control" style="display:none"></td>
                    <td><input type="text" class="form-control" style="display:none"></td>
                    <td><input type="text" class="form-control" style="display:none"></td>
                    <td><input type="text" class="form-control" value="Impuestos" style="border: 1px solid;"></td>
                    <td><input type="text" class="form-control" style="border: 1px solid;" value="<?php echo $impuesto_total ?>"></td>
                </tr>
                <tr>
                    <td><input type="text" class="form-control" style="display:none"></td>
                    <td><input type="text" class="form-control" style="display:none"></td>
                    <td><input type="text" class="form-control" style="display:none"></td>
                    <td><input type="text" class="form-control" value="Total" style="border: 1px solid;"></td>
                    <td><input type="text" class="form-control" style="border: 1px solid;" value="<?php echo $total_final ?>"></td>
                </tr>
            </table>
            <br>
            <a href="ejercicio_3.php">Volver</a>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>

</html>