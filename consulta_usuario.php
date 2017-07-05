<?php
        include("conexion_sql.php");
        $cedula=$_POST["cedula_i"];

        $sql = "SELECT Cedula,Nombre,apellidos,Direccion,telefono,Correo,Nacionalidad,Fecha_de_nacimiento,Sexo,foto FROM Informacion_General WHERE Cedula='$cedula'";
        $stmt = sqlsrv_query($con,$sql);
        if( $stmt === false) {
            die( print_r( sqlsrv_errors(), true) );
        }

        while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC) ) {
            echo "<br>";
            echo "<br>";
            echo "<br>";
            echo $row['Cedula'].",".$row['Nombre'].",".$row['apellidos'].",".$row['Direccion'].",".$row['telefono'].",".$row['Correo'].",".$row['Nacionalidad'].",".$row['Fecha_de_nacimiento'].",".$row['Sexo'].",".$row['foto'];
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
            echo $row['Institucion_Academica'].",".$row['anno'].",".$row['curso'];
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
            echo  $row['Institucion_laboro'].",".$row['puesto'].",".$row['ano_ingreso']." ".$row['ano_salio'];
        }

        sqlsrv_free_stmt( $stmt);

?>