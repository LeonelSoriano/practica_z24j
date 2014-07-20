<?php
  include("db.php");  

	$id =$_REQUEST['codigo'];
	
	
	// sending query
	mysql_query("DELETE FROM mrh_tipoturno WHERE codigo = '$id'")
	or die(mysql_error());  	
	
	header("Location: tipoturno_ver.php");
?>
