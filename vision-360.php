<?php
   	include("../home.php");
?> 
<!-- partial:index.partial.html -->
<script src="https://aframe.io/releases/0.6.1/aframe.min.js"></script>
<a-scene>
  <a-assets>
    <img id="panorama" src="img/wetransfer-203320/5.png" crossorigin />
  </a-assets>
  <a-sky src="#panorama" rotation="0 -90 0"></a-sky>
</a-scene>
<!-- partial -->
 
    <?php 
    include("footer.php");
 	?>
