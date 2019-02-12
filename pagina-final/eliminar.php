<?php
	require_once("biblioteca.php");
	$db=conectaDB();
	$id = $_GET['id'] ;
	$consulta="DELETE FROM noticias where id=$id";
	$resultado = $db->query($consulta);
	if ($resultado==null) {
	    print "Error: Los datos no se eliminaron.";
	}else{
		echo "Noticia eliminada.";
		header("refresh:1; url=eliminarNoticia.php");
	}
	$db=null;
?>