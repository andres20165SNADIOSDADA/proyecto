<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link type="text/css" rel="shortcut icon" href="img/logo-mywebsite-urian-viera.svg"/>
  <title>Eliminar - Actualizar Registro con Ventana Modal en PHP :: WebDeveloper Urian Viera</title>
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="css/cargando.css">
  <link rel="stylesheet" type="text/css" href="css/maquinawrite.css">
  <style> 
        table tr th{
            background:rgba(0, 0, 0, .6);
            color: azure;
        }
        tbody tr{
          font-size: 12px !important;

        }
        h3{
            color:crimson; 
            margin-top: 100px;
        }
        a:hover{
            cursor: pointer;
            color: #333 !important;
        }
        
        .img {
        width: 100px;
        height: 45px;
        border-radius: 0.3em;
    }

      </style>
</head>
<body>
  
<nav class="navbar navbar-dark bg-info navbar-expand-lg ">
        <div class="container">

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">

                    <img src="img/logo.png" alt="logo" class="img">

                    <a class="nav-link active" aria-current="page" href="../index.php">Inicio</a>
                    <a class="nav-link" href="../vida/index.php">Seguro de vida</a>
                    <a class="nav-link" href="../vivienda/index.php">Seguro de Vivienda</a>
                    <a class="nav-link" href="../vehiculo/index.php">Seguro de Vehiculo</a>
                </div>
            </div>
        </div>
    </nav>
    <br>



<div class="container mt-6 p-6">

<?php
include('config.php');

$sqlCliente   = ("SELECT * FROM vehiculoclientes ORDER BY id DESC ");
$queryCliente = mysqli_query($con, $sqlCliente);
$cantidad     = mysqli_num_rows($queryCliente);
?>


  <h1 class="text-center">
    FORMULARIO DE SEGURO DE VEHICULO
  </h1>
  <hr>


<div class="row text-center" style="background-color: #cecece">
  <div class="col-md-6"> 
    <strong>Registrar Nuevo Cliente</strong>
  </div>
  <div class="col-md-6"> 
    <strong>Lista de Clientes <span style="color: crimson">  ( <?php echo $cantidad; ?> )</span> </strong>
  </div>
</div>

<div class="row clearfix">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
  <div class="body">
      <div class="row clearfix">

        <div class="col-sm-5">
        <!--- Formulario para registrar Cliente --->
        <?php include('registrarCliente.php');  ?>

        </div>  

         

          <div class="col-sm-7">
              <div class="row">
                <div class="col-md-12 p-2">


                <div class=" table">
                    <table class="table table-bordered table-striped table-hover tabla">
                        <thead>
                          <tr>
                            <th scope="col">Tipo</th>
                            <th scope="col">Marca</th>
                            <th scope="col">Modelo</th>
                            <th scope="col">Version</th>
                            <th scope="col">Serie</th>
                            <th scope="col">Matricula</th>
                            <th scope="col">Acción</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php
                              while ($dataCliente = mysqli_fetch_array($queryCliente)) { ?>
                          <tr>
                            <td><?php echo $dataCliente['tipo']; ?></td>
                            <td><?php echo $dataCliente['marca']; ?></td>
                            <td><?php echo $dataCliente['modelo']; ?></td>
                            <td><?php echo $dataCliente['version']; ?></td>
                            <td><?php echo $dataCliente['serie']; ?></td>
                            <td><?php echo $dataCliente['matricula']; ?></td>
                            
                          <td> 
                              <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#deleteChildresn<?php echo $dataCliente['id']; ?>">
                                  Eliminar
                              </button>
                            
                              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#editChildresn<?php echo $dataCliente['id']; ?>">
                                  Modificar
                              </button>
                          </td>
                          </tr>
                     

                            <!--Ventana Modal para Actualizar--->
                            <?php  include('ModalEditar.php'); ?>

                            <!--Ventana Modal para la Alerta de Eliminar--->
                            <?php include('ModalEliminar.php'); ?>


                        <?php } ?>
                
                    </table>
                </div>


              </div>
          </div>
          </div>
      </div>
  </div>
</div>



</div>


<script src="js/jquery.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>

<script type="text/javascript">
    $(document).ready(function() {

        $(window).load(function() {
            $(".cargando").fadeOut(1000);
        });

//Ocultar mensaje
    setTimeout(function () {
        $("#contenMsjs").fadeOut(1000);
    }, 3000);



    $('.btnBorrar').click(function(e){
        e.preventDefault();
        var id = $(this).attr("id");

        var dataString = 'id='+ id;
        url = "recib_Delete.php";
            $.ajax({
                type: "POST",
                url: url,
                data: dataString,
                success: function(data)
                {
                  window.location.href="index.php";
                  $('#respuesta').html(data);
                }
            });
    return false;

    });


});
</script>

</body>
</html>