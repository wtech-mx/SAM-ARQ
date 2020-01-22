<?php 
  //header('Location: https://samarquitectura.com.mx/');
	include("home.php");
 ?>
 
<link rel="stylesheet" type="text/css" href="video.css">
     <!-- slider_area_start -->
<body style="background-color: #BBB9BA">
    
    <!-- bradcam_area_start -->
    <div class="bradcam_area ima-inicio" style="background-image:url(img/inicio.png);">

        <h3 class="h3-sam" style="font-family: Helvetica;">
          <strong>Soluciones integrales</strong> <br> para tu hogar, comercio y oficina
        </h3>


        <a href="construccion.php" class="button-animate button-sam-left" style="">construcción</a>

        <a href="servicios.php" class="button-animate button-sam-rigth" style="">Mantenimiento</a>        
    </div>

        <!-- about_area_start -->
    <div class="about_area">
        <div class="container">
            <div class="row">
                <div class="col-xl-5 col-lg-5">
                    <div class="about_info">
                        <div class="section_title mb-20px">
                         <br>
                            <h2 style="color: #fff"><br>
                               <strong>Bienvenidos a S.A.M. Soluciones en Arquitectura y Mantenimiento</strong></h2>
                        </div>
                        <p style="color: #fff">En S.A.M. Soluciones en Arquitectura y Mantenimiento materializamos tus sueños en sólidos proyectos. <br>
                        Sabemos que el tiempo no perdona, por lo tanto contamos con la experiencia necesaria junto con un equipo capacitado para dar mantenimiento preventivo y correctivo en tu hogar, comercio y oficina que permite salvaguardar tu patrimonio.<br>
                        Buscamos innovar  de manera constante por medio del uso de nuevas tecnologías y tendencias  hacía la necesidad de constantes cambios.<br>  Estamos a tus órdenes para diseñar y solucionar lo que tienes en mente, desde lo más simple hasta lo más complejo.</p>
                    <a href="nosotros.php" class="button-animate" style="cursor: pointer;position:relative;text-decoration:none;font-size: 10px">Ver más</a>
                    </div>
                </div>

              <div class="col-md-7">
                <div class="about_info_area">

                   <div class="w3-content w3-section" style="width:100%;">
                    <img class="mySlides" src="img/slide/1.jpeg">
                    <img class="mySlides" src="img/slide/2.jpeg">
                    <img class="mySlides" src="img/slide/3.jpeg">
                    <img class="mySlides" src="img/slide/4.jpeg">
                  </div>  

                    </div>

                  </div>

                </div> 
                </div>

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
      <style>

          .inicio-area{
          padding: 60px;
          }

          .gallery {
            width: 100%;
            height: 100%;
            padding: 10px;
          }


          .gallery img {
            width: 450px;
            height: 450px;
          }

          .desc {
            padding: 15px;
            text-align: center;
      }

      </style>

<!--    <div class="inicio-area" style="background: #000">

            <div class="row" style="position: relative;left: 90px;right:90px;">

                 <div class="col-l-5 col-lg-5 col-md-5 col-xs-5">
                  <div class="gallery">
                    <a target="_blank" href="">
                      <img src="img/Services/Remodeling.jpg" alt="">
                    </a>
                  </div>
                
                </div>

                 <div class="col-l-5 col-lg-5 col-md-5 col-xs-5">
                  <div class="gallery">
                    <a target="_blank" href="">
                      <img src="img/Services/Remodeling.jpg" alt="">
                    </a>
                  </div>
                
                </div>

            </div>

      </div>-->

    <!-- banner post end-->

<!--<section id="lab_video_slider">
  <div class="container-fluid">
    <div class="row">

    <div class="swiper-container">
        <div class="swiper-wrapper">

          <div id="slide_two" class="swiper-slide">
            <div id="lab_video_text_overlay">
              <div class="container">
                
                <h2>
                  <div class="text-animate">
                      <p class="p-tanimate"><strong>Soluciones en:</strong></p>
                        <ul class="ul-tanimate">
                          <li> <strong>Remodelacion</strong> </li>
                          <li> <strong>Ampliacion</strong> </li>
                          <li> <strong>Diseño</strong> </li>
                        </ul>
                  </div>
                </h2>

              <a href="construccion.php" class="button-animate pulse" style="cursor: pointer;position:relative;text-decoration:none;font-size: 20px;animation-timing-function: ease;animation: pulse 2s infinite;background-color: lighten($primary, 25%);">Construccion</a>
              </div>
            </div>

            <video class="slider-video" width="100%" preload="auto" loop="" autoplay="" style="visibility: visible; width: 100%;" > 
              <source type="video/mp4" >
                <source src="vide-beta.mp4" type="video/mp4">
                  <source src="vide-beta.mp4" type="video/webm">
                    <source src="vide-beta.mp4" type="video/ogg">
             </video>
          </div>
        </div>
    </div>  
</div>
</div>
</section>     -->
 


      <!-- bradcam_area_start -->
  <div class="bradcam_area breadcam_bg_1" 
     style="
    background-image: url('img/PD.jpg');
    min-height: 500px; 
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;">  
            
          <h3 style="color: #0d193a"><strong>PROYECTOS DESTACADOS</strong>
          </h3>
           <a href="proyectos-destacados.php" class="button-animate" style="cursor: pointer;position:relative;text-decoration:none;font-size: 10px">Ver más</a>
    </div>
      <!-- bradcam_area_end -->


</body>




    
    <!-- about_area_end -->

     <?php 
    include("footer.php");
 	?>
