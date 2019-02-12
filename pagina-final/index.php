<?php
	include 'titulo.html';
    include 'biblioteca.php';
    $db = conectaDB();
?>

<div class="bg-primary" style="margin-top: 70px">
<div id="wrapper">
	<div id="content-wrapper" class="d-flex flex-column">
<section class="portfolio masthead ">
    <div class="container">
      <h2 class="text-center text-uppercase text-dark">Destacadas</h2>
      <hr class="star-dark mb-5">
      <div class="row">
<?php
	$consulta="SELECT * FROM noticias  ORDER BY numLikes DESC";
	$resultado = $db->query($consulta);
	if (!$resultado) {
	    print "Error al obtener los datos.";
	}else{
		$i=0;
		foreach($resultado as $key) {
			echo "<div class=\"col-md-6 col-lg-4\">
          <a class=\"portfolio-item d-block mx-auto\" href=\"verNoticia.php?id=".$key['id']."\"><div class=\"portfolio-item-caption d-flex position-absolute h-100 w-100\">
              <div class=\"portfolio-item-caption-content my-auto w-100 text-center\">
                <i class=\"fas fa-search-plus fa-3x\"></i>
              </div>
            </div>
				<img class=\"img-fluid\" src=\"imagenes/".$key['foto']."\" alt=\"\"><br>
				 <p class=\"mb-4 text-dark\"><strong>".$key['nombre']."</strong></p>
		</a></div>";
			if ($i==8) {
				break;
			}
			$i++;
		}
	}
?>
      </div>
    </div>
  </section>
</div>

  <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar" style="margin-top: 70px">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Ultimas</div>
      </a>
<?php
	$consulta="SELECT * FROM noticias  ORDER BY fecha DESC";
	$resultado = $db->query($consulta);
	if (!$resultado) {
	    print "Error al obtener los datos.";
	}else{
		$i=0;
		foreach($resultado as $key) {
			echo "<hr class=\"sidebar-divider my-0\">
     <li class=\"nav-item\">
        <a class=\"nav-link\" href=\"verNoticia.php?id=".$key['id']."\">
          <i class=\"fas fa-fw fa-tachometer-alt\"></i>
          <span>".$key['fecha']."<br>".$key['nombre']."</span></a>
      </li>";
      		if ($i==5) {
				break;
			}
			$i++;
		}
	}
	$db=null;
?>
    </ul>
 </div>
</div>
<?php
	include 'piedepagina.html';
?>
