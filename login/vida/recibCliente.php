<?php
include('config.php');
$nombre      = $_REQUEST['nombre'];
$correo 	 = $_REQUEST['correo'];
$celular 	 = $_REQUEST['celular'];
$cedula 	 = $_REQUEST['cedula'];
$estrato 	 = $_REQUEST['estrato'];


$QueryInsert = ("INSERT INTO clientes(
    nombre,
    correo,
    celular,
    cedula,
    estrato
)
VALUES (
    '".$nombre. "',
    '".$correo. "',
    '".$celular."',
    '".$cedula."',
    '".$estrato."'
)");
$inserInmueble = mysqli_query($con, $QueryInsert);

header("location:index.php");
?>
