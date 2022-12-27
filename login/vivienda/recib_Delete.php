<?php
include('config.php');
$idRegistros = $_REQUEST['id'];

$DeleteRegistro = ("DELETE FROM viviendaclientes WHERE id= '".$idRegistros."' ");
mysqli_query($con, $DeleteRegistro);
?>