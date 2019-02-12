<?php
 	include("biblioteca.php");
 	$db=conectaDB();	
	$usuario=$_POST["usuario"];
	$contra=$_POST["contrasena"];

	$consulta = "SELECT * FROM usuarios WHERE usuario =	'$usuario' AND contrasena = '$contra'";
	$resultado = $db->query($consulta);

	if($resultado==null){
	    print "Error en la conexion con la base de datos.";
	}else {
		$datos=array();
		foreach ($resultado as $key) {
			$datos=$key;
		}
		if (isset($datos['usuario']) and isset($datos['contrasena'])) {
			header("Location: principal.php");	
		}else{
			print "usuario o contraseña no valido.";
		}
		
	}
?>