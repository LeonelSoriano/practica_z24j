<?php
if (isset($_POST['submit']))
	{	

        }

?>

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
    <h1><img src="images/seleccion_sicap_archivos/image002.jpg" alt="flickr" /><strong>                Módulo de Recursos Humanos | Analisis por Empleado</strong></h1>
    
<table border=1>

    
      <?php
	include("db.php");
        $cedula =$_POST['cedulaempleado'];
        $result=mysql_query("SELECT * FROM mrh_empleado Where Cedula ='$cedula'");
        while($test = mysql_fetch_array($result)){
            $nombre = strtoupper($test['primernombre']);
            $apellido = strtoupper($test['primerapellido']);
        }
        $mes = $_POST['mes'];
        
        echo"<td><font color='black'> ".$cedula." </font></td>";
        echo"<td><font color='black'> ".$nombre." </font></td>";
        echo"<td><font color='black'> ".$apellido." </font></td>";

        echo "<tr>";
        echo "<td>Descripción</td>  <!-- Nombre Turno -->";
        echo "<td>Mes</td>  <!-- Mes -->";
        echo "<td>H/E</td>  <!-- Hora de Entrada  -->";
        echo "<td>H/S</td>   <!-- Hora de Salida -->";
        echo "<td>H/D</td>    <!-- Hora de Descanso -->";
        echo "<td>T</td>    <!-- Turno -->";
        echo "<td>DT</td>    <!-- Dias Trabajados -->";
        echo "<td>HTD</td>    <!-- Hora de Trabajo Diario -->";
        echo "<td>HTS</td>    <!-- Hora de Trabajo Semanal -->";
        echo "<td>HPL</td>    <!-- Horas Permitidas Laborales -->";
        echo "<td>THE</td>    <!-- Total Horas Extras -->";
        echo "<td>HED</td>    <!-- Horas Extra Diurnas -->";
        echo "<td>HEN</td>    <!-- Horas Extra Nocturnas -->";
        echo "<td>HTM</td>    <!-- Horas de Trabajo Mensual -->";
        echo "<td>HND</td>    <!-- Horas Nocturnas Diarias -->";
        echo "<td>HNS</td>    <!-- Horas Nocturnas Semanales -->";
        echo "<td>HNM</td>    <!-- Horas Nocturnas Mensuales -->";
        echo "<td>BND</td>    <!-- Bono Nocturno Diario -->";
        echo "<td>BNS</td>    <!-- Bono Nocturno Semanal-->";
        echo "<td>BNM</td>    <!-- Bono Nocturno Mensual -->";
        echo "<td>NSM</td>";
        echo "</tr>";
        
        $result=mysql_query("SELECT * FROM mrh_view_analisisxempleado WHERE cedulaempleado='$cedula' and codigomes='$mes' ORDER BY descripcion");
        while($test = mysql_fetch_array($result))
        	{
                //  calculos de horas
                    $mes_dias =dias($mes);
                    $id = $test['codigo'];	
                    $horatmensual = $test['horatsemana']*$mes_dias;
                    $hrsnocmensual = $test['hrsnocmensual']*$mes_dias;
                    $bononocmensual = $test['bononocmensual']*$mes_dias;
                    echo "<tr align='center'>";	
                    //echo"<td><font color='black'>" .$test['codigo']."</font></td>";
                    echo"<td><font color='black'>". $test['descripcion']. "</font></td>";
                    echo"<td><font color='black'>". $test['codigomes']. "</font></td>";
                    echo"<td><font color='black'>". $test['horaentrada']."</font></td>";
                    echo"<td><font color='black'>". $test['horasalida']. "</font></td>";
                    echo"<td><font color='black'>". $test['horadescanso']. "</font></td>";
                    echo"<td><font color='black'>". $test['descripciontipoturno']."</font></td>";
                    echo"<td><font color='black'>". $test['diaslaborales']. "</font></td>";
                    echo"<td><font color='black'>". $test['horatdiario']. "</font></td>";
                    echo"<td><font color='black'>". $test['horatsemana']. "</font></td>";
                    echo"<td><font color='black'>". $test['hrslabpermitidas']."</font></td>";
                    echo"<td><font color='black'>". $test['totalhrsextra']."</font></td>";
                    echo"<td><font color='black'>". $test['horaextradiurno']. "</font></td>";
                    echo"<td><font color='black'>". $test['horaextranocturno']."</font></td>";
                    echo"<td><font color='black'>". $horatmensual. "</font></td>";
                    echo"<td><font color='black'>". $test['hrsnocdiarias']. "</font></td>";
                    echo"<td><font color='black'>". $test['hrsnocsemanal']. "</font></td>";
                    echo"<td><font color='black'>". $hrsnocmensual. "</font></td>";
                    echo"<td><font color='black'>". $test['bononocdiario']. "</font></td>";
                    echo"<td><font color='black'>". $test['bononocsemanal']."</font></td>";
                    echo"<td><font color='black'>". $bononocmensual . "</font></td>";
                    echo"<td><font color='black'>". $mes_dias . "</font></td>";
                    echo "</tr>";
		}
	mysql_close($conn);
        
function dias($dato){
    if(trim($dato)!=""){
        $cant_dias = date('t',strtotime(date('Y').$dato.'-'.'01-'));
        $lunes = 0;
        for($i=1; $i<=$cant_dias; $i++){
            if(date('w',strtotime(date('Y').'-'.$dato.'-'.$i))==6){
                $lunes++;
            }
        }
        return $lunes;
    }
    else{
        return 'Error';
    }
}
    ?>
</table>
<table>    
    <tr>
        <td><a href="analisisxempleado.php"><input type="button" value="Atras"></a></td>
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
