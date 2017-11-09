<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">

		<script type="text/javascript" rel="script" src="scripts.js" async></script>
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>

		<title>JavaScript Challenge</title>
	</head>

	<body>
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="card">
						<div class="card-body">
							<h1>Find & Replace with Regular Expressions</h1>
							<p class="card-text" id="find-replace">
								Linda jersey royal annabelle bannock russet agata blue congo. Flava almond maris piper blue congo cara yukon gold.
								Linda chelina golden wonder red norland alturas russet norkotah. Megachip vitelotte langlade pink eye, vitelotte up to
								date estima blue congo red lasoda sieglinde. Marfona french fries apline ranger russet cabritas. Pike cabritas ranger russet
								bintje nicola. Kennebec adirondack red almond primura german butterball yukon gold golden wonder.
							</p>
							<form action="">
								<div class="row">
									<div class="col">
										<input id="find" type="text" class="form-control" placeholder="Find">
									</div>
								</div>
								<div class="col">
									<input id="replace" type="text" class="form-control" placeholder="Replace">
								</div>
								<div class="col">
									<button type="button" class="btn btn-dark" onclick="replaceWord()">Replace!</button>
								</div>
							</form>
						</div>
					</div>
				</div>

				<div class="col">
					<div class="card">
						<div class="card-body">
							<h1>Keyboard Event</h1>
							<p id="keyboard" class="card-text">
								Maris piper alturas avalanche pike pink fir apple, adirondack red avalanche red norland lady balfour goldrush. Record
								alturas avalanche marfona ranger russet fianna blazer russet. Red lasoda arran victory, cabritas tots blue congo linda ranger
								russet camota vitelotte. Arran victory bintje avalanche golden wonder french fries cielo. Vitelotte bintje red norland apline
								agata, estima pink eye flava cara cielo lady balfour.
							</p>
							<input type="text" class="form-control" placeholder="Type Here!" onkeydown="keyPress(event)">
						</div>
					</div>
				</div>

				<div class="col">
					<div class="card">
						<div class="card-body">
							<p class="card-text">
								Adirondack blue potato bildtstar nicola clavela blanca, annabelle avalanche flava home guard kerr's pink. Nicola tots primura
								sieglinde cara red lasoda bintje. Russet burbank cabritas belle de fontenay irish cobbler kipfler, bamberg record yellow finn
								annabelle ranger russet langlade pike. Rooster megachip bamberg stobrawa irish cobbler clavela blanca, red pontiac kestrel selma
								marquis arran victory red lasoda. Bildtstar king edward pink fir apple record red pontiac.
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>