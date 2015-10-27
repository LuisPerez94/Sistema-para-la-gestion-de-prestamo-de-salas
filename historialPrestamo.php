<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bienvenido :D</title>
	<link rel="stylesheet" href="estilos/bs/css/bootstrap.css">
    <link rel="stylesheet" href="estilos/estilo1.css">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</head>
<body>
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
				<li class="active"><a href="homeusu.php">Home</a></li>
				<li><a href="calendarizacion.php">Calendarización</a></li>
				<li><a href="historialPrestamo.php">Historial De Prestamos</a></li>
				
			</ul>
			<ul class="nav navbar navbar-right">
			<li><a href="www.itver.edu.mx" target="_blank">Itver</a></li>
			</ul>
		</div>
	</nav>	

		<div class="row">
			<div class="col-md-12">
				<div class="panel panel-primary">
					<div class="panel-heading">
						<h4 class="panel-title">Este es tu historial de prestamos :)</h4>
						<br>
						<p>Numero de prestamos realizados <span class="badge">3</span></p>
					</div>
					<div class="panel-body">
					<table class="table">
						<tr>
							<th>Nombre del evento</th>
							<th>Sala que se prestó para este evento</th>
							<th>Fecha del préstamo</th>
							<th>Numero de personas que asistieron</th>

						</tr>
						<tr>
							<td>Aquí se generará con php</td>
							<td>Aquí se generará con php</td>
							<td>Aquí se generará con php</td>
							<td>Aquí se generará con php</td>
						</tr>
												<tr>
							<td>Aquí se generará con php</td>
							<td>Aquí se generará con php</td>
							<td>Aquí se generará con php</td>
							<td>Aquí se generará con php</td>
						</tr>
												<tr>
							<td>Aquí se generará con php</td>
							<td>Aquí se generará con php</td>
							<td>Aquí se generará con php</td>
							<td>Aquí se generará con php</td>
						</tr>
					</table>
					</div>
				</div>

			</div>

		</div>
	

	<br>
	

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
					<li>Facebook</li>
					<li>Twitter</li>
					<li>Youtube</li>
				</ul>
			</div>
			<div class="col-md-4">
				<p>Enlaces asociados</p>
				<ul>
					<li>Instituto Tecnologico de Veracruz</li>
					<li>Moddle</li>
					<li>LCI</li>
					<li>CEPC</li>
					<li>Cisco</li>
				</ul>
			</div>
		</div>
	</footer>

</body>
</html>