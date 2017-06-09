<?php
       include("conexion_sql.php");
       $select="SELECT * FROM Registro WHERE Usuario=$_POST[usuario] AND Contrasena=$_POST[contrasena]"; 
       $comm = sqlsrv_query($con, $select);

        if($comm)
        {
            echo "<h3> Bienvenido</h3>";
        }
        else
        {
            echo "<h3> Error al consultar</h3>";
        }
    
?>