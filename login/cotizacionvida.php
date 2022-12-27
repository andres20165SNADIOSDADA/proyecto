<?php
    $servidor="root";
	$usuario=" the-best-insurance.chopkldfmqvn.us-east-1.rds.amazonaws.com";
	$clave="Acontreras38";
	$baseDeDatos="tienda_carro";

    $enlace=mysqli_connect($servidor, $usuario, $clave, $baseDeDatos);
    
    if(!$enlace){
        echo "Error en la conexion con el servidor";
    }

?>
<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="utf-8">
    <meta name="author" content="Plácido Luna: https://www.formaciongrafica.net/">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Formulario de contacto con adjuntos</title>

    <!-- Enlace a CSS de Bootstrap (v.4.5.3) -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <link rel="stylesheet" href="./estilosForm.css">

</head>
<style>
    .img {
        width: 100px;
        height: 45px;
        border-radius: 0.3em;
    }
</style>



<body>
    <nav class="navbar navbar-dark bg-info navbar-expand-lg ">
        <div class="container">

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">

                    <img src="imagenes/logo.png" alt="logo" class="img">

                    <a class="nav-link active" aria-current="page" href="index.php">Inicio</a>
                    <a class="nav-link" href="../login/vida/index.php">Seguro de vida</a>
                    <a class="nav-link" href="segurovivienda.php">Seguro de Vivienda</a>
                    <a class="nav-link " href="segurovehiculo.php">Seguro de Vehiculo</a>
                </div>
            </div>
        </div>
    </nav>
    <br>






    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
        crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->

</body>

</html>
<div class="container">
        <div class="row justify-content-center">
            <div class="col-10 col-lg-10 bg-light form-demo rounded mt-5" >
                <h1 class="text-center text-dark">COTIZACIÓN SEGURO DE VIDA</h1>
                <hr class="bg-light w-75">
                
                <table class="table table-dark table-striped">
                      <tr>
                        <th scope="col">id</th>
                        <th scope="col">Tipo</th>
                        <th scope="col">Precio</th>
                        
                      </tr>
                     
                    </thead>
                    <tbody>
                     <?php 
						$consulta = "SELECT * FROM articulos WHERE id=1";
						$ejecutarConsulta = mysqli_query($enlace, $consulta);
						$verFilas = mysqli_num_rows($ejecutarConsulta);
						$fila = mysqli_fetch_array($ejecutarConsulta);

						if(!$ejecutarConsulta){
							echo "Error en la consulta";

						}else{
							if($verFilas < 1){
								echo "<tr><td>Sin registros</td></tr>";
							}else{
								for($i=0; $i<=$fila; $i++){
									echo '
										<tr>
											<td>'.$fila[0].'</td>
											<td>'.$fila[1].'</td>
											<td>'.$fila[2].'</td>
                                         
										</tr>
									';
									$fila = mysqli_fetch_array($ejecutarConsulta);
								}
							}
						}
					
					?>
                      
                  </table>
            </div>
        </div>
    </div>