<?php

/* Script de conexión a la base de datos */
$host = "localhost";
$usuario = "Cliente";  //Debo cambiar lo de root
$pass = "password1234.";
$db = "ControlSalas";

$con = mysqli_connect($host,$usuario,$pass,$db);

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  
  
 

?>