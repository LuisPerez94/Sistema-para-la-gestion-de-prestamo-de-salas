<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Gesti&oacute;n de salas</title>
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
		<a href="login.php" class="navbar-brand">SisGes</a>
		</div>
		<!--Conjunto de los links de nav para el toggleo-->
		<div id="navbarCollapse" class="collapse navbar-collapse">
			<ul class="nav navbar-nav">
				<li class="active"><a href="registro.php">Registrate</a></li>
				<li><a href="acercade.php">Acerca De</a></li>
				
			</ul>
			<ul class="nav navbar navbar-right">
			<li><a src="http://www.itver.edu.mx/" target="_blank">Itver</a></li>
			</ul>
		</div>
	</nav>	

	<h1>¿Quiénes somos?</h1>
	<br>
	<div class="row">
		<div class="col-md-6">
		<div class="panel panel-primary">
		<div class="panel-heading">
			<h3 class="panel-title"> <span class="glyphicon glyphicon-user"></span>   Luis Angel Pérez Muñoz</h3>
		</div>
		<div class="panel-body">
			<div class="col-md-6">
			<div class="thumbnail">
				<img src="imagenes/luis.jpg" alt="luis">
				<div class="caption">
			        <h3 class="text-center">Acerca de mi</h3>
			        <p class="text-center">Programador amante de las teconologias web, me gusta mucho aprender sobre nuevos temas y después aplicarlos
			        en la práctica</p>
			        
			        <p class="text-center">Sigueme en mis redes</p>
			      </div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="panel panel-info">
				<div class="panel-heading">
					<h3 class="panel-title">Áreas de interés</h3>
				</div>
				<div class="panel-body">
				<ul class="list-group">
				  <li class="list-group-item"> <span class="glyphicon glyphicon-flag"></span> Programación Competitiva</li>
				  <li class="list-group-item"> <span class="glyphicon glyphicon-book"></span> Desarrollo web</li>
				  <li class="list-group-item"> <span class="glyphicon glyphicon-certificate"></span> Java Certifications</li>
				  <li class="list-group-item"> <span class="glyphicon glyphicon-comment"></span> Comunicación activa en inglés</li>
				  <li class="list-group-item"> <span class="glyphicon glyphicon-fire"></span> Paralelismo</li>
				</ul>
				</div>
				</div>

				
			</div>
			
		</div>
		</div>
			
		</div>
		<div class="col-md-6">
		<div class="panel panel-primary">
		<div class="panel-heading">
			<h3 class="panel-title"> <span class="glyphicon glyphicon-user"></span> Ivan Romero García</h3>
		</div>
		<div class="panel-body">
		<div class="col-md-6">
			<div class="thumbnail">
				<img src="imagenes/ivan.jpg" alt="Ivan">
				<div class="caption">
			        <h3>Acerca De Mi...</h3>
			        <p>...</p>
			        
			      </div>
				</div>
			</div>
			
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