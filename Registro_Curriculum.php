<?php
    include("conexion_sql.php");
?>

<meta charset="UTF-8">
<html>
<head>
   
    <title>Formulario</title>
</head>
<body>
    <form method ="POST" action="Registro_Curriculum.php">
        <h3> Informacion General </h3>
        <table> 
            <tr>
                <td> Cedula: </td>
                <td> <input type ="text" name ="cedula"><br  /> </td>
           </tr>

           <tr>
                <td> Nombre: </td>
                <td> <input type ="text" name ="nombre"><br  /> </td>
           </tr>

           <tr>
                <td>  Apellidos: </td>
                <td> <input type ="text" name ="apellidos"><br  /> </td>
           </tr>
                
           <tr>
                <td> Dirección: </td>
                <td> <input type ="text" name ="direccion"><br  /> </td>
           </tr>

           <tr>
                <td> Teléfono: </td>
                <td> <input type ="text" name ="telefono"><br  /> </td>
           </tr>

           <tr>
                <td> Email: </td>
                <td> <input type ="text" name ="email"><br  /> </td>
            </tr>

            <tr>
                <td> Nacionalidad: </td>
                <td> <input type ="text" name ="nacionalidad"><br  /> </td>
            </tr>

            <tr>
                <td> Fecha de Nacimiento: </td>
                <td> <input type ="text" name ="fecha_nacimiento"><br  /> </td>
            </tr>

            <tr>
                <td> Sexo: </td>
                <td> <input type ="text" name ="sexo"><br  /> </td>
            </tr>

            <tr>
                <td> Foto: </td>
                <td> <input type ="text" name ="foto"><br  /> </td>
            </tr>
        
        </table>
        <input type="submit" name="enviar_inf_gen" value="enviar"><br   /><br />

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

<?php
    if(isset($_POST['enviar_inf_gen']))
    {
        $cedula=$_POST['cedula'];
        $nombre=$_POST['nombre'];
        $apellidos=$_POST['apellidos'];
        $direccion=$_POST['direccion'];
        $telefono=$_POST['telefono'];
        $correo=$_POST['email'];
        $nacionalidad=$_POST['nacionalidad'];
        $fecha_nacimineto=$_POST['fecha_nacimiento'];
        $sexo=$_POST['sexo'];
        $foto=$_POST['foto'];

        $insertar = "INSERT into Informacion_General(Cedula,Nombre,Apellidos,Direccion,Telefono,Correo,Nacionalidad,Fecha_de_nacimiento,Sexo,Foto)values($cedula,'$nombre','$apellidos','$direccion',$telefono,'$correo','$nacionalidad','$fecha_nacimineto','$sexo','$foto')";
 
        $comm = sqlsrv_query($con, $insertar);

        if($comm)
        {
            echo "<h3> Datos Insertados </h3>";
        }
        else
        {
            echo "<h3> Error al Insertar </h3>";
        }
    }
?>

<?php
    if(isset($_POST['enviar_inf_acad']))
    {
        $cedula=$_POST['cedula'];
        $inst_acad=$_POST['inst_acad'];
        $titulo=$_POST['titulo'];
        $anno=$_POST['anno'];

        $insertar2 = "INSERT INTO informacion_academica (cedula_usuario,Institucion_Academica,Anno,curso) values ($cedula, '$inst_acad', $anno, '$titulo');";
 
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
?>

<?php
    if(isset($_POST['enviar_inf_lab']))
    {
        $cedula=$_POST['cedula'];
        $inst_lab=$_POST['inst_lab'];
        $puesto=$_POST['puesto'];
        $anno_ing=$_POST['anno_ing'];
        $anno_sal=$_POST['anno_sal'];

        $insertar3 = "INSERT INTO informacion_laboral (cedula_usuario,institucion_laboro,puesto,ano_ingreso,ano_salio) values ($cedula, '$inst_lab', '$puesto', $anno_ing, $anno_sal);";
 
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