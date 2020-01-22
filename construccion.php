    <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="video.css">


 <?php 
    include("home.php");
 ?>

<body style="background-color: #BBB9BA">
        <!-- bradcam_area_start -->
    <div class="bradcam_area breadcam_bg_1">
        <h3>Construcción<br>
            
        </h3>
    </div>
    <!-- bradcam_area_end -->

<?php 
    include("tarjetas-credito.php");
 ?>

    <!-- offers_area_start -->
    <div class="offers_area p-3" id="construccion">
        <div class="container" >
            <div class="row">
                <div class="col-xl-12">
                    <div class="section_title text-center mb-100" >
                        <span></span>
                        <div class="card-text"><strong class="card-text strong">Soluciones integrales</strong><br>en construcción, remodelación y ampliación</div>

                        <div class="hit-the"><strong class="hit-the-floor">Soluciones integrales</strong>  <br>para tu hogar, comercio y oficina
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-4 col-md-4">
                    <div class="single_offers">
                        <div class="about_thumb">
                            <img src="img/Services/ampliacion.jpg" alt="">
                        </div>
                        <h3 style="color: #fff;"><strong>Remodelación</strong></h3>
 
                       <a  data-toggle="modal" data-target="#exampleModal" href="#" class="button-animate" style="cursor: pointer;position:relative;text-decoration:none;font-size: 10px;padding: 15px 5px">Cotiza</a>
                    </div>
                </div>
                <div class="col-xl-4 col-md-4">
                    <div class="single_offers">
                        <div class="about_thumb">
                            <img src="img/Services/remodelacion.jpg" alt="">
                        </div>
                        <h3 style="color: #fff;"><strong>Ampliación</strong></h3>
 
                       <a data-toggle="modal" data-target="#exampleModal" href="#" class="button-animate" style="cursor: pointer;position:relative;text-decoration:none;font-size: 10px;padding: 15px 5px">Cotiza</a>
                    </div>
                </div>
                <div class="col-xl-4 col-md-4">
                    <div class="single_offers">
                        <div class="about_thumb">
                            <img src="img/Services/diseño.jpg" alt="">
                        </div>
                        <h3 style="color: #fff;"><strong>Diseño</strong></h3>
 
                       <a data-toggle="modal" data-target="#exampleModal" href="#" class="button-animate" style="cursor: pointer;position:relative;text-decoration:none;font-size: 10px;padding: 15px 5px">Cotiza</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- offers_area_end -->

</body>

    <?php 
    include("footer.php");
    ?>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">COTIZA</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="CERRAR">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js" type="text/javascript" charset="utf-8" async defer></script>
    <div class="container">
        <h2>Datos de contacto</h2>
            <form name="frmContacto" method="post">
            <fieldset class="form-group">

                <div class="form-group">
                    <label for="zipCode">C.P.</label>
                    <input type="number" maxlength="5" id="zipCode" name="zipCode" class="form-control" placeholder="Tu Código  postal">
                   
                </div>

                <div class="form-group">
                    <label for="locationTxt">Colonia o Delegación</label>
                    <input class="form-control" type="text" id="locationTxt" name="locationTxt" placeholder="Ingresa tu Colonia o Delegación">
                </div>

                <div class="form-group row">
                    <div class="form-group col">
                        <label for="first_name">Nombre:</label>
                        <input class="form-control" type="text" id="firstName" name="first_name" placeholder="Ingresa tu nombre" >
                    </div>

                    <div class="form-group col">
                        <label for="last_name">Apellido</label>
                        <input class="form-control" type="text" id="last_name" name="last_name" placeholder="Ingresa tu apellido" >
                    </div>
                </div>

                <div class="form-group row">
                    <div class="form-group col">
                        <label for="email">E-mail</label>
                        <input class="form-control" type="email" id="email" name="email" placeholder="Ingrese su email" value=" ">
                     
                    </div>

                    <div class="form-group col">
                        <label for="telephone">Celular</label>
                        <input class="form-control" type="text" id="telephone" name="telephone" placeholder="Ingrese su numero de celular">
                       
                    </div>
                </div>

                
<button type="submit" value="Enviar" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  enviar
</button>

</form>



<?php
if(isset($_POST['email'])) {

// Debes editar las próximas dos líneas de código de acuerdo con tus preferencias
$email_to = "samm.arquitectura@hotmail.com";
$email_subject = "Contacto desde el sitio web";


// Aquí se deberían validar los datos ingresados por el usuario
if(!isset($_POST['first_name']) ||
!isset($_POST['last_name']) ||
!isset($_POST['email']) ||
!isset($_POST['telephone']) ||
!isset($_POST['locationTxt']) ||
!isset($_POST['zipCode'])) {


echo "<script language='javascript'>";
echo "alert('Ocurrió un error y el formulario no ha sido enviado')";
echo "</script>"; 

die();
}

$email_message = "Detalles del formulario de contacto:\n\n";

$email_message .= "Nombre: " . $_POST['first_name'] . "\n";
$email_message .= "Apellido: " . $_POST['last_name'] . "\n";
$email_message .= "E-mail: " . $_POST['email'] . "\n";
$email_message .= "Teléfono: " . $_POST['telephone'] . "\n";
$email_message .= "Alcadia: " . $_POST['locationTxt'] . "\n";
$email_message .= "CP: " . $_POST['zipCode'] . "\n\n";

// Ahora se envía el e-mail usando la función mail() de PHP
$headers = 'From: '.$email_from."\r\n".
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();
@mail($email_to, $email_subject, $email_message, $headers);


echo "<script language='javascript'>";
echo "alert('El correo se ha enviado exitosamente')";
echo "</script>"; 


}
?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">CERRAR</button>
      </div>
    </div>
  </div>
</div>