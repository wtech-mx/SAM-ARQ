   <?php
	if(isset($_POST['formSubmit'])) {
		$serviciess = $_POST['services'];
		
		if(isset($serviciess)) {
						$nCountries = count($serviciess);
			echo("<p>Seleccionaste:");

			for($i=0; $i < $nCountries; $i++){
				echo($serviciess[$i]);
				
				header("location: {$serviciess[$i]}.php");
				
				
			}
			echo("</p>");
		}

		else{
			echo("<p></p>\n");				
		}

}
?>  