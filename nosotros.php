    <?php 
    include("home.php");
 ?>
   <link rel="stylesheet" href="video.css">
<body style="background-color: #BBB9BA">

    <!-- bradcam_area_start -->
    <div class="bradcam_area breadcam_bg" style="background-image: url('img/banner.png');">
        <h3></h3>
    </div>
    <!-- bradcam_area_end -->

        <!-- about_area_start -->
    <div class="about_area">
        <div class="container">
            <div class="row">
                <div class="col-xl-5 col-lg-5">
                    <div class="about_info">
                        <div class="section_title mb-20px" style="background-color: #;">
                            <h2 style="color: #;">S.A.M<br>
                               Soluciones en Arquitectura y Mantenimiento</h2>
                        </div>
                        <p>Somos
                        una empresa mexicana regida por valores y principios enfocados en brindar servicios y soluciones
                        integrales a nivel Residencial y Comercial, abarcando desde los trabajos más simples hasta los más
                        complejos, cumpliendo las necesidades y requerimientos de cada uno de nuestros clientes, brindando
                        siempre respeto y la atención que se merecen <br>
                        Nuestra oficina central se encuentra en la Ciudad de México, tenemos presencia en Querétaro, Puebla, Hidalgo y EdoMex, por medio de la ejecución de proyectos específicos.</p>
                   <a href="construccion.php" class="button-animate" style="cursor: pointer;position:relative;text-decoration:none;font-size: 7px;padding: 15px 15px">Construcción</a>
                   <a href="servicios.php" class="button-animate" style="cursor: pointer;position:relative;text-decoration:none;font-size: 7px;padding: 15px 15px">Mantenimiento</a>
                    </div>
                </div>
              <div class="col-md-7">
                <div class="about_info_area">

                   <div class="w3-content w3-section" style="width:100%">
                    <img class="mySlides" src="img/slide/1.jpeg">
                    <img class="mySlides" src="img/slide/2.jpeg">
                    <img class="mySlides" src="img/slide/3.jpeg">
                    <img class="mySlides" src="img/slide/4.jpeg">
                  </div>               
                    </div>

                  </div>
            </div>
        </div>
    </div>
<script>
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 3000); // Change image every 2 seconds
}
</script>
    <!-- about_area_end -->
<style type="text/css" media="screen">
              @media screen and (min-width: 480px){
              .mySlides{
                padding: 15px;
                width:500px;
              }
              }
                @media screen and (max-width: 480px){
              
              
              .mySlides{
                width: 90%;
              }
            }


</style>


    <!-- about_main_info_start -->
    <div class="about_main_info">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-md-6">
                    <div class="single_about_info">
                        <h3>Visión:<br>
                            </h3>
                            <p>Buscamos
                            ser un referente nacional en el ramo del mantenimiento para la edificación y la construcción,
                            teniendo como base la honradez y profesionalismo, asegurando a los clientes un servicio de calidad.
                            </p>
                    </div>
                </div>
                <div class="col-xl-6 col-md-6">
                    <div class="single_about_info">
                        <h3>Misión</h3>
                            <p>Brindar
                            soluciones mediante servicios integrales en el desarrollo de proyectos de mantenimiento y
                            construcción.
                            </p>
                    </div>
                </div>
                <div class="col-xl-6 col-md-6">
                    <div class="single_about_info">
                        <h3>Valores</h3>
                            <p>Pasión <br> </p>
                            <p>Excelencia <br> </p>
                            <p>Innovación <br> </p>
                            <p>Integridad laboral <br> </p>
                            <p>Trabajo en equipo <br>
                            </p>
                    </div>
                </div>

                <div class="col-xl-6 col-md-6">
                    <div class="single_about_info">
                        <h3>Contamos con:</h3>
                            <p>Un sistema particular de identificación de problemas, planeación, ejecución y evaluación, que rige cada una de nuestras áreas de trabajo.
                            </p>
                            <p>
                                <h3>Servicios:<br> <br>Construcción, remodelación y ampliación </h3> 
                                
                                • Soluciones para vivienda, oficinas y comercios <br> <br>
                                <h3>Mantenimiento a la vivienda, comercio y oficinas</h3>
                                •Pintura, albañilería, acabados, cancelería, herrería, carpintería, cerrajería, instalaciones hidráulicas sanitarias, gas, eléctricas, muros y plafones falsos, impermeabilización y ecotecnias.

                            </p>        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- about_main_info_end -->

</body>

        <!-- instragram_area_start -->
  <?php 
  include("instagram.php");
   ?>
    <!-- instragram_area_end -->

         <?php 
    include("footer.php");
    ?>
