<?php
   	include("home.php");
?> 
  <link rel="stylesheet" href="video.css">
<!-- partial:index.partial.html -->
<script src="https://aframe.io/releases/0.6.1/aframe.min.js"></script>
<a href="360.php" class="button-animate" style="cursor: pointer;position:relative;text-decoration:none;z-index: 1000;font-size: 10px;top: 130px;left: 10px">Regresar</a>
<a-scene>
  <a-assets>
    <img id="panorama" src="img/360/sala.JPG" crossorigin />
  </a-assets>
  <a-sky src="#panorama" rotation="0 -90 0"></a-sky>
</a-scene>


<!-- partial -->
 
    <?php 
    include("footer.php");
 	?>
