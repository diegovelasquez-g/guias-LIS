<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Dólares a Euros</title>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, user-scalable=no,initial-scale=1.0,maximum-scale=1.0,minimum-scale=1.0"/>
        <!--Definiendo una hoja de estilo-->
        <link rel="stylesheet" media="screen" href="css/resulta.css">
        <script src=""></script>
        <script src=""></script>
    </head>
    <body>
        <table>
            <thead>
                <tr>
                    <th>Resultado</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                 if(isset($_POST['submit']) && $_POST['submit'] == "Convertir"):
                    extract($_POST);
                    $canti = !empty($cantidad) ? $cantidad: "<a href=\"DR2-Ingreso.html\">No ingresó cantidad para convertir.</a>";
                    if (floatval($canti)>0):
                        $euros = $canti*0.8247611465;
                        $euros = "€ ".round($euros,2)." euros";
                    else:
                        $euros = "Los datos fueron ingresados incorrectamente, vuelva a ingresarlos";
                    endif;
                    echo "<td> ".$euros."</td>";
                 endif;
                ?>
            </tbody>
        </table>
    </body>
</html>