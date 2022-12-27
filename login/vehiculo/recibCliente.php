<?php
include('config.php');
$tipo      = $_REQUEST['tipo'];
$marca 	 = $_REQUEST['marca'];
$modelo 	 = $_REQUEST['modelo'];
$version 	 = $_REQUEST['version'];
$serie 	 = $_REQUEST['serie'];
$matricula 	 = $_REQUEST['matricula'];


$QueryInsert = ("INSERT INTO vehiculoclientes(
    tipo,
    marca,
    modelo,
    version,
    serie,
    matricula
)
VALUES (
    '".$tipo. "',
    '".$marca. "',
    '".$modelo. "',
    '".$version."',
    '".$serie."',
    '".$matricula."'
)");
$inserInmueble = mysqli_query($con, $QueryInsert);

header("location:index.php");
?>
