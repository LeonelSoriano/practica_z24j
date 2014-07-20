<?php
  include("db.php");  

	$id =$_REQUEST['codigo'];
	$cedulaempleado=$_REQUEST['cedula'];
	
	// sending query
	mysql_query("DELETE FROM mrh_carga WHERE codigo = '$id'")
	or die(mysql_error());  	
	


        header ("Location: carga_ver.php?codigo=$cedulaempleado");
?>
