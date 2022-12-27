<?php
include('config.php');
$departamento      = $_REQUEST['departamento'];
$nombre 	 = $_REQUEST['nombre'];
$correo 	 = $_REQUEST['correo'];
$direccion 	 = $_REQUEST['direccion'];
$cedula 	 = $_REQUEST['cedula'];
$serie 	 = $_REQUEST['serie'];


$QueryInsert = ("INSERT INTO viviendaclientes(
    departamento,
    nombre,
    correo,
    direccion,
    cedula,
    serie
)
VALUES (
    '".$departamento. "',
    '".$nombre. "',
    '".$correo. "',
    '".$direccion."',
    '".$cedula."',
    '".$serie."'
)");
$inserInmueble = mysqli_query($con, $QueryInsert);

header("location:index.php");
?>
