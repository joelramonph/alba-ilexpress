<?php

//conectamos con el servidor

	$conectar=@mysql_connect('localhost','root','jivi140198');

	//verificamos la conexion

	if (!$conectar) {

		echo "No se pudo conectar con el servidor";
		# code...
	}else{

		$base=mysql_select_db('trabajoslibres');

			if (!$base) {

				echo "No se encontro la base de datos";		
			}
	}

	//recuperar variables

	$nombre=$_POST['nombre'];
	$apellido=$_POST['apellido'];
	$correo=$_POST['correo'];
	$usuario=$_POST['usuario'];
	$clave=$_POST['clave'];
	$telefono=$_POST['telefono'];

	//hacer la sentencia sql

	$sql="INSERT INTO cuentausuarios VALUES ('$nombre','$apellido','$correo','$usuario','$clave','$telefono')";

	//ejecutamos la sentencia

	$ejecutar=mysql_query($sql);

	//verificamos la ejecucio

	if (!$ejecutar) {

		echo "hubo algun error";
		
	}else {

		echo "se ha creado su cuenta exitosamente<br><a href='index.html'>Volver</a>";
	}

?>