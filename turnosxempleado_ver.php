<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title>SICAP | Sistema Integral de Costos</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="author" content="Tomas Bagdanavicius, http://www.lwis.net/free-css-drop-down-menu/" />
<meta name="keywords" content=" css, dropdowns, dropdown menu, drop-down, menu, navigation, nav, horizontal, vertical left-to-right, vertical right-to-left, horizontal linear, horizontal upwards, cross browser, internet explorer, ie, firefox, safari, opera, browser, lwis" />
<meta name="description" content="Clean, standards-friendly, modular framework for dropdown menus" />
<link href="css/helper.css" media="screen" rel="stylesheet" type="text/css" />
<script src="js/htmlDatePicker.js" type="text/javascript"></script>
<link href="css/htmlDatePicker.css" rel="stylesheet">
<!-- Beginning of compulsory code below -->
<link href="css/dropdown/dropdown.css" media="screen" rel="stylesheet" type="text/css" />
<link href="css/dropdown/themes/flickr.com/default.ultimate.css" media="screen" rel="stylesheet" type="text/css" />
<link href="css/stylesheet.css" rel="stylesheet" type="text/css" />
<!-- / END -->

</head>
<body class="flickr-com">

<!--<p><a href="mrh_menu.html" class="main-site">Principal</a></p>-->

<!--<h1><img src="images/flickr.com/icon.png" alt="flickr" />Módulo de Recursos Humanos | Listado de Turnos</h1>-->

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
    <h1><img src="images/seleccion_sicap_archivos/image002.jpg" alt="flickr" /><strong>                Módulo de Recursos Humanos | Turnos por Empleado</strong></h1>
    
<table border=1>
    <tr>
        <td>Id</td>
        <td>Cédula</td>
        <td>Mes</td>
        <td>Semana</td>
        <td>Turno</td>
    </tr>
    
      <?php
	include("db.php");
        //$cedula =$_POST['cedulaempleado'];
        $cedula =$_REQUEST['cedulaempleado'];
        echo $cedula;
	$result=mysql_query("SELECT * FROM mrh_turnoxempleado WHERE cedulaempleado='$cedula'");
        while($test = mysql_fetch_array($result))
        	{
                //  calculos de horas
                    $id = $test['codigo'];	
                    echo "<tr align='center'>";	
                    //echo"<td><font color='black'>" .$test['codigo']."</font></td>";
                    echo"<td><font color='black'>". $test['codigo']. "</font></td>";
                    echo"<td><font color='black'>" .$test['cedulaempleado']."</font></td>";
                    echo"<td><font color='black'>". $test['codigomes']."</font></td>";
                    echo"<td><font color='black'>". $test['codigosemana']."</font></td>";
                    $codigoturno = $test['codigoturno'];
                    $sql = "SELECT descripcion FROM mrh_turnos WHERE codigo =$codigoturno";
                    //echo $sql;
                    //exit;
                    $consulta = mysql_query($sql);
                    while($testeo = mysql_fetch_array($consulta)){
                        echo"<td><font color='black'>". $testeo['descripcion']."</font></td>";
                    }
                    //echo"<td><font color='black'>". $test['codigoturno']."</font></td>";
                    echo"<td><a href ='turnosxempleado_mod.php?codigo=$id'>Modificar</a>";
                    echo"<td><a href ='turnosxempleado_del.php?codigo=$id'><center>Borrar</center></a>";
                    echo "</tr>";
		}
	mysql_close($conn);
    ?>
</table>
<table>    
    <tr>
        <a href="turnosxempleado.php"><input type="button" value="Atras"></a>
    </tr> 
</table>
<p></p>
                                </div>
                            </div><!--end firefoxbug-->
                        </div><!--end left_bgd-->

                </div>
                <p>
                  <!--end right_col-->
                </p>
                <p>&nbsp; </p>
            <div class="clearboth"></div>
        </div>
        <div align="center" class="pie">SICAP 2014</div>
    </div>

<!-- / END -->

</form>

</body>
</html>
