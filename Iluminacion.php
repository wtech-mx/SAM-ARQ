 <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="video.css">
  <link rel="stylesheet" type="text/css" href="css/mostrar-div.css">
<?php
   	include("select-boxes.php");
   	include("home.php");
?>  

    <!-- bradcam_area_start -->
    <div class="bradcam_area breadcam_bg_1" 
   style="background-image: url('img/iluminacion.jpg');
  min-height: 500px; 
  background-attachment: fixed;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;">
        <h3 style="color: #fff;">Soluciones Para <br>
        	vivienda, oficinas y comercios
        </h3>
<!--                <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post">
                    <div class="single-element-widget mt-80" style="position: absolute;left: 32%;border-radius: 10px;">
                    <label for='services[]'></label>
                        <div class="default-select" id="default-select">
                            <select  name="services[]" >
                            <option value="servicios" >Seleciona el servicio:</option>
                            <option value="Carpinteria" >Carpinteria</option>
                            <option value="Canceleria">Canceleria </option>
                            <option value="Pintura">Pintura</option>
                            <option value="Diseño">Diseño</option>
                            <option value="Herreria">Herreria</option>
                            <option value="Impermeabilizacion">Impermeabilizacion</option>
                            <option value="Plomeria">Plomeria</option>
                            <option value="Iluminacion">Iluminacion</option>
                            <option value="Acabados-en-lounge">Acabados en lounge</option>
                            </select>
                            <input class="genric-btn primary-border circle" type="submit" name="formSubmit" value="Ver"> <br>
                        </div>
                    </div>
                </form>-->
                 <div class="dropdown show">
                    <a class="btn btn-primary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="font-size: 29px;background-color: #153552;width: auto;">
                     Seleciona Servicio:
                    </a>

                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink" style="font-size: 23px;">
                    <a class="dropdown-item" href="Carpinteria.php">Carpinteria </a>
                    <a class="dropdown-item" href="Canceleria.php">Canceleria</a>
                    <a class="dropdown-item" href="Pintura.php">Pintura</a>
                    <a class="dropdown-item" href="Diseño.php">Diseño </a>
                    <a class="dropdown-item" href="Herreria.php">Herreria</a>
                    <a class="dropdown-item" href="Impermeabilizacion.php">Impermeabilizacion</a>
                    <a class="dropdown-item" href="Plomeria.php">Plomeria</a>
                    <a class="dropdown-item" href="Iluminacion.php">Iluminacion</a>
                    <a class="dropdown-item" href="Acabados-en-lounge.php">Acabados en lounge</a>
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
				<h3 class="mb-30">Iluminacion</h3>
				<div class="row">
					<div class="col-md-3">
						<img src="img/icon-i" alt="" class="img-fluid">
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
