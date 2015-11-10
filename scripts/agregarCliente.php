<?php

/* Script de conexión a la base de datos */
$host = "localhost";
$usuario = "AddClient";  //Debo cambiar lo de root
$pass = "1234.";
$db = "ControlSalas";

$con = mysqli_connect($host,$usuario,$pass,$db);

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }


  
 $nombre = $_POST["nombre"];
 $apellidoPat=$_POST["apPaterno"];
 $apellidoMat=$_POST["apMaterno"];
 $puesto=$_POST["puesto"];
 $email=$_POST["email"];
 $fechaRegistro=date("Y-n-d");

 $consulta="INSERT INTO Cliente (nombre,apPaterno,apMaterno,email,puesto,fechaRegistro) 
 			VALUES  ('".$nombre."','".$apellidoPat."','".$apellidoMat."','".$email."','".$puesto."','".$fechaRegistro."');";

 $resultado;
  if($con->query($consulta)=== TRUE){
  	$resultado="1";
  }
  else{
  	$resultado="Error".$con->error;
  }
 
 header('Location: ../registro.php?r='.$resultado);
$con->close();
?>