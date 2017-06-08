<?php
    include("conexion_sql.php");
?>

<meta charset="UTF-8">
<html>
<head>
   
    <title>Formulario</title>
</head>
<body>
    <form method ="POST" action="Registro_Curriculum.php"><br  />
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
                <td> Direccion: </td>
                <td> <input type ="text" name ="direccion"><br  /> </td>
           </tr>

           <tr>
                <td> Telefono: </td>
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
        <br />
        <input type="submit" name="enviar" value="enviar"><br   />

        <table>
</form>
<br /><br /><br />

<?php
    if(isset($_POST['enviar']))
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

</body>
</html>