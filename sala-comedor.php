<?php
   	include("home.php");
?> 
  <link rel="stylesheet" href="video.css">
<!-- partial:index.partial.html -->
    <meta name="description" content="360&deg; SALA COMEDOR">
 <script src="https://aframe.io/releases/0.9.2/aframe.min.js"></script>
<a href="360.php" class="button-animate" style="cursor: pointer;position:relative;text-decoration:none;z-index: 1000;font-size: 10px;top: 130px;left: 10px">Regresar</a>

    <a-scene>
      <a-sky src="img/360/cocina3.jpg" rotation="0 -130 0"></a-sky>

      <a-text font="kelsonsans" value="SALA COMEDOR" width="6" position="-1.5 1.50 -1.5"
              rotation="0 15 0"></a-text>
    </a-scene>


<!-- partial -->
 
    <?php 
    include("footer.php");
 	?>
