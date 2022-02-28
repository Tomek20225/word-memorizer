<?php
	// ------ FETCHING JSON OBJECT TO A VARIABLE ------
	// $words = file_get_contents("slowaJSON.json");

	// ------ PARSING THE VARIABLE TO AN ARRAY ------
	// ------ DISABLING LOADING OVERLAY ------
	echo "<script>
		var loadingOverlay = document.getElementById('loadingOverlay');
		var words = JSON.parse('".file_get_contents("assets/database/slowaJSON.json")."');
		
		loadingOverlay.classList.add('inactive');
		loadingOverlay.classList.remove('active');
	</script>";
?>