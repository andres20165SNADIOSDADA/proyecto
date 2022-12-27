
<?php
include('config.php');
$idRegistros = $_REQUEST['id'];
$tipo      = $_REQUEST['tipo'];
$marca      = $_REQUEST['marca'];
$modelo 	 = $_REQUEST['modelo'];
$version 	 = $_REQUEST['version'];
$serie 	 = $_REQUEST['serie'];
$matricula 	 = $_REQUEST['matricula'];

$update = ("UPDATE vehiculoclientes 
	SET 
	tipo  ='" .$tipo. "',
	marca  ='" .$marca. "',
	modelo  ='" .$modelo. "',
	version ='" .$version."',
	serie ='" .$serie. "',
	matricula ='" .$matricula. "'   

WHERE id='" .$idRegistros. "'
");
$result_update = mysqli_query($con, $update);

echo "<script type='text/javascript'>
        window.location='index.php';
    </script>";

?>
