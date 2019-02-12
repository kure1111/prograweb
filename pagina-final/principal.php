<?php
	include 'titulo2.html';
    include 'biblioteca.php';
    $db = conectaDB();
?>
<div class="container" style="margin-top: 70px">
<section class="portfolio masthead">
    <div class="container">
      <h2 class="text-center text-uppercase ">Agregado Recientemente</h2>
      <hr class="star-dark mb-5">
      <div class="row">
<?php
	$consulta="SELECT * FROM noticias  ORDER BY fecha DESC";
	$resultado = $db->query($consulta);
	if (!$resultado) {
	    print "Error al obtener los datos.";
	}else{
		$i=0;
		foreach($resultado as $key) {
			echo "<div class=\"col-md-6 col-lg-4\">
          <a class=\"portfolio-item d-block mx-auto\" href=\"verNoticia.php?id=".$key['id']."\"><div class=\"portfolio-item-caption d-flex position-absolute h-100 w-100\">
              <div class=\"portfolio-item-caption-content my-auto w-100 text-center text-dark\">
                <i class=\"fas fa-search-plus fa-3x\"></i>
              </div>
            </div>
				<img class=\"img-fluid\" src=\"imagenes/".$key['foto']."\" alt=\"\"><br>
				 <p class=\"mb-4 \"><strong>".$key['nombre']."</strong></p>
		</a></div>";
			$i++;
		}
	}
	$db=null;
?>
      </div>
    </div>
  </section>
 </div>
<?php
	include 'piedepagina.html';
?>
