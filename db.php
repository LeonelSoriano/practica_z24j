<?php  
error_reporting(E_ALL ^ E_DEPRECATED);
	$conn = mysql_connect('localhost', 'root', '19Elmarxista1');
	 if (!$conn)
    {
	 die('Could not connect: ' . mysql_error());
	}
	mysql_select_db("db_sicap", $conn);
?>

