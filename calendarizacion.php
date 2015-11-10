<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Calendarización</title>
	<link rel="stylesheet" href="estilos/bs/css/bootstrap.css">
    <link rel="stylesheet" href="estilos/estilo1.css">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</head>
<body>
         <?php
        require 'scripts/conecta.php';
        $sql = "SELECT * FROM Sala";
        $result = $con->query($sql);
        $num = mysqli_num_rows($result);
      
        ?>
	<nav role="navigation" class="navbar navbar-inverse">
		<!-- Agrupamos para mejor  visualizacion en mobiles-->
		<div class="navbar-header">
		<button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle">
		<span class="sr-only">Sistema de Gestión de Salas</span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
		</button>
		<a  href="#" class="navbar-brand">SisGes</a>
		</div>
		<!--Conjunto de los links de nav para el toggleo-->
		<div id="navbarCollapse" class="collapse navbar-collapse">
			<ul class="nav navbar-nav">
				<li ><a href="homeusu.php">Home</a></li>
				<li class="active"><a href="calendarizacion.php">Calendarización</a></li>
				<li><a href="historialPrestamo.php">Historial De Prestamos</a></li>
				<li><a href="peticion.php">Hacer una Petición</a></li>
				
			</ul>
			<ul class="nav navbar navbar-right">
			<li><a href="www.itver.edu.mx" target="_blank">Itver</a></li>
			</ul>
		</div>
	</nav>	

                <div class="row">
                <div class="col-md-12">
                	<div class="panel panel-success">
                		<div class="panel-heading">
                			<h3 class="panel-title">Hola, aquí estan todas las salas disponibles para prestamo. </h3>
                		</div>
                		<div class="panel-body">
                			<p class="text-center">Aquí encontrarás todas las salas disponibles para prestamos
                			y sus respectivas especificaciones, así como también podrás observar si la sala que deseas
                			esta ya ocupada o en espera de aceptacion, en dado caso el administrador deberá decidir el prestamo.</p>
                		</div>
                	</div>
                </div>   
                 </div>
						<!--Necesito una función para acomodar todas las salas :D-->
						<div class="row">
                 <?php
                 		for ($i=0; $i < $num; $i++) {
                 			$row = $result->fetch_assoc();
                 			    ?>
                 		
                 		<div class="col-md-6">
                 			<div class="panel panel-primary">
                 				<div class="panel-heading">
                 					<h3 class="panel-title text-center">
                 						<?php  echo $row['nombreSala'];?>
                 					</h3>
                 				</div>
                 				<div class="panel-body">
                 					<p>Dibujo con canvas :D </p>

                 					<table class="table table-bordered">
                 						<?php
                 							echo "<tr>";
                 							echo "<th>Numero de Mesas Max</th>";
                 							echo "<td  class='text-center'>".$row['numMesas']."</td>";
                 							echo "</tr>";

                 							echo "<tr>";
                 							echo "<th>Numero de Sillas Max</th>";
                 							echo "<td class='text-center'>".$row['numSillas']."</td>";
                 							echo "</tr>";

                 							echo "<tr>";
                 							echo "<th>Tiene Clima</th>";
                 							echo "<td class='text-center'>".(($row['clima'] == 1) ? '<span class="glyphicon glyphicon-ok-sign"></span>' :
                                        '<span class="glyphicon glyphicon-remove-sign"></span>')."</td>";
                 							echo "</tr>";

                 							echo "<tr>";
                 							echo "<th>Tiene Internet</th>";
                 							echo "<td class='text-center'>".(($row['internet'] == 1) ? '<span class="glyphicon glyphicon-ok-sign"></span>' :
                                        '<span class="glyphicon glyphicon-remove-sign"></span>')."</td>";
                 							echo "</tr>";

                 							echo "<tr>";
                 							echo "<th>Tiene Proyector</th>";
                 							echo "<td class='text-center'>".(($row['proyector'] == 1) ? '<span class="glyphicon glyphicon-ok-sign"></span>' :
                                        '<span class="glyphicon glyphicon-remove-sign"></span>')."</td>";
                 							echo "</tr>";
                 						?>
                 					</table>
                 					<p>Calendario de disponibilidad D:</p>
                 				</div>
                 			</div>
                 		</div>
                 			
                 		<?php }
                 ?>

		</div>

			<div class="row">
				<div class="col-md-12">
			<div class="panel panel-primary">
			<div class="panel-heading">
				<h5 class="panel-title text-center">
					Haz una Petición
				</h5>
				</div>
				<div class="panel-body" style="min-height: 30;">
					<a href="peticion.php">
					<button type="button" class="btn btn-default btn-lg center-block" >
    				<span class="glyphicon glyphicon-ok"></span> Hacer Mi Petición</button>
    				</a>
				</div>

			</div>
		</div>
			</div>
	

	<!--Footer-->
	<footer>
		
			<div class="row">
				<div class="col-md-5">
					

					<address>
					  <strong>Instituto Tecnólogico de Veracruz</strong><br>
					 Calz. Miguel Angel de Quevedo 2779 Col. Formando Hogar<br>
					  Veracruz,Ver. MEXICO<br>
					  <abbr title="Phone">Tel:</abbr> (229) 934 15 00
					</address>
					 
					<address>
					  <strong>Luis Angel Perez Muñoz -> WebMaster</strong><br>
					  <a href="mailto:#">ingluisperez.m@outlook.com</a>
					</address>

					<p>Derechos Reservados 2015-2016</p>

				</div>
			<div class="col-md-3">
				<p>Siguenos en las redes sociales :)</p>
				<ul>
					<li class="banners social"><a href=""><img src="imagenes/sociales/facebook.png" alt="Facebook" width="50px"></a></li>
					<li class="banners social"><a href=""><img src="imagenes/sociales/twitter.png" alt="Twitter" width="50px"></a></li>
					<li class="banners social"><a href=""><img src="imagenes/sociales/youtube.png" alt="YouTube" width="50px"></a></li>
				</ul>
			</div>
			<div class="col-md-4">
				<p>Enlaces asociados</p>
				<ul>
					<li class="banners"><a href=""><img src="imagenes/banners/tecno.png" alt="Itver" width="300px"></a></li>
					<li class="banners"><a href=""><img src="imagenes/banners/moodle.jpg" alt="Moodle" width="300px" height="50px"></a></li>
					<li class="banners"><a href=""><img src="imagenes/banners/lci.jpg" alt="LCI ITVER" width="300px" height="100px"></a></li>			
					<li class="banners"><a href=""><img src="imagenes/banners/cepc.jpg" alt="CEPC" width="300px" height="100px"></a></li>
					<li class="banners"><a href=""><img src="imagenes/banners/cisco.jpg" alt="Cisco" width="300px" height="100px"></a></li>
				</ul>
			</div>
		</div>
	</footer>

</body>
</html>