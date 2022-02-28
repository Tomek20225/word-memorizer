<!DOCTYPE HTML>
<html lang="pl">
	<head>
		<meta charset="UTF-8">
		<title>Word Memorizer</title>
		<meta name="author" content="Tomasz Kapcia">
		<meta name="company" content="ReCode">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">

		<!-- BOOTSTRAP 4.2 -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

		<!-- CUSTOM STYLES -->
		<style type="text/css">
			body {
				overflow: hidden;
			}
			.container {
				margin-top: 20vh;
			}
			.row {
				width: 100%;
			}
			.btn {
				width: 80%;
				border-radius: 0px;
				background-color: #17a2b8;
				color: white !important;
				font-size: 4rem;
			}
			.btn:hover {
				color: white !important;
				background-color: blue;
			}
			@media (max-width: 767px) {
				.spacing {
					margin-top: 1rem;
				}
			}
			@media (max-width: 479px) {
				.container {
					margin-left: 1rem;
				}
				.display-1 {
				    font-size: 4rem !important;
				}
				.btn {
					font-size: 2.5rem;
				}
			}
		</style>
	</head>

	<body>
		<div class="container">
			<div class="row">
				<div class="col col-12 text-center">
					<h1 class="display-1">Word Memorizer</h1>
				</div>
			</div>

			<div class="row" style="margin-top: 2rem;">
				<div class="col col-md-2">
				</div>

				<div class="col col-12 col-md-4 text-center">
					<a href="pl">
						<button class="btn">
							PL
						</button>
					</a>
				</div>

				<div class="col col-12 col-md-4 text-center spacing">
					<a href="en">
						<button class="btn">
							EN
						</button>
					</a>
				</div>

				<div class="col col-md-2">
				</div>
			</div>
		</div>

		<!-- BOOTSTRAP 4.2 -->
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
	</body>
</html>