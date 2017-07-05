<?php
       include("conexion_sql.php");
      
      $usu = $_POST["usuario"];
      $contra=$_POST["contrasena"];

       $select="SELECT * FROM Registro WHERE Usuario='$usu' AND Contrasena='$contra' "; 
       $comm = sqlsrv_query($con, $select);
     
        if($comm)
        {
            
            echo "<h3> Bienvenido</h3>";
            header("location: re.php"); 
 
        }
        else
        {
            echo "<h3> Error al consultar</h3>";
           
        }

      
    
     

    
    
?>

