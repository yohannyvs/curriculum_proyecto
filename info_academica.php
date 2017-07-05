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
    <form method ="POST" action="info_academica.php">
       
        <h3> Informacion Académica </h3>

        <table> 

            <tr>
                <td> Institución Académica: </td>
                <td> <input type="text" name = "inst_acad" > </td>
            </tr>

            <tr>
                <td> Titulo: </td>
                <td> <input type="text" name = "titulo" > </td>
            </tr>

            <tr>
                <td> Año: </td>
                <td> <input type="text" name = "anno" > </td>
            </tr>

        </table>
        <input type="submit" name="enviar_inf_acad" value="enviar"><br   /><br />
        <input type="submit" name="siguiente" value="enviar"><br   /><br />

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
                <td> <a href = "info_academica.php?editar=<?php echo $id_inf_acad ?>"> Editar </td>
                <td> <a href = "info_academica.php?borrar=<?php echo $id_inf_acad ?>"> Borrar </td>
            </tr>

            <?php
                }
            ?>

        </table>

<?php
    if(isset($_GET['editar']))
    {
        include("editar_inf_acad.php");
        $_SESSION['id_edit'] = $_GET['editar'];
    }
?>


<?php
    echo $ced;

    if(isset($_POST['enviar_inf_acad']))
    {
        $inst_acad=$_POST['inst_acad'];
        $titulo=$_POST['titulo'];
        $anno=$_POST['anno'];

        $insertar2 = "INSERT INTO informacion_academica (cedula_usuario,Institucion_Academica,Anno,curso) values ($ced, '$inst_acad', $anno, '$titulo');";
 
        $comm2 = sqlsrv_query($con, $insertar2);

        if($comm2)
        {
            echo "<h3> Datos Insertados </h3>";
            header ("Location: info_academica.php");
        }
        else
        {
            echo "<h3> Error al Insertar </h3>";
        }
    }

    if(isset($_POST['siguiente']))
    {
        header ("Location: info_laboral.php");
    }
?>


</body>
</html>