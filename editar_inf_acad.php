<?php
    session_start();
    $_SESSION['id_edit'] = $_GET['editar'];
    $editar_id = $_SESSION['id_edit'];

    if(isset($_GET['editar']))
    {

        $query = "SELECT Institucion_Academica, curso, Anno FROM informacion_academica where id_informacion_academica = '$editar_id';";

        $command = sqlsrv_query($con, $query);

        $fila = sqlsrv_fetch_array($command);

        $inst_acad1 = $fila["Institucion_Academica"];
        $an = $fila["Anno"];
        $cur = $fila["curso"];
        echo $editar_id;
    }
?>

<br>

<form method ="POST" action="#">
       
        <h3> Informacion Académica </h3>

        <table> 

            <tr>
                <td> Institución Académica: </td>
                <td> <input type="text" name = "inst_acad" value="<?php echo $inst_acad1; ?>"> </td>
            </tr>

            <tr>
                <td> Titulo: </td>
                <td> <input type="text" name = "titulo" value="<?php echo $an; ?>" > </td>
            </tr>

            <tr>
                <td> Año: </td>
                <td> <input type="text" name = "anno" value="<?php echo $cur; ?>" > </td>
            </tr>

        </table>
        <input type="submit" name="act_inf_acad" value="Actualizar"><br   /><br />

</form>

<?php

    if(isset($_POST['act_inf_acad']))
    {
        $act_inst_acad=$_POST['inst_acad'];
        $act_titulo=$_POST['titulo'];
        $act_anno=$_POST['anno'];

        $update = "UPDATE informacion_academica SET Institucion_Academica='$act_inst_acad', curso='$act_titulo',  Anno=$act_anno where id_informacion_academica = '$editar_id';";
 
        $cmd = sqlsrv_query($con, $update);

        if($cmd)
        {
            echo "<script> alert( 'Datos Actualizados' ) </script>";
            echo "<script> window.open( 'info_academia.php', '_self' ) </script>";
        }
        else
        {
            echo "<script> alert( 'Error: Datos no Actualizados' ) </script>";
        }
    }
?>