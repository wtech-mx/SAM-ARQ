<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Video Background Slider</title>
  <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css'>
  <link rel="stylesheet" href="video.css">

</head>
<body>
<!-- partial:index.partial.html -->
<!-- reference examples at https://www.idangero.us/swiper/demos/#.Vl8kD9-rRHc -->

<link rel="stylesheet" type="text/css" href="css/btn-animate.css">

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
                
                <h2>
                  Soluciónes integrales para tu hogar y oficina
                </h2>

              <a href="servicios.php" class="button-animate">Mantenimiento</a>
              </div>
            </div>


            <!-- VIDEO1 -->
    <video class="slider-video" width="100%" preload="auto" loop="" autoplay="" style="visibility: visible; width: 100%;" > 
      <source type="video/mp4">
        <source src="vide-remodelacion.mp4" type="video/mp4">
          <source src="vide-remodelacion.mp4" type="video/webm">
            <source src="vide-remodelacion.mp4" type="video/ogg">
     </video>
            <!-- END VIDEO -->
          </div>
        </div>
        <!-- Add Pagination
        <div class="swiper-pagination"></div>
        
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
        -->
      </div>

      <style type="text/css" media="screen">

.text-animate {
  display: flex;
  width: 80%;
  height: 43px;
  color: #fff;
  font-size: 40px;
  line-height: 40px;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  margin: auto;
  overflow: hidden;
}

@media screen and (max-width:650px) {
.text-animate{
    font-size: 25px;
    width: 80%;
    height: 30px;
}

.ul-tanimate li{
    font-size: 16px;
    position: relative;
    top:-3px;
}
}

.ul-tanimate{
  list-style: none;
  padding-left: 1px;
  animation: cambiar 7s infinite;

}

.p-tanimate {
  margin: 0;
  font-size: 50px;
  color: #fff;
  font-family: inherit;
}


@keyframes cambiar {
  
  0%{ margin-top: 0;}
  20%{ margin-top: 0;}
  
  25% {margin-top: -40px;}
  50% {margin-top: -40px;}
  
  55% {margin-top: -80px;}
  80% {margin-top: -80px;}
  
  85% {margin-top: -40px;}
  95% {margin-top: -40px;}
  
  100% {margin-top: 0;}
}     
      </style>

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
</section>

</body>
</html>