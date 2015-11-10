<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Petici&oacute;n :D</title>
	<link rel="stylesheet" href="estilos/bs/css/bootstrap.css">
    <link rel="stylesheet" href="estilos/estilo1.css">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

	<!--Función que le da el valor del range al text-->
	<script type="text/javascript">
    function updateTextInput(val) {
      document.getElementById('textInput').value=val; 
    }
     function updateTextInputM(val) {
      document.getElementById('textInputM').value=val; 
    }
    function updateTextInputP(val) {
      document.getElementById('textInputP').value=val; 
    }
  </script>

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
				<li ><a href="homeusu.php">Home</a></li>
				<li><a href="calendarizacion.php">Calendarización</a></li>
				<li><a href="historialPrestamo.php">Historial De Prestamos</a></li>
				<li class="active"><a href="peticion.php">Hacer una Petición</a></li>
			</ul>
			<ul class="nav navbar navbar-right">
			<li><a href="www.itver.edu.mx" target="_blank">Itver</a></li>
			</ul>
		</div>
	</nav>	

	
	<br>
	<div class="row">
		<div class="col-md-6">
			<div class="panel panel-info">
				<div class="panel-heading">
					<h4 class="panel-title">Realiza tu petición</h4>
				</div>
				<div class="panel-body">
					
				<div class="well">
					<form role="form">
					  <div class="form-group">
					    <label for="sala">Sala que se quiere pedir</label>
					    <br>
					     <select name="cars" width="30">
						  <option value="">PHP1</option>
						  <option value="">PHP2</option>
						  <option value="">PHP3</option>
						  <option value="">PHP4</option>
						</select>
					  </div>
					  <div class="form-group">
					    <label for="fechaI">Fecha Inicio (DatePicker JQ)</label>
					     <label for="fechaT">Fecha Termino (DatePicker JQ)</label>
					   
					  </div>
					  <div class="form-group">
					  	<label for="nombreEvento">Nombre del evento que se realizará:</label>
					  	<input type="text" cols="45">
					  	<label for="descripcionEvento">Breve descripcion del evento que se realizará:</label>
					  	<textarea cols="45" rows="8"></textarea> 
					  </div>

					  <div class="form-group">
					  <p>Cuáles son las opciones que ocupará en su evento?</p>
					   <input type="checkbox" name="clima" value="Bike">Aire Acondicionado
						<br>
						<input type="checkbox" name="internet" value="Car"> Acceso a internet
						<br>
						<input type="checkbox" name="proyector" value="Car"> Uso de proyector
					  </div>
					 <div class="form-group">
					 <label for="NumSillas">Numero de sillas solicitadas para el evento</label>
					 	  <input type="range" name="points" min="0" max="45" onchange="updateTextInput(this.value);" value="0">
					 	  <input type="text" id="textInput" value="0">
					 </div>
					 <div class="form-group">
					 <label for="NumMesas">Numero de mesas solicitadas para el evento</label>
					 	  <input type="range" name="points" min="0" max="35" onchange="updateTextInputM(this.value);" value="0">
					 	  <input type="text" id="textInputM" value="0">
					 	  </div>
					 <div class="form-group">
					 <label for="NumPersonas">Numero de personas aproximada que asistirán al evento</label>
					 	  <input type="range" name="points" min="0" max="50" onchange="updateTextInputP(this.value);" value="0">
					 	  <input type="text" id="textInputP" value="0">
					 	  </div>
					 </div>
					<button type="button" class="btn btn-primary btn-lg btn-block">SOLICITAR</button>
					</form>


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