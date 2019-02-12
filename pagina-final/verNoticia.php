<?php
	include('titulo.html');
	include("biblioteca.php");

	$id=$_GET['id'];
	$db=conectaDB();
	$query="SELECT * FROM noticias  WHERE id = $id";
	$result = $db->query($query);
?>
<div class="container" style="margin-top: 130px">
<?php
	if (!$result) {
	    print "<p>Error en la consulta.</p>";
	}else{
		foreach($result as $key) {
			echo "<div class='section-title'>".$key['autor']." / ".$key['fecha']."<h1 class=\"h3 mb-2 text-gray-800\">".$key['nombre']."</h1></div>";
			echo "<p class=\"mb-4\"><img class=\"foto-noticia\" src=\"imagenes/".$key['foto']."\"><br>".$key['contenido']."</p>";
		}
	}
?>
	<form method="post" action="guardarMG.php">
		<input type="hidden" id="id" name="id" value=<?php echo "\"$id\""; ?>>
		<div class="form-group row">
			<div class="col-sm-10">
				<button type="submit" class="btn btn-primary" id="like">Me Gusta</button>
			</div>
		</div>
	</form>
	<h3>Comentarios:</h3>
<div class='section-title' style="width: 100%;display: flex; align-items: center;flex-direction: column;margin-bottom: 10px;">
		<h3>Agregar comentario</h3>
		<form style="width: 80%;margin-top: 50px" method="post" action="saveComent.php" enctype='multipart/form-data'>
			<div class="form-group row">
				<label for="validation01" class="col-sm-2 col-form-label">Nombre</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" id="autor" name="autor" placeholder="Nombre" value="">
				</div>
			</div>
			<div class="form-group row">
				<label for="validation01" class="col-sm-2 col-form-label">Comentario</label>
				<div class="col-sm-10">
					<textarea type="text" class="form-control" rows="4" id="coment"name="coment" placeholder="Comentario" value="" required></textarea>
				</div>
			</div>
			<input type="hidden" id="id" name="id" value=<?php echo "\"$id\""; ?>>
			<div class="form-group row">
				<div class="col-sm-10">
					<button type="submit" class="btn btn-primary" id="guardar">Guardar</button>
				</div>
			</div>
		</form>
	</div>
<?php
	$query="SELECT * FROM comentarios WHERE idnoticia = $id ORDER BY fecha DESC";
	$result = $db->query($query);
	if (!$result){
	    print "No se pudo obtener la informacion de los Comentarios";
	}else{
		foreach($result as $key) {
			echo "<div class='section section-title'><div class=\"container\"><p style=\"text-align:left\">".$key['nombre']."<br>".$key['comentario']."</p></div></div>";
		}
	}
?>
	</div>
<?php
	$db=null;
	include('piedepagina.html'); 
?>