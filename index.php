<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carga de productos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>

<body>

    <div style="padding-left:2% ;padding-top:2%">
        Trabajo Práctico - Clase 10
    </div>
    <form style="padding-left:2% ;padding-top:2%" method="post" action="tabla_impuestos.php">
        <div style="border: 1px solid;width:70%;padding-left:2%;padding-top:2%;padding-right:3%;padding-bottom:3%">
            <table>
                <tr>
                    <td style="width:45%;">Fecha:</td>
                    <td><input class="form-control" type="date" style="width:85%;" id="fecha" name="fecha"></td>
                </tr>
                <tr>
                    <td style="width:45% ;">Nombres:</td>
                    <td><input class="form-control" style="width:85%;" id="nombres" name="nombres"></td>
                </tr>
                <tr>
                    <td style="width:45% ;">Provincia:</td>
                    <td>
                        <select class="form-select" aria-label="Default select example" style="width:85%;" id="provincia" name="provincia">
                            <option value="10" selected>Impuesto 1 (10%)</option>
                            <option value="20">Impuesto 2 (20%)</option>
                        </select>
                    </td>
                </tr>
            </table>
            <div style="padding-top:1%">Detalle</div>
            <br>
            <table>
                <tr>
                    <th style="width:25% ;">Codigo</th>
                    <th style="width:25% ;">Descripcion</th>
                    <th style="width:25% ;">Cantidad</th>
                    <th style="width:25% ;">Precio</th>
                </tr>
                <tr>
                    <td><input type="text" class="form-control" id="codigo1" name="codigo1"></td>
                    <td><input type="text" class="form-control" id="descripcion1" name="descripcion1"></td>
                    <td><input type="text" class="form-control" id="cantidad1" name="cantidad1"></td>
                    <td><input type="text" class="form-control" id="precio1" name="precio1"></td>
                </tr>
                <tr>
                    <td><input type="text" class="form-control" id="codigo2" name="codigo2"></td>
                    <td><input type="text" class="form-control" id="descripcion2" name="descripcion2"></td>
                    <td><input type="text" class="form-control" id="cantidad2" name="cantidad2"></td>
                    <td><input type="text" class="form-control" id="precio2" name="precio2"></td>
                </tr>
            </table>
            <br>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </div>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>

</html>