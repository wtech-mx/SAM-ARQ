 <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="video.css">
  <link rel="stylesheet" type="text/css" href="css/mostrar-div.css">

<?php
   	include("select-boxes.php");
   	include("home.php");
?>  

    <!-- bradcam_area_start -->
    <div class="bradcam_area breadcam_bg_1" 
   style="background-image: url('img/di.jpg');
  min-height: 500px; 
  background-attachment: fixed;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;">
        <h3>Soluciones Para <br>
        	vivienda, oficinas y comercios
        </h3>
                <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post">
                    <div class="single-element-widget mt-80" style="position: absolute;left: 32%;border-radius: 10px;">
                    <label for='services[]'></label>
                        <div class="default-select" id="default-select">
                            <select  name="services[]" >
                            <option value="Diseño">Diseño</option>
                            <option value="Carpinteria" >Carpinteria</option>
                            <option value="Canceleria">Canceleria </option>
                            <option value="Pintura">Pintura</option>
                            <option value="Herreria">Herreria</option>
                            <option value="Impermeabilizacion">Impermeabilizacion</option>
                            <option value="Plomeria">Plomeria</option>
                            <option value="Iluminacion">Iluminacion</option>
                            <option value="Acabados-en-lounge">Acabados en lounge</option>
                            </select>
                            <input class="genric-btn primary-border circle" type="submit" name="formSubmit" value="Ver"> <br>
                        </div>
                    </div>
                </form>
    </div>

<?php 
	include("tarjetas-credito.php");
 ?>

  <!-- Start Align Area -->
  <div class="whole-wrap">
    <div class="container box_1170">
      <div class="section-top-border">
        <h3 class="mb-30">Diseño</h3>
        <div class="row">
          <div class="col-md-3">
            <img src="img/icon-diseño.png" alt="" class="img-fluid">
          </div>
          <div class="col-md-9 mt-sm-20">
            <p>Nuestros técnicos están capacitados para solucionar cualquier trabajo requerido, <br> ¿tienes algún diseño en mente?, nosotros lo fabricamos. </p>
            <input type="checkbox" id="spoiler1"></input>

            <label class="button-animate" for="spoiler1">Cotiza gratis </label>

            <div class="spoiler">

              <?php 

                include("Cuestionario.php");
               ?>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End Align Area -->

    <?php 
    include("instagram.php");
     ?>

    <?php 
    include("footer.php");
 	?>
