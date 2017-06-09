<?php
    include("conexion_sql.php");
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

<?php
    session_start();

    $ced = $_SESSION["cedula"];

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
        }
        else
        {
            echo "<h3> Error al Insertar </h3>";
        }
    }

    if(isset($_POST['siguiente']))
    {
        include("info_laboral.php");
        ?>
            <a href="info_laboral.php" > </a>
        <?php
    }
?>

</body>
</html>