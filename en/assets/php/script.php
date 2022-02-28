<?php
	// ------ FETCHING JSON OBJECT TO A VARIABLE ------
	// $words = file_get_contents("wordsJSON.json");

	// ------ PARSING THE VARIABLE TO AN ARRAY ------
	// ------ DISABLING LOADING OVERLAY ------
	echo "<script>
		var loadingOverlay = document.getElementById('loadingOverlay');
		var words = JSON.parse('".file_get_contents("assets/database/wordsJSON.json")."');
		
		loadingOverlay.classList.add('inactive');
		loadingOverlay.classList.remove('active');
	</script>";
?>