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
	<?php
        require 'scripts/conecta.php';
        $sql = "SELECT * FROM NoticiasSistema";
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


	<!--SLIDE DE IMAGENES-->
	<div id="myCarousel" class="carousel slide"  data-interval="3600" data-ride="carousel">
		<!--indicaciones del slide-->
		<ol class="carousel-indicators">
			<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			<li data-target="#myCarousel" data-slide-to="1"></li>
			<li data-target="#myCarousel" data-slide-to="2"></li>
		</ol>

		<!-- Comtenedor para las imagenes-->
		<div class="carousel-inner">
			
			<div class="item active"><img src="imagenes/slide1.png" alt="Pimera Imagen">
			<div class="carousel-caption visible-lg">
				<h3>Primer Encabezado de imagen</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia alias deleniti saepe incidunt numquam explicabo repellendus, totam natus necessitatibus dolore facere, eos voluptas nesciunt expedita. Aliquid nostrum sint excepturi! Omnis.</p>
			</div>
			</div>
			<div class="item"><img src="imagenes/slide2.png" alt="Segunda Imagen">
			<div class="carousel-caption visible-lg">
				<h3>Segundo Encabezado de imagen</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia alias deleniti saepe incidunt numquam explicabo repellendus, totam natus necessitatibus dolore facere, eos voluptas nesciunt expedita. Aliquid nostrum sint excepturi! Omnis.</p>
			</div>
			</div>
			<div class="item"><img src="imagenes/slide3.png" alt="Tercera Imagen">
			<div class="carousel-caption visible-lg">
				<h3>Tercer Encabezado de imagen</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia alias deleniti saepe incidunt numquam explicabo repellendus, totam natus necessitatibus dolore facere, eos voluptas nesciunt expedita. Aliquid nostrum sint excepturi! Omnis.</p>
			</div>
			</div>
		</div>

		<!--Navegacion del slide-->
		<a  class="carousel-control left" href="#myCarousel" data-slide="prev">
			<span class="glyphicon glyphicon-chevron-left"></span>

		</a>
		<a class="carousel-control right" href="#myCarousel" data-slide="next">
			<span class="glyphicon glyphicon-chevron-right"></span>			
		</a>

	</div>
	<br>
	<div class="row">
		<div class="col-md-6">
		<div class="panel panel-primary">
		<div class="panel-heading">
			<h3 class="panel-title">Inicia Sesión</h3>
		</div>
		<div class="panel-body">
		<!--Formulario de inicio de sesión-->
		<form action="">
			<div class="form-group">
				<label for="usuario">Usuario</label>
				<input type="usuario" class="form-control" id="inputusuario" placeholder="usuario o Email" required>
			</div>
			<div class="form-group">
				<label for="password">Contraseña</label>
				<input type="password" class="form-control" id="inputpassword" placeholder="password" required>

			</div>
			<div class="checkbox">
				<label><input type="checkbox">Recuerdarme</label>
			</div>
				<button class="btn btn-primary" type="submit">Iniciar</button>
		</form>
		</div>
		</div>
		</div>
			<div class="col-md-6">
				<div class="panel panel-info">
					<div class="panel-heading">
						<h3 class="panel-title">Últimas Noticias</h3>
					</div>
					<div class="panel-body">
						<table class="table table-condensed">
							
							<?php
								for ($i=0; $i < $num; $i++) {
									 $row = $result->fetch_assoc();
									echo "<td><h4>".$row['nombreNoticia']."</h4> <br>";
									echo $row['DescripcionNoticia']."<br>";
									echo "<p class='text-right'>".$row['fechaNoticia']."</p>";

									echo "</td>";
								}
							?>

						</table>
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