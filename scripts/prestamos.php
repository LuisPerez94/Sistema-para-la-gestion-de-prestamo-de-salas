<?php
	require('conecta.php');
	function prestamos(){
	

	$con=conecta();

	$query="SELECT * FROM Peticion ";  		//Consulta para consultar los prestamos de un cliente 

	$info=mysql_query(mysql_real_escape_string($query),$con);
	$num=mysql_num_rows($info);
	

	


	return $info;
}
?>