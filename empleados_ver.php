<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title>SICAP | Sistema Integral de Costos</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="author" content="Tomas Bagdanavicius, http://www.lwis.net/free-css-drop-down-menu/" />
<meta name="keywords" content=" css, dropdowns, dropdown menu, drop-down, menu, navigation, nav, horizontal, vertical left-to-right, vertical right-to-left, horizontal linear, horizontal upwards, cross browser, internet explorer, ie, firefox, safari, opera, browser, lwis" />
<meta name="description" content="Clean, standards-friendly, modular framework for dropdown menus" />
<link href="css/helper.css" media="screen" rel="stylesheet" type="text/css" />
<link href="css/ui-lightness/jquery-ui-1.10.4.custom.css" rel="stylesheet">
	<script src="js/jquery-1.10.2.js"></script>
	<script src="js/jquery-ui-1.10.4.custom.js"></script>   
        <link href="css/stylesheet.css" rel="stylesheet" type="text/css" />



<link rel="stylesheet" href="/resources/demos/style.css">

 <script>
    $(function() {
        $( "#datepicker1" ).datepicker({ dateFormat: 'yy-mm-dd' });
        $( "#datepicker2" ).datepicker({ dateFormat: 'yy-mm-dd' });
        $( "#datepicker3" ).datepicker({ dateFormat: 'yy-mm-dd' });
    });
</script>    
    


<!-- Beginning of compulsory code below -->

<link href="css/dropdown/dropdown.css" media="screen" rel="stylesheet" type="text/css" />
<link href="css/dropdown/themes/flickr.com/default.ultimate.css" media="screen" rel="stylesheet" type="text/css" />

<!-- / END -->

</head>
<body class="flickr-com">

<p>&nbsp;</p>



<!-- Beginning of compulsory code below -->
<form method="post">
        <div id="body_bottom_bgd">
        <div id=""> <!--<img src="images/Logo_Inventario.png"/>-->
          <!--</div>-->                <!-- Menu -->
                  <!--  ?php include 'include/nav.php'; ?>-->
                <div align="justify" id="right_col" >
                    <div id="header">
                    </div>
                        <div id="">
                            <div id="firefoxbug"><!-- firefoxbug -->
                               <!-- <div id="blue_line"></div>-->
                                <div class="dynamicContent" align="left">
                                  <!--  <h1>Inicio</h1>-->
    <!--<p><a href="seleccion_sicap.html" class="main-site">Principal</a></p>-->
  
 <h1><img src="images/seleccion_sicap_archivos/image002.jpg" alt="flickr" /><strong>                Módulo de Recursos Humanos | Empleado</strong></h1>
     


<table border=1>
    <tr>
        <td>Cédula</td>
        <td>Ficha</td>
        <td>Nombres</td>
        <td>Apellidos</td>
        <td>Condición</td>
        <td>Edad</td>
        <td>Teléfono</td>
        <td>Estatus</td>
        <td>Opciones</td>
    </tr>
    <?php
	include("db.php");
	$result=mysql_query("SELECT * FROM mrh_empleado");
        while($test = mysql_fetch_array($result))
        	{
                //  calculos de horas
                    $id = $test['codigo'];
                    $cedula =$test['cedula'];
                    echo "<tr align='center'>";	
                    //echo"<td><font color='black'>" .$test['codigo']."</font></td>";
                    echo"<td><font color='black'>". $test['cedula']. "</font></td>";
                    echo"<td><font color='black'>" .$test['ficha']."</font></td>";
                    echo"<td><font color='black'>". $test['primernombre']." ".$test['segundonombre']. "</font></td>";
                    echo"<td><font color='black'>". $test['primerapellido']." ".$test['segundoapellido']. "</font></td>";
                    echo"<td><font color='black'>". $test['condicion']. "</font></td>";
                    echo"<td><font color='black'>" .$test['fechanacimiento']."</font></td>";
                    echo"<td><font color='black'>". $test['telefono']. "</font></td>";
                    echo"<td><font color='black'>". $test['estatus']. "</font></td>";
                    echo"<td> <a href ='empleados_mod.php?codigo=$id'>Modificar</a>";
                    echo"<td> <a href ='empleados_del.php?codigo=$id'><center>Borrar</center></a>";
                    echo"<td> <a href ='carga.php?codigo=$cedula'><center>Carga Familiar</center></a>";
                    echo "</tr>";
		}
	mysql_close($conn);
    ?>
</table> 
<table>
    <tr>
        <td><a href="empleados.php"><input type="button" value="Atras"></a></td>
        <td><a href="empleados_ver_excel.php"><input type="button" value="Excel"></a></td>
    </tr>    
</table>

<!-- / END -->
                                    <p></p>
                                </div>
                            </div><!--end firefoxbug-->
                        </div><!--end left_bgd-->

                </div>
                <p>&nbsp;</p>
                <p>&nbsp;</p>
                <p>&nbsp;</p>
                <p>&nbsp;</p>
                <p>&nbsp;</p>
                <p>&nbsp;</p>
                <p>&nbsp;</p>
                <p>&nbsp;</p>
                <p>
                  <!--end right_col-->
                </p>
                <p>&nbsp; </p>
            <div class="clearboth"></div>
        </div>
        <div align="center" class="pie">SICAP 2014</div>
    </div>

</form>

</body>
</html>
