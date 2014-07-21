<?php
header("Content-Type: text/html;charset=utf-8");
ini_set('display_errors', 'On');
ini_set('display_errors', 1);

include("../../db.php");


?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html >
<head>
    <title>SICAP | Sistema Integral de Costos</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="author" content="Tomas Bagdanavicius, http://www.lwis.net/free-css-drop-down-menu/" />
    <meta name="keywords" content=" css, dropdowns, dropdown menu, drop-down, menu, navigation, nav, horizontal, vertical left-to-right, vertical right-to-left, horizontal linear, horizontal upwards, cross browser, internet explorer, ie, firefox, safari, opera, browser, lwis" />
    <meta name="description" content="Clean, standards-friendly, modular framework for dropdown menus" />
    <link href="/sicap/css/helper.css" media="screen" rel="stylesheet" type="text/css" />
    <script src="/sicap/js/htmlDatePicker.js" type="text/javascript"></script>

    <link href="/sicap/css/stylesheet.css" rel="stylesheet" type="text/css" />

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
                            <h1><img src="../../images/seleccion_sicap_archivos/image002.jpg" alt="flickr" /><strong>                Módulo de Inventario | Productos y servicios</strong></h1>

                            <table border=none class="tablas-nuevas">

                                <tr >
                                    <th >Código</th>

                                    <th>Nombre de Artículo</th>
                                    <th>Proveedor</th>
                                    <th>Tipo de Inventario</th>
                                    <th>Unidad de Medida</th>
                                    <th>Descripción</th>
                                    <th>Existencia Mínima</th>
                                    <th>Existencia Inicial</th>
                                    <th>Existencia Maxima</th>
                                    <th>Fecha de Vencimiento</th>
                                    <th>Fecha de Adquisición</th>
                                    <th>Ubicación</th>
                                    <th>Observación</th>

                                </tr>

                                <tr>
                                    <?php
                                        $result=mysql_query("SELECT * FROM min_productos_servicios");

                                    while($test = mysql_fetch_array($result))
                                    {
                                        $id = $test['codigo'];

                                        echo "<tr align='center'>";
                                        echo"<td><font color='black'>". $test['codigo_alias']. "</font></td>";
                                        echo"<td><font color='black'>". $test['nombre']. "</font></td>";
                                        echo"<td><font color='black'>". $test['proveedor']. "</font></td>";



                                        $sql2 ="SELECT tipo FROM min_tipo_inventario where codigo='" . $test['inventario'] . "'";
                                        $result2 = mysql_query($sql2);
                                        $test2 = mysql_fetch_array($result2);
                                        if (!$result2)
                                        {
                                            die("Error: Data not found.. de tipo inventario");
                                        }
                                        echo"<td><font color='black'>". $test2['tipo']. "</font></td>";



                                        $sql2 ="SELECT descripcion FROM mco_unidad where codigo='" . $test['mco_unidad'] . "'";
                                        $result2 = mysql_query($sql2);
                                        $test2 = mysql_fetch_array($result2);
                                        if (!$result2)
                                        {
                                            die("Error: Data not found.. de tipo unidad");
                                        }
                                        echo"<td><font color='black'>". $test2['descripcion']. "</font></td>";


                                        echo"<td><font color='black'>". $test['descripcion']. "</font></td>";
                                        echo"<td><font color='black'>". $test['existencia_minima']. "</font></td>";
                                        echo"<td><font color='black'>". $test['existencia_inicial']. "</font></td>";
                                        echo"<td><font color='black'>". $test['existencia_maxima']. "</font></td>";
                                        echo"<td><font color='black'>". $test['fecha_vencimiento']. "</font></td>";
                                        echo"<td><font color='black'>". $test['fecha_adquisicion']. "</font></td>";
                                        echo"<td><font color='black'>". $test['ubicacion']. "</font></td>";
                                        echo"<td><font color='black'>". $test['observacion']. "</font></td>";

                                        echo"<td> <a href ='articulo_mod.php?codigo=$id'>Modificar</a>";
                                        echo"<td> <a href ='cargo_del.php?codigo=$id'>Borrar</a>";

                                        echo "</tr>";

                                    }

                                    ?>
                                </tr>


                            </table>
                            <br/><br/><br/>
                            <a href="inventario.php"><input type="button" value="Atras"></a>
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