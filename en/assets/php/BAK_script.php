<?php
	// ------ BACKUP SCRIPT ------
	$wordsStr = file_get_contents("../database/words.txt");
	$wordsArr = explode(PHP_EOL, $wordsStr);

	$wordsJS = json_encode($wordsArr);

	$fopen = fopen("../database/wordsJSON.json", 'w');
	fwrite($fopen, $wordsJS);
	fclose($fopen);

	// $wordsFromJS = json_decode("wordsJSON.json");
?>