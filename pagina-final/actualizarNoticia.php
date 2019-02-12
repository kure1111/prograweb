<?php
	require_once('biblioteca.php');
	$db=conectaDB();

	$id=$_POST['id'];
	$nombre=$_POST['nombre'];
	$titulo=$_POST['titulo'];
	$seccion=$_POST['seccion'];
	$contenido=$_POST['contenido'];

	if (!isset($_POST['guardar'])) {
		$consulta="UPDATE noticias SET nombre='$titulo',autor='$nombre',seccion='$seccion',contenido='$contenido' where id=$id";
		$resultado = $db->query($consulta);
		if ($resultado==null) {
		    print "Error: No se pudieron actualizar los datos";
		} else {
		    echo "Los datos se actualizaron.";
		   	header("refresh:1; url=modificarNoticia.php");
		}		  
	}

	$db=null;
?>
