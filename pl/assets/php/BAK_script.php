<?php
	// ------ BACKUP SCRIPT ------
	$wordsStr = file_get_contents("slowa.txt");
	$wordsArr = explode(PHP_EOL, $wordsStr);

	$wordsJS = json_encode($wordsArr);

	$fopen = fopen("slowaJSON.json", 'w');
	fwrite($fopen, $wordsJS);
	fclose($fopen);

	$wordsFromJS = json_decode("slowaJSON.json");
?>