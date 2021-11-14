<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<link rel="icon" type="image/png" href="public/img/favicon.png">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Agenda de Contactos</title>
	<?php require_once "dependencias.php"; ?>
</head>

<body>
	<div class="container">
		<?php require_once "menu.php"; ?>
		<div class="jumbotron">
			<h1 class="display-4">Agenda de Contactos</h1>

			<div class="row">
				<div class="col-sm-6">
					<div class="card">
						<div class="card-body">
							<img src="public/img/golden.jpg" width="350" class="img-fluid" alt="Responsive image">
						</div>
					</div>
				</div>
				<div class="col-sm-6">
					<div class="card">
						<div class="card-body">
							<table class="table table-hover">
								<tr>
									<th>
										Fabian Banegas
									</th>
								</tr>
							</table>
						</div>
					</div>
				</div>
			</div>

			<hr class="my-4">
			<p>
				Agenda de Contactos made by FabiDev
			</p>
		</div>

	</div>
</body>

</html>