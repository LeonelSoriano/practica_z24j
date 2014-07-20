<?php

require("db.php");
$id =$_REQUEST['codigo'];

$result = mysql_query("SELECT * FROM mrh_empleado WHERE codigo  = '$id'");
//echo $result;
//exit;
$test = mysql_fetch_array($result);
if (!$result)
		{
		die("Error: Data not found..");
		}

        $cedula=$test['cedula'];
        $ficha=$test['ficha'];
        $primernombre=$test['primernombre'];
        $segundonombre=$test['segundonombre'];
        $primerapellido=$test['primerapellido'];
        $segundoapellido=$test['segundoapellido'];
        $fechanacimiento=$test['fechanacimiento'];
        $telefono=$test['telefono'];
        $celular=$test['celular'];
        $estadocivil=$test['estadocivil'];
        $becado=$test['becado'];
        $sexo=$test['sexo'];
        $fechaingreso=$test['fechaingreso'];
        $fechaegreso=$test['fechaegreso'];
        $codigocargo=$test['codigocargo'];
        $estatus=$test['estatus'];
        $condicion=$test['condicion'];
        $codigoperioricidad=$test['codigoperioricidad'];
        $direccionhabitacion=$test['direccionhabitacion'];
        $codigodepartamento=$test['codigodepartamento'];
        $codigogerencia=$test['codigogerencia'];

$result = mysql_query("SELECT * FROM mrh_departamento WHERE codigo  = '$codigodepartamento'");
//echo $result;
//exit;
$test = mysql_fetch_array($result);
if (!$result)
		{
		die("Error: Data not found..");
		}
$descripciondepartamento = $test['descripcion'];

$result = mysql_query("SELECT * FROM mrh_gerencia WHERE codigo  = '$codigogerencia'");
//echo $result;
//exit;
$test = mysql_fetch_array($result);
if (!$result)
		{
		die("Error: Data not found..");
		}
$descripciongerencia = $test['descripcion'];



if(isset($_POST['submit']))
{

        $cedula=$_POST['cedula'];
        $ficha=$_POST['ficha'];
        $primernombre=$_POST['primernombre'];
        $segundonombre=$_POST['segundonombre'];
        $primerapellido=$_POST['primerapellido'];
        $segundoapellido=$_POST['segundoapellido'];
        $fechanacimiento=$_POST['fechanacimiento'];
        $telefono=$_POST['telefono'];
        $celular=$_POST['celular'];
        $estadocivil=$_POST['estadocivil'];
        $becado=$_POST['becado'];
        $sexo=$_POST['sexo'];
        $fechaingreso=$_POST['fechaingreso'];
        $fechaegreso=$_POST['fechaegreso'];
        $codigocargo=$_POST['codigocargo'];
        $estatus=$_POST['estatus'];
        $condicion=$_POST['condicion'];
        $codigodepartamento=$_POST['codigodepartamento'];
        $codigogerencia=$_POST['codigogerencia'];
        $codigoperioricidad=$_POST['codigoperioricidad'];
        $direccionhabitacion=$_POST['direccionhabitacion'];

        $sql = "update mrh_empleado set cedula='$cedula',ficha='$ficha',primernombre='$primernombre',
                        segundonombre='$segundonombre',primerapellido='$primerapellido',segundoapellido='$segundoapellido',fechanacimiento='$fechanacimiento',
                            telefono ='$telefono',celular='$celular',estadocivil='$estadocivil',becado='$becado',sexo='$sexo',fechaingreso='$fechaingreso',
                                fechaegreso='$fechaegreso',codigocargo='$codigocargo',estatus='$estatus',condicion='$condicion',
                                    codigodepartamento='$codigodepartamento',codigogerencia='$codigogerencia',
                                        codigoperioricidad='$codigoperioricidad',direccionhabitacion='$direccionhabitacion'
                                             WHERE codigo = '$id'";
       //echo $sql;
       //exit;
	mysql_query($sql)

				or die(mysql_error());
	echo "Guardado";

	header("Location: empleados_ver.php");
}
mysql_close($conn);
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
<TABLE BORDER="0" CELLSPACING="4" WIDTH="500">

     <TR>
         
         
          <TD><label>Cédula</label></TD>
          <TD><p><input type="text" name="cedula" id="cedula" size="20" value="<?php echo $cedula?>"></p></TD>
	
          <TD><label>Becado</label></TD>
          <TD>
			<select id="becado" name="becado" value="<?php echo $becado?>">
				<option value="1">Sí</option>
				<option value="0">No</option>
			</select> 
		  </TD>
          
     </TR> 
     <TR>
          <TD><label>Ficha</label></TD>
          <TD><p><input type="text" name="ficha" id="ficha" size="20" value="<?php echo $ficha?>" ></p></TD>
          
          <TD><label>Sexo</label></TD>
          <TD>
			<select id="genero" name="sexo" value="<?php echo $sexo?>">
				<option value="M">Masculino</option>
				<option value="F">Femenino</option>
			</select> 
		  </TD>
		  
     </TR> 
     <TR>
          <TD><label>Primer Nombre</label></TD>
          <TD><p><input type="text" name="primernombre" id="primernombre" size="20" value="<?php echo $primernombre?>"></p> </TD>
	
	      <TD><label>Fecha de Ingreso</label></TD>
              <TD><p><input type="text" id="datepicker1" name="fechaingreso" value="<?php echo $fechaingreso?>"></p></TD>
	 
	 
	 </TR>
	 <TR>
          <TD><label>Segundo Nombre</label></TD>
          <TD><p><input type="text" name="segundonombre" id="segundonombre" size="20" value="<?php echo $segundonombre?>"></p> </TD>
	 
		  <TD><label>Fecha de Egreso</label></TD>
		  <TD><p><input type="text" id="datepicker2" name="fechaegreso" value="<?php echo $fechaegreso?>"></p></TD>
	 </TR>
	 <TR>
          <TD><label>Primer Apellido</label></TD>
          <TD><p><input type="text" name="primerapellido" id="primerapellido" size="20" value="<?php echo $primerapellido?>"></p> </TD>
	 
	  <TD><label>Cargo</label></TD>    

            <?php // consulta de los meses
        // Consultar la base de datos
                include("db.php");
                $consulta_mysql='select * from mrh_cargo';
                $resultado_consulta_mysql=mysql_query($consulta_mysql);
                echo "<TD>";
                echo "<select name='mes' id='mes' >";
                    while($fila=mysql_fetch_array($resultado_consulta_mysql)){
                        echo "<option value='".$fila['codigoalias']."'>".$fila['descripcion']."</option>";
                    }
                echo "</select>";
                echo "</TD>";
             ?>   
	 
	 </TR>
	 <TR>
          <TD><label>Segundo Apellido</label></TD>
          <TD><p><input type="text" name="segundoapellido" id="segundoapellido" size="20" value="<?php echo $segundoapellido?>"></p> </TD>
	 	  
	 	  <TD><label>Estatus</label></TD>
          <TD>
			<select id="estatus" name="estatus" value="<?php echo $estatus?>">
				<option value="1">Activo</option>
				<option value="0">Inactivo</option>
			</select> 
		  </TD>
	 
	 </TR>
	 <TR>
		  <TD><label>Fecha de Nacimiento</label></TD>
		  <TD><p><input type="text" id="datepicker3" name="fechanacimiento" value="<?php echo $fechanacimiento?>"></p></TD>
	 
	 	   <TD><label>Condición</label></TD>
          <TD>
			<select id="condicion" name="condicion" value="<?php echo $condicion?>">
				<option value="N">Normal</option>
				<option value="J">Jubilad@s</option>
                                <option value="D">Discapacitad@s</option>
			</select> 
		  </TD>
	 
	 </TR>
	 <TR>
          <TD><label>Telefono</label></TD>
          <TD><p><input type="text" name="telefono" id="telefono" size="20" value="<?php echo $telefono?>"></p> </TD>
          
          <TD><label>Departamento</label></TD>    

            <?php // consulta de los meses
        // Consultar la base de datos
                include("db.php");
                $consulta_mysql='select * from mrh_departamento';
                $resultado_consulta_mysql=mysql_query($consulta_mysql);
                echo "<TD>";
                echo "<select name='mes' id='mes' value='".$descripciondepartamento."'>";
                    while($fila=mysql_fetch_array($resultado_consulta_mysql)){
                        echo "<option value='".$fila['codigoalias']."'>".$fila['descripcion']."</option>";
                    }
                echo "</select>";
                echo "</TD>";
             ?>   
	 </TR>
	 <TR>
          <TD><label>Celular</label></TD>
          <TD><p><input type="text" name="celular" id="celular" size="20" value="<?php echo $celular?>"></p> </TD>
          
          <TD><label>Gerencia</label></TD>    

            <?php // consulta de los meses
        // Consultar la base de datos
                include("db.php");
                $consulta_mysql='select * from mrh_gerencia';
                $resultado_consulta_mysql=mysql_query($consulta_mysql);
                echo "<TD>";
                echo "<select name='mes' id='mes' value='".$descripciongerencia."'>";
                    while($fila=mysql_fetch_array($resultado_consulta_mysql)){
                        echo "<option value='".$fila['codigoalias']."'>".$fila['descripcion']."</option>";
                    }
                echo "</select>";
                echo "</TD>";
             ?> 
	 </TR>
	 <TR>
		  <TD><label>Estado Civil</label></TD>
		  <TD>
			<select id="estadocivil" name="estadocivil" value="<?php echo $estadocivil?>">
                                <option value="0">--------</option>
				<option value="C">Casado(a)</option>
				<option value="S">Soltero(a)</option>
				<option value="D">Divorciado(a)</option>
				<option value="V">Viudo(a)</option>
			</select> 
		  </TD>
                  <TD><label>Perioricidad</label></TD>
          <TD>
			<select id="perioricidad" name="codigoperioricidad" value="<?php echo $codigoperioricidad?>">
				<option value="0">---------</option>
				<option value="H">Horaria</option>
				<option value="S">Semanal</option>
                                <option value="Q">Quincenal</option>
                                <option value="M">Mensual</option>
			</select> 
        </TD>
	 </TR>
        <TR>
            <TD><label>Dirección de Habitación</label></TD>
            <TD><p><input type="text" name="direccionhabitacion" id="direccion" size="70" value="<?php echo $direccionhabitacion?>"></p> </TD>
        </TR>

</TABLE>

<TABLE>
    <TR>
        <TD>
           <input type="submit" name="submit" value="Guardar datos" >
        </TD>
        <TD>
            <a href="empleados_ver.php"><input type="button" value="Ver datos"></a> 
        </TD>
        <TD>
            <a href="mrh_menu.html"><input type="button" value="Atras"></a> 
        </TD>
    </TR>
</TABLE>
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
