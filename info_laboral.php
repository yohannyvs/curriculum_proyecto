<?php
    include("conexion_sql.php");
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
     <tr>   
        <td> Institucion Academica </td>
        <td> Curso </td>
        <td> Año </td>
     </tr>

     <?php
        $select_info_laboral = "SELECT institucion_laboro, puesto, ano_ingreso, ano_salio FROM informacion_laboral where cedula_usuario =  $cedula;";

        $comm4 = sqlsrv_query($con, $select_info_laboral);

        while($fila = sqlsvr_fetch_array($ejecutar))
        {
            $inst_lab1 = $fila['Institucion_Academica'];
            $curso1 = $fila["curso"];
            $anno1 = $fila['Anno'];
        }
     ?>
     <tr>   
         <td> <?php echo $inst_lab1 ?> </td>
         <td> <?php echo $curso1 ?> </td>
         <td> <?php echo $anno1 ?> </td>
     </tr>
 </table>

<?php
    if(isset($_POST['enviar_inf_lab']))
    {
        $inst_lab=$_POST['inst_lab'];
        $puesto=$_POST['puesto'];
        $anno_ing=$_POST['anno_ing'];
        $anno_sal=$_POST['anno_sal'];

        $insertar3 = "INSERT INTO informacion_laboral (cedula_usuario,institucion_laboro,puesto,ano_ingreso,ano_salio) values ($cedula1, '$inst_lab', '$puesto', $anno_ing, $anno_sal);";
 
        $comm3 = sqlsrv_query($con, $insertar3);

        if($comm3)
        {
            echo "<h3> Datos Insertados </h3>";
        }
        else
        {
            echo "<h3> Error al Insertar </h3>";
        }
    }
?>

</body>
</html>