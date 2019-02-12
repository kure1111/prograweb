<?php
	include('biblioteca.php');
	$db=conectaDB();
	$id=$_POST['id'];
	$mg=0;
	
	$consulta="SELECT numLikes FROM noticias where id=$id";
	$res = $db->query($consulta);
	if ($res) {
		foreach ($res as $key) {
			$mg=(int)$key['numLikes'];
			$mg=$mg+1;    	
		}	    
	}

	$consulta="UPDATE noticias SET numLikes=$mg where id=$id";
	$res = $db->query($consulta);
	if (!$res) {
	    print "Error: 'Me gusta' no guardado";
	} else {
	   header('Location:verNoticia.php?id='.$id);
	}		  


	$db=null;
?>
