 <meta name="viewport" content="width=device-width, initial-scale=1">

<?php
   	include("select-boxes.php");
   	include("home.php");
?>  

    <!-- bradcam_area_start -->
    <div class="bradcam_area breadcam_bg_1" 
   style="background-image: url('img/aluminio.jpg');
  min-height: 500px; 
  background-attachment: fixed;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;">
        <h3 style="color: #fff;">Soluciones Para <br>
        	vivienda, oficinas y comercios
        </h3>
				<form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post">
					<div class="single-element-widget mt-80" 
					style="position: absolute;left: 32%;border-radius: 10px;">
					<label for='services[]'></label>
						<div class="default-select" id="default-select">
							<select multiple="multiple" name="services[]">
							<option value="Albañileria">Albañileria</option>
							<option value="Carpinteria">Carpinteria</option>
							<option value="Aluminio">Aluminio </option>
							<option value="Herreria">Herreria</option>
							<option value="Impermeabilizacion">Impermeabilizacion</option>
							<option value="Plomeria">Plomeria</option>
							<option value="Acabados">Acabados</option>
							<option value="Iluminacion">Iluminacion</option>
							<option value="Ampliacion-Remodelacion">Ampliacion y Remodelacion</option>
							</select>
							<input class="genric-btn primary-border circle" type="submit" name="formSubmit" value="Ver"> <br>
						</div>
					</div>
 				</form>
    </div>

<?php 
	include("tarjetas-credito.php");
 ?>

    <?php 
    include("instagram.php");
     ?>

    <?php 
    include("footer.php");
 	?>
