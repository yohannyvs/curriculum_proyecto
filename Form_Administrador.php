<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Adminstrador</title>
</head>

<style type="text/css">

	body {
        background-image: url("AMANECER.jpg");
     }


#main{
 margin-left:  -100px;
 text-align: center;
}

#cedula{


margin-right: 40px;;


}


</style>


<body>
   <form method ="post" action="consulta_usuario.php"/><br  />
  
         <div id="main"><h1>Adminsitardor de usuarios</h1></div>

         <div id="titulo"><h2>Ingrese numero de cedula del usuario</h2></div>

         <div id="cedula"><h3><input type ="text" name ="cedula"></h3></div>
        
        <p>   
             <input type="submit" name="submit" value="enviar"/><br   />

        <p>
   
  <table> 
            <tr>
                <td> Cedula: </td>
                <td> <input type ="text" name ="cedula" value="<?php echo $row['Cedula']; ?>"><br  /> </td>
           </tr>

           <tr>
                <td> Nombre: </td>
                <td> <input type ="text" name ="nombre" value="<?php echo $row['Nombre']; ?>"><br  /> </td>
           </tr>

           <tr>
                <td>  Apellidos: </td>
                <td> <input type ="text" name ="apellidos" value="<?php echo $row['apellidos']; ?>"><br  /> </td>
           </tr>
                
           <tr>
                <td> Dirección: </td>
                <td> <input type ="text" name ="direccion" value="<?php echo $row['Direccion']; ?>"><br  /> </td>
           </tr>

           <tr>
                <td> Teléfono: </td>
                <td> <input type ="text" name ="telefono" value="<?php echo $row['teléfono']; ?>"><br  /> </td>
           </tr>

           <tr>
                <td> Email: </td>
                <td> <input type ="text" name ="email" value="<?php echo $row['Correo']; ?>"><br  /> </td>
            </tr>

            <tr>
                <td> Nacionalidad: </td>
                <td> <input type ="text" name ="nacionalidad" value="<?php echo $row['Nacionalidad']; ?>"><br  /> </td>
            </tr>

            <tr>
                <td> Fecha de Nacimiento: </td>
                <td> <input type ="text" name ="fecha_nacimiento" value="<?php echo $row['Fecha_de_nacimiento']; ?>"><br  /> </td>
            </tr>

            <tr>
                <td> Sexo: </td>
                <td> <input type ="text" name ="sexo" value="<?php echo $row['Sexo']; ?>"><br  /> </td>
            </tr>

            <tr>
                <td> Foto: </td>
                <td> <input type ="text" name ="foto" value="<?php echo $row['foto']; ?>"><br  /> </td>
            </tr>
        
        </table>
        

        <h3> Informacion Académica </h3>

        <table> 

            <tr>
                <td> Institución Académica: </td>
                <td> <input type="text" name = "inst_acad" value="<?php echo $row['Institucion']; ?>" > </td>
            </tr>

            <tr>
                <td> Titulo: </td>
                <td> <input type="text" name = "titulo" value="<?php echo $row['anno']; ?>" > </td>
            </tr>

            <tr>
                <td> Año: </td>
                <td> <input type="text" name = "anno" value="<?php echo $row['curso']; ?>" > </td>
            </tr>

        </table>
     

        <h3> Información Laboral </h3>
        <table> 

            <tr>
                <td> Institución que Laboro: </td>
                <td> <input type="text" name = "inst_lab" value="<?php echo $row['Institucion_laboro']; ?>" > </td>
            </tr>

            <tr>
                <td> Puesto: </td>
                <td> <input type="text" name = "puesto" value="<?php echo $row['puesto']; ?>" > </td>
            </tr>

            <tr>
                <td> Año de Ingreso: </td>
                <td> <input type="text" name = "anno_ing" value="<?php echo $row['ano_ingreso']; ?>" > </td>
            </tr>

            <tr>
                <td> Año de Salida: </td>
                <td> <input type="text" name = "anno_sal" value="<?php echo $row['ano_salio']; ?>" > </td>
            </tr>

        </table>



    </form>

 
</body>
</html>