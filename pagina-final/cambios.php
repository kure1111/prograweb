<?php
	include("titulo2.html");
	require_once("biblioteca.php");
	$db=conectaDB();

	$id = $_GET['id'] ;
	$noticia=array();
	$consulta="SELECT * FROM noticias where id=$id";
	$resultado = $db->query($consulta);
	if ($resultado==null) {
	    print "Los datos no se pudieron obtener.";
	}else{
		foreach ($resultado as $key) {
			$noticia=$key;
		}
	}
?>
<div class="container" style="margin-top: 70px">
		<section id="Modificarnoticia">
    <div class="container">
      <h2 class="text-center text-uppercase">Modificar Noticia</h2>
      <hr class="star-dark mb-5">
      <div class="row">
        <div class="col-lg-8 mx-auto">
           <form name="sentMessage" id="contactForm" novalidate="novalidate" action="actualizarNoticia.php" method="post" enctype='multipart/form-data'>
            <div class="control-group">
              <div class="form-group floating-label-form-group controls mb-0 ">
                <label>Autor:</label>
                <input class="form-control" id="nombre" name="nombre" type="text" <?php print "value=\"".$noticia['autor']."\""; ?> required="required" data-validation-required-message="Porfavor ingresa el nombre del autor.">
                <p class="help-block text-danger"></p>
              </div>
            </div>
            <div class="control-group">
              <div class="form-group floating-label-form-group controls mb-0 ">
                <label>Titulo:</label>
                <input class="form-control" id="titulo" name="titulo" type="text" <?php print "value=\"".$noticia['nombre']."\""; ?> required="required" data-validation-required-message="Porfavor ingresa el titulo de la noticia.">
                <p class="help-block text-danger"></p>
              </div>
            </div>
            <div class="control-group">
              <div class="form-group floating-label-form-group controls mb-0 ">
                <label>Seccion:</label>
                <select class="form-control" id="seccion" name="seccion">
						<option value="politica" <?php if($noticia['seccion']=="politica"){print "selected=\"true\"";}?>>Politica</option>
						<option value="cultura" <?php if($noticia['seccion']=="cultura"){print "selected=\"true\"";}?>>Cultura</option>
						<option value="deportes" <?php if($noticia['seccion']=="deportes"){print "selected=\"true\"";}?>>Deportes</option>
					</select>
              </div>
            </div>
            <div class="control-group card shadow" style="margin-top: 20px">
            	<div class="container">
              <div class="form-group floating-label-form-group controls mb-0 ">
                <label>Noticia:</label>
                <textarea class="form-control"  rows="10" id="contenido" name="contenido" type="text" placeholder="Descripción de la noticia" required="required" data-validation-required-message="Porfavor ingresa la descripción de la noticia."><?php print $noticia['contenido'];?></textarea>
                <p class="help-block text-danger"></p>
              </div>
              </div>
            </div>
            <br>
            <div class="form-group">
            	<input type="hidden" id="id" name="id" value=<?php print "\"$id\""; ?>>
              <button type="submit" class="btn btn-primary btn-xl" id="guardar">Guardar</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>
</div>
<?php
	include("piedepagina.html");
?>



























