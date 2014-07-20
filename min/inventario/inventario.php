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
    <link href="/sicap/css/stylesheet.css" rel="stylesheet" type="text/css" />
    <link href="/sicap/css/ui-lightness/jquery-ui-1.10.4.custom.css" rel="stylesheet">
    <script src="/sicap/js/jquery-1.10.2.js"></script>
    <script src="/sicap/js/jquery-ui-1.10.4.custom.js"></script>
    <script>
        $(function() {
            $( "#datepicker1" ).datepicker({ dateFormat: 'yy-mm-dd' });
        });
    </script>
    <!-- Beginning of compulsory code below -->
    <link href="/sicap/css/dropdown/dropdown.css" media="screen" rel="stylesheet" type="text/css" />
    <link href="/sicap/css/dropdown/themes/flickr.com/default.ultimate.css" media="screen" rel="stylesheet" type="text/css" />
    <!-- / END -->
</head>
<body class="flickr-com">
<!--<p><a href="mrh_menu.html" class="main-site">Principal</a></p>-->
<!--<h1><img src="images/seleccion_sicap_archivos/image002.jpg" alt="flickr" />Módulo de Recursos Humanos | Cargo</h1>-->
<!-- Beginning of compulsory code below -->
<form method="post" enctype="multipart/form-data">
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
                            <h1><img src="../../images/seleccion_sicap_archivos/image002.jpg" alt="flickr" /><strong>                Módulo de  Inventario | Producto y servicio</strong></h1>

                            <!-- Beginning of compulsory code below -->
                            <br/><br/>
                            <TABLE BORDER="0" CELLSPACING="4" WIDTH="500">

                                <TR>
                                    <TD><label>Código</label></TD>
                                    <TD><p><input type="text" name="codigo" size="20"></p></TD>
                                </TR>

                                <TR>
                                    <TD><label>Nombre de Artículo</label></TD>
                                    <TD><p><input type="text" name="nombre" size="20"></p></TD>
                                </TR>

                                <tr>
                                    <td>
                                        <label >Proveedor</label>
                                    </td>
                                    <td>
                                        <p><input type="text" name="proveedor" size="20"/></p>
                                    </td>
                                </tr>

                                <TR>
                                    <TD><label>Inventario</label></TD>
                                    <TD><p>
                                            <select name="inventario">
                                                <option value="ejemplo"> ejemplo</option>
                                                <option value="ejemplo2"> ejemplo2</option>
                                            </select>
                                    </p></TD>
                                </TR>

                                <tr>
                                    <td>
                                        <label >Unidad de Medida</label>
                                    </td>
                                    <td>
                                        <p>
                                            <select name="unidad_medida" >
                                                <option value="ejemplo">ejemplo</option>
                                                <option value="ejemplo">ejemplo</option>
                                                <option value="ejemplo">ejemplo</option>
                                            </select>
                                        </p>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <label>Proveedor</label>
                                    </td>
                                    <td>
                                        <p><input type="text" name="proveedor"/></p>
                                    </td>
                                </tr>


                                <TR>
                                    <TD><label> Descripción </label></TD>
                                    <TD><p><input type="text" name="descripcion"></p></TD>
                                </TR>

                                <tr>
                                    <td><label for="">Existencia Mínima</label>
                                    <td>
                                        <p><input type="text" name="existencia_minima"/></p>
                                    </td>
                                    </td>
                                </tr>


                                <tr>
                                    <td><label for="">Existencia Inicial</label>
                                    <td>
                                        <p><input type="text" name="existencia_inicial"/></p>
                                    </td>
                                    </td>
                                </tr>

                                <tr>
                                    <td><label for="">Existencia Maxima</label>
                                    <td>
                                        <p><input type="text" name="existencia_maxima"/></p>
                                    </td>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <label >Fecha de Vencimiento</label>
                                    </td>
                                    <td>
                                        <p>
                                            <input type="text" id="datepicker1" name="fecha_venciminto">
                                        </p>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <label >Fecha de Adquisición</label>
                                    </td>
                                    <td>
                                        <p>
                                            <input type="text" id="datepicker1" name="fecha_adquisicion">
                                        </p>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <label>Foto del Artículo</label>
                                    </td>
                                    <td>
                                        <p><input type="file" name="imagen" size="19" ></p>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <label >Ubicación</label>
                                    </td>
                                    <td>
                                        <p><input type="text" name="ubicacion"/></p>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <label >Observaciónes</label>
                                    </td>
                                    <td>
                                        <textarea rows="4" cols="18">

                                        </textarea>
                                    </td>
                                </tr>



                            </TABLE>

                            <br/>

                            <table>
                                <tr>
                                    <td>
                                        <input type="submit" value="Guardar datos" name="submit">
                                    </td>
                                    <td>
                                        <a href="inventario_ver.php"><input type="button" value="Ver datos"></a>
                                    </td>
                                    <td>
                                        <a href="../../min_menu.html"><input type="button" value="Atras"></a>
                                    </td>
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
    <?php
    if (isset($_POST['submit']))
    {
        include 'db.php';
        $descripcion=$_POST['descripcion'];
        $dias=$_POST['dias'];
        $fechavigencia=$_POST['fechavigencia'];

        $sql = "insert into mno_apartado(descripcion,dias,fechavigencia)
                                                          values('$descripcion','$dias','$fechavigencia')";
        //echo $sql;
        //exit;
        mysql_query($sql) or die('No se pudo guardar la información. '.mysql_error());
        echo "<script language='JavaScript' type='text/javascript'>";
        echo "alert('El Registro se ha Guardado');";
        echo "</script>";
    }
    ?>


</form>
</body>
</html>
