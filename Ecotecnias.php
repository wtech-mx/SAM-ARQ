 <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="video.css">
  <link rel="stylesheet" type="text/css" href="css/mostrar-div.css">

<?php
   	include("select-boxes.php");
   	include("home.php");
?>  

    <!-- bradcam_area_start -->
    <div class="bradcam_area breadcam_bg_1" 
   style="background-image: url('img/paneles-solares.jpg');
  min-height: 500px; 
  background-attachment: fixed;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;">

        <h3 style="color: #fff;"><strong>Soluciones integrales</strong>  <br>para tu hogar, comercio y oficina
        </h3>

                 <div class="dropdown show">
                    <a class="btn btn-primary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="font-size: 29px;background-color: #153552;width: auto;">
                     Selecciona Servicio:
                    </a>

                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink" style="font-size: 23px;">
                    <a class="dropdown-item" href="Plomeria.php">Plomería</a>
                    <a class="dropdown-item" href="Cerrajería.php">Cerrajería</a>
                    <a class="dropdown-item" href="Eléctricidad.php">Eléctricidad</a>
                    <a class="dropdown-item" href="Carpinteria.php">Carpintería</a>
                    <a class="dropdown-item" href="Canceleria.php">Cancelería</a>
                    <a class="dropdown-item" href="Herreria.php">Herrería</a>
                    <a class="dropdown-item" href="Pintura.php">Pintura</a>
                    <a class="dropdown-item" href="Albañileria.php">Albañilería</a>
                    <a class="dropdown-item" href="Muros-y-plafones-Falsos.php">Muros y plafones Falsos</a>
                    <a class="dropdown-item" href="Impermeabilizacion.php">Impermeabilización  </a>
                  <a class="dropdown-item" href="Ecotecnias.php">Ecotecnias</a>
                    <!--<a class="dropdown-item" href="contacto.php">Conacto</a>-->
                    </div>
                </div>
    </div>

<?php 
	include("tarjetas-credito.php");
 ?>

    <!-- Start Align Area -->
  <div class="whole-wrap">
    <div class="container box_1170">
      <div class="section-top-border">
        <h3 class="mb-30">Ecotecnias</h3>
        <div class="row">
          <div class="col-md-3">
            <img src="img/icon-paneles.png" alt="" class="img-fluid">
          </div>
          <div class="col-md-9 mt-sm-20">
            <p style="font-size: 20px">Nuestros técnicos están capacitados para solucionar cualquier trabajo requerido, <br> ¿tienes algún diseño en mente?, nosotros lo fabricamos. </p>
            <input type="checkbox" id="spoiler1"></input>

            <label class="button-animate" for="spoiler1">Cotiza gratis </label>

            <div class="spoiler">

              <?php 

                include("Cuestionario.php");
               ?>

            </div>
          </div>
    <div class="offers_area">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section_title text-center mb-100">
                       
                        <h3></h3>
                    </div>
                </div>
            </div>

            <style type="text/css" media="screen">
              .offers_area .single_offers .about_thumb img{
                width: 30%;
                display:block;
            margin:auto;
              }
            </style>

<?php 
    include("seguridad.php");

 ?>
        </div>
    </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End Align Area -->


    <?php 
    include("footer.php");
 	?>
