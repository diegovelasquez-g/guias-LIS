<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Mis Datos</title>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, user-scalable=no,initial-scale=1.0,maximum-scale=1.0,minimum-scale=1.0"/>
        <!--Definiendo una hoja de estilo-->
        <link rel="stylesheet" media="screen" href="css/tabla.css">
        <script src=""></script>
        <script src=""></script>
    </head>
    <body>
        <table>
            <thead>
                <tr>
                    <th colspan="3">Mis Datos</th>
                </tr>
            </thead>
            <tbody>
                       <?php 
                       $nombre= "Diego Alejandro Velásquez Gómez";
                       $nacimiento = "Hospital San Rafael, Santa Tecla, La Libertad";
                       $edad = 21;
                       $carnet = "VG190501";
                       echo "<tr>";
                       echo "<td>Nombre</td>";
                       echo "<td>".$nombre."</td>";
                       echo "</tr>";
                       echo "<tr>";
                       echo "<td>Lugar de Nacimiento</td>";
                       echo "<td>".$nacimiento."</td>";
                       echo "</tr>";
                       echo "<tr>";
                       echo "<td>Edad</td>";
                       echo "<td>".$edad." años</td>";
                       echo "</tr>";
                       echo "<tr>";
                       echo "<td>Carnet de Estudiante</td>";
                       echo "<td>".$carnet."</td>";
                       echo "</tr>";
                       
                       ?>
                </tbody>
        </table>
    </body>
</html>