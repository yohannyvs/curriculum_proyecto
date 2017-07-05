
<html>
<head>
    <meta charset="UTF-8">
    <title>Adminstrador</title>
</head>

<style type="text/css">

	body {
       background-color:black);
     }


#main{
 margin-left:  -100px;
 text-align: center;
}


#info_aca{

 margin-left: 450px;
}

#info_A{
     margin-top:-315px;
     margin-left:500px;
}

#cedula{
margin-right: 40px;;
}

#info_L{

 margin-left: 1000px;
  margin-top:-120px;
}

#laboral{
   margin-left: 1000px;

}


</style>


<body>
   <form method ="POST" action="#"> <br  />
  
         <div id="main"><h1>Adminsitardor de usuarios</h1></div>

         <div id="titulo"><h2>Ingrese numero de cedula del usuario</h2></div>

         <div id="cedula"><h3><input type ="text" name ="cedula_i"></h3></div>
        
        <p>   
             <input type="submit" name="submit" value="enviar"/><br   />

        <p>
 
  <table> 
            <h3> Informacion Académica </h3>
            
            <tr>
                <td> Cedula: </td>
                <td> <input type ="text" name ="cedula" value="<?php echo $row['Cedula'] ?>"><br  /> </td>
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
       
        <h3 id="info_A"> Informacion Académica </h3>

        <table id="info_aca"> 

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
     
  
        <h3 id="info_L"> Información Laboral </h3>
        <table id="Laboral"> 

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


    <?php
        include("conexion_sql.php");
        $cedula= $_POST["cedula_i"];

        $sql = "SELECT Cedula,Nombre,apellidos,Direccion,telefono,Correo,Nacionalidad,Fecha_de_nacimiento,Sexo,foto FROM Informacion_General WHERE Cedula='$cedula'";
        $stmt = sqlsrv_query($con,$sql);
        if( $stmt === false) {
            die( print_r( sqlsrv_errors(), true) );
        }

        while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC) ) {
            echo "<br>";
            echo "<br>";
            echo "<br>";
            echo "<br>";
            echo $row['Cedula']."  ,  ".$row['Nombre']."  ,  ".$row['apellidos']."  ,  ".$row['Direccion']."  ,  ".$row['telefono']."  ,  ".$row['Correo']."  ,  ".$row['Nacionalidad']."  ,  ".$row['Fecha_de_nacimiento']."  ,  ".$row['Sexo']."  ,  ".$row['foto'];
        }

        sqlsrv_free_stmt( $stmt);

?>

<?php

     
        $sql = "SELECT Institucion_Academica,anno,curso FROM Informacion_academica WHERE cedula_usuario=$cedula";
        $stmt = sqlsrv_query( $con, $sql );
        if( $stmt === false) {
            die( print_r( sqlsrv_errors(), true) );
        }

        while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC) ) {
           echo "<br>";
           echo "<br>";
            echo $row['Institucion_Academica']."  ,  ".$row['anno']."  ,  ".$row['curso'];
        }

        sqlsrv_free_stmt( $stmt);


?>

  <?php 
        $sql = "SELECT Institucion_laboro,puesto,ano_ingreso,ano_salio FROM Informacion_laboral WHERE cedula_usuario='$cedula'";
        $stmt = sqlsrv_query( $con, $sql );
        if( $stmt === false) {
            die( print_r( sqlsrv_errors(), true) );
        }

        while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC) ) {
            echo "<br>";
           echo "<br>";
            echo  $row['Institucion_laboro']."  ,  ".$row['puesto']."  ,  ".$row['ano_ingreso']." ".$row['ano_salio'];
        }

        sqlsrv_free_stmt( $stmt);

?>


   </body>
</html>