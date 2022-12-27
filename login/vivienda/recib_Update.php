
<?php
include('config.php');
$idRegistros = $_REQUEST['id'];
$departamento      = $_REQUEST['departamento'];
$nombre      = $_REQUEST['nombre'];
$correo 	 = $_REQUEST['correo'];
$direccion 	 = $_REQUEST['direccion'];
$cedula 	 = $_REQUEST['cedula'];
$serie 	 = $_REQUEST['serie'];

$update = ("UPDATE viviendaclientes 
	SET 
	departamento  ='" .$departamento. "',
	nombre  ='" .$nombre. "',
	correo  ='" .$correo. "',
	direccion ='" .$direccion."',
	cedula ='" .$cedula. "',
	serie ='" .$serie. "'   

WHERE id='" .$idRegistros. "'
");
$result_update = mysqli_query($con, $update);

echo "<script type='text/javascript'>
        window.location='index.php';
    </script>";

?>
