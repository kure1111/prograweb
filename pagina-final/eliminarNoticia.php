<?php
	include("titulo2.html");
	require_once("biblioteca.php");
	$db=conectaDB();
?>	
<div class="container" style="margin-top: 70px">
<div class="container-fluid"><br><br><br>
	<h1 class="h3 mb-2 text-gray-800">Eliminar Noticia</h1>
          <p class="mb-4">Click en el link eliminar de la noticia que desee eliminar.</p>
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Eliminar Datos</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
		<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0" style="color: gray;">
                  <thead>
                  	<tr>
				<th>Titulo</th>
				<th>Tipo</th>
				<th>Autor</th>
				<th>Descripción</th>
				<th>Likes</th>
				<th>Fecha</th>
				<th>Opción</th>
			</tr>
		</thead>
		<tbody>
<?php
	$query="SELECT * FROM noticias";
	$result = $db->query($query);
	if (!$result) {
	    print "<p>Error en la consulta.</p>";
	} else {
	   	foreach ($result as $value) {
	   		echo "<tr>\n
				<td>".$value['nombre']."</td>\n
				<td>".$value['seccion']."</td>\n
				<td>".$value['autor']."</td>\n
				<td>".$value['contenido']."</td>\n
				<td>".$value['numLikes']."</td>\n
				<td>".$value['fecha']."</td>\n
				<td><a href=\"eliminar.php?id=".$value['id']."\">Eliminar</a></td>
			</tr>\n";
	   	}
	}
	$db=null;
?>
	</tbody>
		</table>
		</div>
		</div>
	</div>
</div>
</div>
<?php
	include("piedepagina.html");
?>
