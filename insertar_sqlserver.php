<?php
$server = "localhost";
$connectionInfo = array('Database' => 'prueba', 'UID'=>'sa', 'PWD'=>'progra', 'CharacterSet'=>'UTF-8');
$conn = sqlsrv_connect($server,$connectionInfo);
if($conn){
echo"conectado correctamente";
}
else
{
echo"no se pudo conectar";
}
?>
 
<?php
If(!empty($_POST)){
 
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
$insertar= "INSERT into Informacion_General(Cedula,Nombre,apellidos,Direccion,teléfono,Correo,Nacionalidad,Fecha_de_nacimiento,Sexo,foto)values($cedula,'$nombre','$apellidos','$direccion,'$telefono,'$correo','$nacionalidad','$fecha_nacimineto','$sexo','$foto')";
 
//Te faltaba esta linea
 
$recurso=sqlsrv_prepare($conn, $insertar);
 
//Para mas seguridad usa el valor retornado por sqlsrv_execute
 
if(sqlsrv_execute($recurso)){
      echo"Agregado correctamente";
}else{
      echo"No Agregado";
}
}
 
 
?>