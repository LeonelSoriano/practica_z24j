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
<TABLE BORDER="0" CELLSPACING="4" WIDTH="581">

     <TR>
         
         
          <TD width="143" class="firefox"><label>Cédula     </label></TD>
          <TD width="167"><p><input type="text" name="cedula" id="cedula" size="20"></p></TD>
	
          <TD width="107" class="firefox"><label>Becado</label></TD>
          <TD width="136">
			<select id="becado" name="becado">
				<option value="1">Sí</option>
				<option value="0">No</option>
			</select> 
		  </TD>
          
     </TR> 
     <TR>
          <TD class="firefox"><label>Ficha</label></TD>
          <TD><p><input type="text" name="ficha" id="ficha" size="20"></p></TD>
          
          <TD class="firefox"><label>Sexo</label></TD>
          <TD>
			<select id="genero" name="sexo">
				<option value="M">Masculino</option>
				<option value="F">Femenino</option>
			</select> 
		  </TD>
		  
     </TR> 
     <TR>
          <TD class="firefox"><label>Primer Nombre</label></TD>
          <TD><p><input type="text" name="primernombre" id="primernombre" size="20"></p> </TD>
	
	  <TD class="firefox"><label>Fec. de Ingr.</label></TD>
          <TD><p><input type="text" id="datepicker1" name="fechaingreso"></p></TD>
	 
	 
	 </TR>
	 <TR>
          <TD class="firefox"><label>Segundo Nombre</label></TD>
       <TD><p><input type="text" name="segundonombre" id="segundonombre" size="20"></p> </TD>
	 
		  <TD class="firefox"><label>Fec. de Egreso</label></TD>
		  <TD><p><input type="text" id="datepicker2" name="fechaegreso"></p></TD>
	 </TR>
	 <TR>
          <TD width="143" class="firefox"><label>Primer Apellido</label></TD>
       <TD><p><input type="text" name="primerapellido" id="primerapellido" size="20"></p> </TD>
	 
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
          <TD width="143" class="firefox"><label>Segundo Apellido</label></TD>
       <TD><p><input type="text" name="segundoapellido" id="segundoapellido" size="20"></p> </TD>
	 	  
	 	  <TD class="firefox"><label>Estatus</label></TD>
          <TD>
			<select id="estatus" name="estatus">
				<option value="1">Activo</option>
				<option value="0">Inactivo</option>
			</select> 
		  </TD>
	 
	 </TR>
	 <TR>
		  <TD class="firefox"><label>Fecha de Nacimiento</label></TD>
	   <TD><p><input type="text" id="datepicker3" name="fechanacimiento"></p></TD>
	 
	 	   <TD class="firefox"><label>Condición</label></TD>
          <TD>
			<select id="condicion" name="condicion">
				<option value="N">Normal</option>
				<option value="J">Jubilad@s</option>
                                <option value="D">Discapacitad@s</option>
			</select> 
		  </TD>
	 
	 </TR>
	 <TR>
          <TD class="firefox"><label>Telefono</label></TD>
       <TD><p><input type="text" name="telefono" id="telefono" size="20"></p> </TD>
          
        <TD><label>Departamento</label></TD>    

            <?php // consulta de los meses
        // Consultar la base de datos
                include("db.php");
                $consulta_mysql='select * from mrh_departamento';
                $resultado_consulta_mysql=mysql_query($consulta_mysql);
                echo "<TD>";
                echo "<select name='mes' id='mes' >";
                    while($fila=mysql_fetch_array($resultado_consulta_mysql)){
                        echo "<option value='".$fila['codigoalias']."'>".$fila['descripcion']."</option>";
                    }
                echo "</select>";
                echo "</TD>";
             ?>   
	 <TR>
          <TD class="firefox"><label>Celular</label></TD>
       <TD><p><input type="text" name="celular" id="celular" size="20"></p> </TD>
          
        <TD><label>Gerencia</label></TD>    

            <?php // consulta de los meses
        // Consultar la base de datos
                include("db.php");
                $consulta_mysql='select * from mrh_gerencia';
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
		  <TD class="firefox">Estado Civil</TD>
		  <TD>
			<select id="estadocivil" name="estadocivil">
                                <option value="0">--------</option>
				<option value="C">Casado(a)</option>
				<option value="S">Soltero(a)</option>
				<option value="D">Divorciado(a)</option>
				<option value="V">Viudo(a)</option>
			</select> 
		  </TD>
                  <TD class="firefox"><label>Perioricidad</label></TD>
          <TD>
			<select id="perioricidad" name="codigoperioricidad">
				<option value="0">---------</option>
				<option value="H">Horaria</option>
				<option value="S">Semanal</option>
                                <option value="Q">Quincenal</option>
                                <option value="M">Mensual</option>
			</select> 
        </TD>
	 </TR>
        <TR>
            <TD class="firefox"><label>Dirección de Habitación</label></TD>
          <TD><p><input type="text" name="direccion" id="direccion" size="15"></p> </TD>
          <td class="firefox">&nbsp;</td>
          <td>&nbsp;</td>
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

<!-- / END -->


<?php
if (isset($_POST['submit']))
	{	   
	include 'db.php';
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
        $direccionhabitacion=$_POST['direccion'];
        
        
        $sql = "insert into mrh_empleado(cedula,ficha,primernombre,segundonombre,primerapellido,segundoapellido,
					fechanacimiento,telefono,celular,estadocivil,becado,sexo,fechaingreso,fechaegreso,
						codigocargo,estatus,condicion,codigodepartamento,codigogerencia,codigoperioricidad,direccionhabitacion)
                                                      values('$cedula','$ficha','$primernombre','$segundonombre','$primerapellido','$segundoapellido','$fechanacimiento',
							'$telefono','$celular','$estadocivil','$becado','$sexo','$fechaingreso','$fechaegreso','$codigocargo','$estatus','$condicion',
								'$codigodepartamento','$codigogerencia','$codigoperioricidad','$direccionhabitacion')";
	//echo $sql;
        //exit;
	mysql_query($sql) or die('No se pudo guardar la información. '.mysql_error());			
	echo "Registro Almacenado";			
	        }
?>

</form>
</body>
</html>
