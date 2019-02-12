<?php
	include("titulo2.html");
?>
	<div class="container" style="margin-top: 70px">
		<section id="nuevaNoticia">
    <div class="container ">
      <h2 class="text-center text-uppercase">Nueva Noticia</h2>
      <hr class="star-dark mb-5">
      <div class="row">
        <div class="col-lg-8 mx-auto">
           <form name="sentMessage" id="contactForm" novalidate="novalidate" action="guardar.php" method="post" enctype='multipart/form-data'>
            <div class="control-group">
              <div class="form-group floating-label-form-group controls mb-0 ">
                <label>Autor:</label>
                <input class="form-control" id="nombre" name="nombre" type="text" placeholder="Nombre" required="required" data-validation-required-message="Porfavor ingresa el nombre del autor.">
                <p class="help-block text-danger"></p>
              </div>
            </div>
            <div class="control-group">
              <div class="form-group floating-label-form-group controls mb-0 ">
                <label>Titulo:</label>
                <input class="form-control" id="titulo" name="titulo" type="text" placeholder="Titulo de la noticia" required="required" data-validation-required-message="Porfavor ingresa el titulo de la noticia.">
                <p class="help-block text-danger"></p>
              </div>
            </div>
            <div class="control-group">
              <div class="form-group floating-label-form-group controls mb-0 ">
                <label>Seccion:</label>
                <select class="form-control" id="seccion" name="seccion">
						<option value="politica">Politica</option>
						<option value="cultura">Cultura</option>
						<option value="deportes">Deportes</option>
					</select>
              </div>
            </div>
            <div class="control-group card shadow" style="margin-top: 20px">
            	<div class="container">
              <div class="form-group floating-label-form-group controls mb-0 ">
                <label>Noticia:</label>
                <textarea class="form-control"  rows="10" id="contenido" name="contenido" type="text" placeholder="Descripción de la noticia" required="required" data-validation-required-message="Porfavor ingresa la descripción de la noticia."></textarea>
                <p class="help-block text-danger"></p>
              </div>
              </div>
            </div>
            <div class="control-group">
              <div class="form-group floating-label-form-group controls mb-0 ">
                <label>Fotografia:</label>
                <input type="file" class="form-control" id="foto" name="foto" required="required" data-validation-required-message="Porfavor seleccione una fotografia para la noticia.">
                <p class="help-block text-danger"></p>
              </div>
            </div>
            <br>
            <div id="success"></div>
            <div class="form-group">
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