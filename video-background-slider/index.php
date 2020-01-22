<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Video Background Slider</title>
  <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css'>
  <link rel="stylesheet" href="./video.css">

</head>
<body>
<!-- partial:index.partial.html -->
<!-- reference examples at https://www.idangero.us/swiper/demos/#.Vl8kD9-rRHc -->
<section id="lab_video_slider">
  <div class="container-fluid">
    <div class="row">
      <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">

      <!-- Link Swiper's CSS -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.2.5/css/swiper.min.css">

      <!-- Swiper -->
      <div class="swiper-container">
        <div class="swiper-wrapper">
          
          <div id="slide_one" class="swiper-slide">
            <div id="lab_video_text_overlay">
              <div class="container">
                <h2>Mantenimiento, construcción y diseñó</h2>
                <p>Soluciones para:</p>
                <a href="#" class="btn btn-default">Mantenimiento</a>
                <a href="#" class="btn btn-warning">Construcción</a>

              </div>
            </div>


            <!-- VIDEO1 -->
    <video class="slider-video" width="100%" preload="auto" loop="" autoplay="" style="visibility: visible; width: 100%;" > 
      <source type="video/mp4">
        <source src="../vide-remodelacion.mp4" type="video/mp4">
          <source src="../vide-remodelacion.mp4" type="video/webm">
            <source src="../vide-remodelacion.mp4" type="video/ogg">
     </video>
            <!-- END VIDEO -->
          </div>

          <div id="slide_two" class="swiper-slide">
            <div id="lab_video_text_overlay">
              <div class="container">
                <h2>Mantenimiento, construcción y diseñó</h2>
                <p>Soluciones para:</p>
                <a href="#" class="btn btn-default">Mantenimiento</a>
                <a href="#" class="btn btn-warning">Construcción</a>

              </div>
            </div>
  <!-- end #lab_overlay -->

    <video class="slider-video" width="100%" preload="auto" loop="" autoplay="" style="visibility: visible; width: 100%;" > 
      <source type="video/mp4" >
        <source src="../vide-pintura.mp4" type="video/mp4">
          <source src="../vide-pintura.mp4" type="video/webm">
            <source src="../vide-pintura.mp4" type="video/ogg">
     </video>
          
          </div>

        </div>
        <!-- Add Pagination -->
        <div class="swiper-pagination"></div>
        <!-- Add Arrows -->
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
      </div>

      <!-- Swiper JS -->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.2.5/js/swiper.min.js"></script>

      <!-- Initialize Swiper -->
      <script>
        var swiper = new Swiper('.swiper-container', {
            pagination: '.swiper-pagination',
            paginationClickable: true,
            nextButton: '.swiper-button-next',
            prevButton: '.swiper-button-prev',
            spaceBetween: 30,
            autoplay: 5000,
            autoplayDisableOnInteraction: false
        });
      </script>
    </div>
    <!-- end .row -->
  </div>
  <!-- end .container-->
  </div>
  <!-- end #section -->
<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js'></script>
</body>
</html>