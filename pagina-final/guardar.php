<?php	
	require_once('biblioteca.php');
	$db=conectaDB();
	if (!isset($_POST['guardar'])) {	
		date_default_timezone_set('America/Mexico_City');  
		$nombre=$_POST['nombre'];
		$titulo=$_POST['titulo'];
		$seccion=$_POST['seccion'];
		$contenido=$_POST['contenido'];
		
		$fecha=date("Y-m-d H:i:s");
		$nombreImg = date("YmdHis");
		
		$tama = $_FILES['foto']['size'];
	   	$tipo = $_FILES['foto']['type'];

		
		if ($tipo=="image/png"){
			$src =  "imagenes/".$nombreImg.".png";	
			$imagen=$nombreImg.".png";
		}else if($tipo=="image/jpeg"){
			$src =  "imagenes/".$nombreImg.".jpeg";
			$imagen=$nombreImg.".jpeg";
		}
		
		//if (copy($_FILES['foto']['tmp_name'],$src)) 
		if(true)
		{	
			$consulta="INSERT  INTO noticias(autor,nombre,seccion,contenido,fecha,foto) values('$nombre','$titulo','$seccion','$contenido','$fecha','$imagen')";

			$resultado = $db->query($consulta);
			if ($resultado==null) {
			    print "Error: No se puedieron guardar los datos.";
			} else {
			    echo "Los datos se han guardado.";
			    header('refresh:1; url=nuevaNoticia.php');
			}
		}
		else
		{
			echo "Error: No se subio la imagen, guardado cancelado.";
		}
	}
	$db=null;
?>
