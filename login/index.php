<?php session_start();
include ("conexion.php");

?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>carrito</title>


        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
        <!-- Enlace a CSS de Bootstrap (v.4.5.3) -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <link rel="stylesheet" href="./estilosForm.css">
    <link rel="stylesheet" href="./vivienda/css/maquinawrite.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">


 <!-- importante -->
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>




</head>
<style>
    .img {
        width: 100px;
        height: 45px;
        border-radius: 0.3em;
    }
    
</style>
<body>
       





<!-- nabvar -->
<nav class="navbar navbar-dark  bg-dark navbar-expand-lg " style="background-color: #563d7c !important;">
        <div class="container">

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">

                    <img src="imagenes/logo.png" alt="logo" class="img">

                    <a class="nav-link active" aria-current="page" href="./index.php">Inicio</a>
                    <a class="nav-link" href="../login/vida/index.php">Seguro de vida</a>
                    <a class="nav-link" href="../login/vivienda/index.php">Seguro de Vivienda</a>
                    <a class="nav-link " href="../login/vehiculo/index.php">Seguro de Vehiculo</a>
                </div>
                <div class="my-2 my-lg-0 mx-4" id="maquinaescribir">
      <h5 class="navbar-brand">THE BEST INSURANCE <span>&#160;</span></h5>
    </div>
                
            <ul class="navbar-nav me-auto mb-2 mb-md-0">
        <li class="nav-item">
        
        <li class="nav-item" style="padding-left: 130px;">
        <a class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#modal_cart" style="cursor:pointer;" onclick="consultar_carrito();"><i class="fas fa-shopping-cart"></i> Mi Carrito</a>
        </li>
      </ul>
    </nav>












<!-- MODAL CARRITO -->
<div class="modal fade" id="modal_cart" tabindex="-1"  aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Mi carrito</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
			<div class="modal-body">
				<div>
					<div class="p-2">
					

              <div id="mi_carrito"></div>


					</div>
				</div>
			</div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        <a type="button" class="btn btn-primary" onclick="borrar_carrito();">Vaciar carrito</a>
         <a href="comprar.php"> <input type="submit" name="detalle" id="detalle" class="btn btn-warning btn-block" value="Comprar"></a>
      </div>
    </div>
  </div>
</div>
<!-- END MODAL CARRITO -->



<div class="container-group ">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-6 bg-white form-demo rounded mt-5">
                <img src="imagenes/20944152.jpg" class="img-fluid" alt="">
                
               

            </div>
        </div>
 </div>

   



<!-- articulos -->
<div class="album py-5 bg-light">
<div class="container">
  <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
    <?php 
    $buscardor=mysqli_query($conexion,"SELECT * FROM articulos"); 
    while($resultado = mysqli_fetch_assoc($buscardor)){ 
    ?>
      <div class="col-4">
        <div class="card shadow-sm">
          <img src="img/<?php echo $resultado["img"]; ?>.jpeg" alt="">
          <div class="card-body">
           <strong> <p class="card-text"><?php echo $resultado["nombre"]; ?> --> <small class="text-muted"><?php echo $resultado["precio"]; ?></small>€</p> </strong> 
            <br>
            <div class="d-flex justify-content-between align-items-center">
              <div class="btn-group">
                <a href="formulariovida.php" class="btn btn-primary mx-4">COTIZAR</a>
                <button type="submit" class="btn btn-success btn-outline-white"  onclick=" envia_carrito($('#ref<?php echo $resultado['id']; ?>').val(),$('#titulo<?php echo $resultado['id']; ?>').val(),$('#precio<?php echo $resultado['id']; ?>').val(),$('#cantidad<?php echo $resultado['id']; ?>').val());">Añadir al carrito</button>
                <input name="ref" type="hidden" id="ref<?php echo $resultado["id"]; ?>" value="<?php echo $resultado["id"]; ?>" />                           
                <input name="precio" type="hidden" id="precio<?php echo $resultado["id"]; ?>" value="<?php echo $resultado["precio"]; ?>" />
                <input name="titulo" type="hidden" id="titulo<?php echo $resultado["id"]; ?>" value="<?php echo $resultado["nombre"]; ?>" />
                <input name="cantidad" type="hidden" id="cantidad<?php echo $resultado["id"]; ?>" value="1" class="pl-2" />
              </div>
            </div>
          </div>
        </div>
      </div>
    <?php } ?>
  </div>
</div>
</div>
    





<!-- mandamos al carrito -->
<script type="text/javascript">
function envia_carrito(ref,titulo,precio,cantidad) {
  var parametros = {"ref":ref,"titulo":titulo,"precio":precio,"cantidad":cantidad};
     $.ajax({
    data:parametros,
    url:'cart.php',
    type: 'POST',
    beforeSend: function () {
     
    },
    success: function (response) {  
        
// todo ok
        
    },
    error: function (response, error) {
     
  //error

    }
});
}
</script>

<!-- consultamos nuestro carrito -->
<script type="text/javascript">
        function consultar_carrito() {
        var parametros = {};
        $.ajax({
        data:parametros,
        type: 'POST',
        url: 'modal_carrito.php',
        success: function(data) {
        document.getElementById("mi_carrito").innerHTML = data;
        }
        });
        }
</script>


<!-- borrar carro -->
<script type="text/javascript">
        function borrar_carrito() {
        var parametros = {};
        $.ajax({
        data:parametros,
        type: 'POST',
        url: 'borrarcarro.php',
        success: function(data) {
        
          consultar_carrito();
          

        }
        });
        }
</script>










        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" ></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" ></script>


</body>
</html>