<?php 
  //Conexion

  $servidor="root";
	$usuario=" the-best-insurance.chopkldfmqvn.us-east-1.rds.amazonaws.com";
	$password="Acontreras38";
  $nombreBD = "rol";
  $conexion = new mysqli($servidor, $usuario, $password, $nombreBD);
  if ($conexion->connect_error){
  die("La conexión ha fallado " . $conexion->connect_error);
  //echo "algo va mal";
  }else{
  
  //    echo "Todo ha salido bien";
  }
?>