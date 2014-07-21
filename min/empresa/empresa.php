<?php 
/* INCLUDES*/
//echo  substr( "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ" ,mt_rand( 0 ,50 ) ,1 ) .substr( md5( time() ), 1);
header("Content-Type: text/html;charset=utf-8");
require_once ('../../db.php');
?>

<?php
if (isset($_POST['submit']))
{


        $codigoalias = $_POST['codigoalias'];
        $descripcion = $_POST['descripcion'];
        $tipo = $_POST['tipo'];



        //$sql = "select 	min_empresa.codigo_alias from min_empresa WHERE min_empresa.codigo_alias ==". $codigoalias;

        $sql = "insert into min_empresa (codigo_alias,descripcion)
                    values('$codigoalias','$descripcion');";




    mysql_query($sql) or die('No se pudo guardar la información. '.mysql_error());


    for ( $i = 0 ; $i < count($tipo) ; $i ++) {

           $t = utf8_encode( $tipo[$i]);

        $t = str_replace("Ã³", "leonel", $t);
        $sql = "insert into min_tipo_empresa_empresa (nombre_tipo,codigo_alias_empresa)
                    values('$t','$codigoalias');";

        mysql_query($sql) or die('No se pudo guardar la información. '.mysql_error());
    }




    echo "Registro Almacenado";
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
<link href="/sicap/css/helper.css" media="screen" rel="stylesheet" type="text/css" />
<script src="/sicap/js/htmlDatePicker.js" type="text/javascript"></script>
<link href="/sicap/css/htmlDatePicker.css" rel="stylesheet">
<!-- Beginning of compulsory code below -->
<link href="/sicap/css/dropdown/dropdown.css" media="screen" rel="stylesheet" type="text/css" />
<link href="/sicap/css/dropdown/themes/flickr.com/default.ultimate.css" media="screen" rel="stylesheet" type="text/css" />

 <script>
    $(function() {
        $( "#datepicker1" ).datepicker({ dateFormat: 'yy-mm-dd' });
        $( "#datepicker2" ).datepicker({ dateFormat: 'yy-mm-dd' });
        $( "#datepicker3" ).datepicker({ dateFormat: 'yy-mm-dd' });
    });
</script>   
<link href="/sicap/css/stylesheet.css" rel="stylesheet" type="text/css" />

 
<!-- Beginning of compulsory code below -->

</head>


<body class="flickr-com">
<!--<p><a href="mrh_menu.html" class="main-site">Principal</a></p>-->
<!--<h1><img src="images/seleccion_sicap_archivos/image002.jpg" alt="flickr" />Módulo de Recursos Humanos | Cargo</h1>-->
<!-- Beginning of compulsory code below -->

<form method="post" accept-charset="UTF-8">

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
    <h1><img src="../../images/seleccion_sicap_archivos/image002.jpg" alt="flickr" /><strong>                Módulo de Inventario | Empresa</strong></h1>

<TABLE BORDER="0" CELLSPACING="4" WIDTH="500">
    <tr>	
        <td><label>Nombre</label></td>
         <TD><p><input type="text" name="codigoalias"  size="20"/></p></TD>
    </tr>
    </TABLE>

    
       <label>Tipo de Empresa</label><br/>
    <div style="margin-left: 135px">


       <?php
       $result = mysql_query("SET NAMES utf8");
        $result=mysql_query("SELECT tipo FROM min_tipo_empresa");
        while($test = mysql_fetch_array($result)){

            echo "<p><input type='checkbox' name='tipo[]' value='". utf8_encode($test['tipo']) . "'/>&nbsp;&nbsp;&nbsp;&nbsp;" .utf8_encode($test['tipo']) ."</p>";
            
        }   
       ?>

    <br/>
    </div>

    <TABLE BORDER="0" CELLSPACING="4" WIDTH="390">
     <TR>
        <td><label>Descripción</label></td>
        <td><p><textarea rows="4" cols="18" name="descripcion"></textarea></p></td>
    </TR>

    </TABLE>

                                    <table>
        <tr>
        <td><input type="submit" value="Guardar datos" name="submit"></td>
        <td><a href="empresa_ver.php"><input type="button" value="Ver datos"></a> </td>
        <td><a href="../../min_menu.html"><input type="button" value="Atras"></a> </td>
        
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
