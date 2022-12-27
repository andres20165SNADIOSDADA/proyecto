<?php
session_start();
$usuario = '';
 if ( !isset($_SESSION['usuario'] ) ) {
   
   header("location: login.html");
  } 
  $usuario = $_SESSION['usuario'];

  $server = "localhost";
$user = "root";
$passw = "";
$bd = "rol";

$conexion = mysqli_connect($server, $user, $passw,$bd) 
or die("Ha sucedido un error inexperado en la conexion de la base de datos");


$fecha = date('Y/m/d');
$hora = date('H:i:s');
//ip de cliente
if (getenv('HTTP_CLIENT_IP')) {
  $ip = getenv('HTTP_CLIENT_IP');
}
elseif (getenv('HTTP_X_FORWARDED_FOR')) {
  $ip = getenv('HTTP_X_FORWARDED_FOR');
}
elseif (getenv('HTTP_X_FORWARDED')) {
  $ip = getenv('HTTP_X_FORWARDED');
}
elseif (getenv('HTTP_FORWARDED_FOR')) {
   $ip = getenv('HTTP_FORWARDED_FOR');
}
elseif (getenv('HTTP_FORWARDED')) {
  $ip = getenv('HTTP_FORWARDED');
} 
else {
  $ip = $_SERVER['REMOTE_ADDR'];
}




$sqlauditoria="INSERT INTO `auditoria` ( `ip`, `fecha`, `hora`) VALUES ('$ip', '$fecha', '$hora')";
$auditoria =mysqli_query($conexion,$sqlauditoria);

 ?>
 <!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="./css/cabecera.css">
    <link rel="stylesheet" href="./css/login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css">
</head>
<body>
   <form action="validar.php" method="post">

   <h1 class="animate__animated animate__backInLeft">THE BEST INSURANCE</h1>

   <p>Usuario <input type="text" placeholder="ingrese su nombre" name="usuario"></p>

   <p>Contraseña <input type="password" placeholder="ingrese su contraseña" name="contraseña"></p>
   
   <input type="submit" value="Ingresar">
   
   </form>
    <br><br>
    <a href="ip.php" class="btn btn-primary mx-4">Ver auditoria</a>
    <?php 

//session_destroy();
?>

</body>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/bootstrap.min.js" ></script>

</html>