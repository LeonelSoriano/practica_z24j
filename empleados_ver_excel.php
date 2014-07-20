<?php
$file="empleados.xls";
$test="<table  ><tr><td>Cell 1</td><td>Cell 2</td></tr></table>";
header("Content-type: application/vnd.ms-excel");
header("Content-Disposition: attachment; filename=$file");
echo $test;
?>
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

    </tr>
    <?php
	include("db.php");
	$result=mysql_query("SELECT * FROM mrh_empleado");
        while($test = mysql_fetch_array($result))
        	{
                //  calculos de horas
                    $id = $test['codigo'];	
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

                    echo "</tr>";
		}
	mysql_close($conn);
    ?>
</table> 
