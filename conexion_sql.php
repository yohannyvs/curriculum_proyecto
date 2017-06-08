<?php

	$servername = 'localhost';
	$connectionInfo = array('Database' => 'Recursos_Humanos', 'UID'=>'sa', 'PWD'=>'progra', 'CharacterSet'=>'UTF-8');

	$con = sqlsrv_connect($servername, $connectionInfo);

	if($con)
	{
		echo "Conexion exitosa";
	}
	else{
		echo "falla de conexion";
		die(print_r(sqlsrv_errors()));
	}
?>