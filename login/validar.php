<?php
$usuario=$_POST['usuario'];
$contraseña=$_POST['contraseña'];
session_start();
$_SESSION['usuario']=$usuario;

$conexion=mysqli_connect("localhost","root","","rol");

$consulta="SELECT * FROM usuarios where usuario='$usuario' and contraseña='$contraseña'";
$resultado=mysqli_query($conexion,$consulta);

$filas=mysqli_fetch_array($resultado);

if($filas['id_cargo']==1){ //administrador Root
    header("location:index.php");

}else
if($filas['id_cargo']==2){ //cliente
header("location:index.php");
}else
if($filas['id_cargo']==3){ //administrador
header("location:index.php");
}
else{
    ?>
    <?php
    include("login.html");
    ?>
    <h1 class="bad">ERROR EN LA AUTENTIFICACION</h1>
    <?php
}
mysqli_free_result($resultado);
mysqli_close($conexion);


