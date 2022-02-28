<!DOCTYPE HTML>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Word Memorizer EN</title>
		<meta name="author" content="Tomasz Kapcia">
		<meta name="company" content="ReCode">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">

		<!-- BOOTSTRAP 4.2 -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

		<!-- CUSTOM STYLES -->
		<link rel="stylesheet" type="text/css" href="assets/css/styles.css">
	</head>

	<body>
		<!-- NAVBAR -->
		<nav class="navbar navbar-light bg-light">
		  	<a class="navbar-brand" href="#">Word Memorizer</a>
		  	<a class="navbar-brand" href="#">by Thomas Kapcia</a>
		</nav>


		<div class="container">

			<!-- MAIN -->
			<div class="main">
				<h1 class="display-1">Word Memorizer</h1>

				<hr>

				<div>
					<div class="roundedInput">
						<input type="number" id="amount" placeholder="Amount of words" min=1>

						<button class="btn btn-success" onclick="pickWords();">Randomize</button>
					</div>					

					<ul class="inactive list-group list-group-flush" id="result"></ul>
				</div>
			</div>


			<!-- SECOND STEP -->
			<div id="nextStep" class="inactive">
				<button class="btn btn-outline-info" onclick="pickRandom();">
					Draw a random word!
				</button>

				<h2 id="randomNum"></h2>

				<div id="checkContainer" class="inactive">
					<div id="checkerBox" class="active">
						<h2>
							What word is it?<br>
							<input type="text" id="wordInput"/>
						</h2>
						
						<button class="btn btn-outline-success" onclick="checkWord();">Check!</button>
					</div>

					<h1 class="display-4" id="resultCheck"></h1>
				</div>
			</div>

		</div>


		<!-- LOADING OVERLAY -->
		<div id="loadingOverlay" class="active">
			<div>
				<h1 class="display-3">Loading...</h1>
				<br>
				<embed src="assets/img/loader.gif">
			</div>
		</div>

		<!-- BOOTSTRAP 4.2 -->
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>

		<!-- SCRIPTS -->
		<?php include("assets/php/script.php"); ?>
		<script src="assets/js/script.js"></script>
	</body>
</html>