<?php
	$r=$_GET["r"];
	
?>
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

	<div class="row">
	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-info">
				<div class="panel-heading">
					<h3 class="panel-title">Bienvenido a la sección de resgitro</h3>

				</div>
				<div class="panel-body">
					<p class="text-center">Es importante que tomes en cuenta la siguiente información para llevar acabo tu resgitro:</p>
					<ul class="list-group">
				  <a class="list-group-item"><span class="glyphicon glyphicon-asterisk"></span> Debes ser jefe de departamento o maestro para poder solicitar una cuenta</a>
				  <a class="list-group-item"><span class="glyphicon glyphicon-asterisk"></span> Tu información sera enviada y verificada por el administador del sistema en un periodo máximo de dos días hábiles</a>
				  <a class="list-group-item"><span class="glyphicon glyphicon-asterisk"></span> Si tu solicitud de cuenta ha sido aceptada , se te enviará un correo electronico que te hará saber los detalles de la evaluación</a>
				  <a class="list-group-item"><span class="glyphicon glyphicon-asterisk"></span> Si tu cuenta fue aceptada tus datos de usuario y contraseña se enviarán al correo que proporcionaste</a>
				 
				</ul>
				</div>
			</div>
		</div>
		</div>
		<div class="row" >
			<div class="col-md-6">
				<div class="panel panel-primary">
					<div class="panel-heading">
						<h3 class="panel-title">Registrate !!</h3>
					</div>
					<div class="panel-body">
						<form action="scripts/agregarCliente.php" method="POST" class="form">
							
							  <div class="form-group">
						    <label for="nombre">Nombre: <span class="glyphicon glyphicon-asterisk"></span> </label>
						    <input type="text" class="form-control" id="nombre"
						           placeholder="Introduce tu nombre" name="nombre" required>
						  </div>
						  <div class="form-group">
						    <label for="apellido Paterno">Apellido Paterno: <span class="glyphicon glyphicon-asterisk"></span> </label>
						    <input type="text" class="form-control" id="apPaterno" 
						           placeholder="Tu primer apellido" name="apPaterno" required>
						  </div>
						   <div class="form-group">
						    <label for="apellido Materno">Apellido Materno: <span class="glyphicon glyphicon-asterisk"></span> </label>
						    <input type="text" class="form-control" id="apMaterno" 
						           placeholder="Tu segundo apellido" name="apMaterno" required>
						  </div>
						   <div class="form-group">
						    <label for="puesto">Puesto: <span class="glyphicon glyphicon-asterisk"></span> </label>
						    <input type="text" class="form-control" id="puesto"
						           placeholder="Puesto que tienes en el Itver"  name="puesto" required>
						  </div>

						  <div class="form-group">
						    <label for="email">Correo Electronico: <span class="glyphicon glyphicon-asterisk"></span> </label>
						    <input type="email" class="form-control" id="email"
						           placeholder="Tu correo electronico" name="email" required>
						  </div>
						 
						  <button type="submit" class="btn btn-success">Enviar</button>
						</form>
						<br>
						<span class="glyphicon glyphicon-asterisk"></span> Campos Obligatorios
					</div>

				</div>
			</div>
		
		<aside class="col-md-6">
			<?php 
				if(isset($r)==true){
					?>
						<div class="panel panel-info">
							<div class="panel-heading">
								<h3 class="panel-title">
									SISGEST
								</h3>
							</div>
							<div class="panel-body">
								<?php
									if($r==1){
										echo "<span class='glyphicon glyphicon-ok'></span> Tu registro ha sido enviado , espera la confirmacion en tu correo :)";
									}
									else{
										echo "<span class='glyphicon glyphicon-error'></span> ERROR EN TUS DATOS , tu solicitud no pudo ser aceptada";
									}
								?>
							</div>
						</div>

					<?php
				}
			?>
		</aside>
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