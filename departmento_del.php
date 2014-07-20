<?php
  include("db.php");  

	$id =$_REQUEST['codigo'];
	
	
	// sending query
	mysql_query("DELETE FROM mrh_departamento WHERE codigo = '$id'")
	or die(mysql_error());  	
	
	header("Location: departamento_ver.php");
?>
