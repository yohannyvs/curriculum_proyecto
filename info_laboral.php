<?php
    include("conexion_sql.php");

    session_start();

    $ced = $_SESSION["cedula"];
?>

<meta charset="UTF-8">
<html>
<head>
   
    <title>Formulario</title>
</head>

<body>
      
    <form method ="POST" action="info_laboral.php">

        <h3> Información Laboral </h3>
        <table> 

            <tr>
                <td> Institución que Laboro: </td>
                <td> <input type="text" name = "inst_lab" > </td>
            </tr>

            <tr>
                <td> Puesto: </td>
                <td> <input type="text" name = "puesto" > </td>
            </tr>

            <tr>
                <td> Año de Ingreso: </td>
                <td> <input type="text" name = "anno_ing" > </td>
            </tr>

            <tr>
                <td> Año de Salida: </td>
                <td> <input type="text" name = "anno_sal" > </td>
            </tr>

        </table>

        <input type="submit" name="enviar_inf_lab" value="enviar"><br   /><br />

</form>

 <table> 
            <tr align="center">
                <td> ID </td>
                <td> Institución Academica </td>
                <td> Titulo </td>
                <td> Año </td>
                <td> Acción </td>
                <td> Acción </td>
            </tr>

            <?php
                $query = "  SELECT id_informacion_academica, Institucion_Academica, curso, Anno FROM informacion_academica where cedula_usuario = $ced;";

                $command = sqlsrv_query($con, $query);

                $i=0;

                while($fila = sqlsrv_fetch_array($command))
                {
                    $id_inf_acad = $fila["id_informacion_academica"];
                    $inst_acad1 = $fila["Institucion_Academica"];
                    $an = $fila["Anno"];
                    $cur = $fila["curso"];
                    $i++;
            ?>

            <tr align="center">
                <td> <?php echo $id_inf_acad ?> </td>
                <td> <?php echo $inst_acad1 ?> </td>
                <td> <?php echo $cur ?> </td>
                <td> <?php echo $an ?> </td>
                <td> <a href = "info_academica.php?edit=<?php echo $id_inf_acad ?>"> Editar </td>
                <td> <a href = "info_academica.php?borrar=<?php echo $id_inf_acad ?>"> Borrar </td>
            </tr>

            <?php
                }
            ?>

        </table>

<?php
    echo $ced;
?>
</body>
</html>