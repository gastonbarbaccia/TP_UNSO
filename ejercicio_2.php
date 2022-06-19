<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicios Integradores</title>

</head>
<style>
    table,
    th,
    td {
        border: 1px solid black;
    }
</style>

<body>

    <?php
    echo "Ejercicio 2 <br>";
    echo "Disponemos de un mazo de cartas, baraja española, de manera aleatoria debemos sacar una y mostrar el resultado del mismo.";

    //Tipos: oros,copas, espadas y bastos.
    //Cantidad de cartas del 1 al 12
    //48 naipes

    ?>
    <table>
        <tr>
            <th style="font-size:150%;height:90px;">Saca una carta del mazo.</th>
        </tr>
        <tr>
            <td><input id="carta" style="width:100%"></td>
        </tr>
        <tr>
            <td style="text-align:center;padding-top: 5%;">
                <form>
                    <input id="operacion" name="operacion" value="true" hidden>
                    <button style="width:80%">Sacar otra carta</button>
                </form>
            </td>
        </tr>
    </table>
    <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
    <script>
        $(function() {

            $('form').on('submit', function(e) {

                e.preventDefault();

                $.ajax({
                    type: 'post',
                    url: 'mostrar_cartas.php',
                    data: $('form').serialize(),
                    success: function(data) {
                        console.log(data);
                        document.getElementById("carta").setAttribute('value', data);
                    }
                });

            });

        });
    </script>
</body>

</html>