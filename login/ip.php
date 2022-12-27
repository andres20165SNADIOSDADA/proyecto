<?php 
session_start();
include 'conexionlogin.php';

$sql='SELECT * FROM `auditoria`';
$resultado = mysqli_query( $conexion, $sql ) ;

echo "<table borde='2'>";
echo "<tr>";
echo "<th>ID</th>";
echo "<th>DIRRECCION IP</th>";
echo "<th>FECHA</th>";
echo "<th>HORA</th>";
echo "</tr>";
while ($columna = mysqli_fetch_array( $resultado ))
{
	echo "<tr>";
	echo "<td>" . $columna['id'] . "</td><td>" . $columna['ip'] . "</td><td> ".$columna['fecha']. "</td><td>".$columna['hora']. "</td><td>";
    
    ;
	echo "</tr>";
}

echo "</table>";

mysqli_close( $conexion );
?>
<div class="form-group w-75 mx-auto">
                       <a href="contenido.php"> <input type="submit" name="detalle" id="detalle" class="btn btn-success btn-block"
                            value="REGRESAR"></a>
                    </div>
