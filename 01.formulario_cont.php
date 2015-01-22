<!DOCTYPE html>
<html lang="es">
	<head>
		<title>Formulario de contacto</title>
		<meta charset="UTF-8" />
		<link rel="stylesheet" href="http://bootswatch.com/cyborg/bootstrap.min.css"/>
	</head>

	<body class="col-md-6">
		<form class="form-horizontal" method="POST" action="<?php $_SERVER['PHP_SELF'];?>">
		  <fieldset>
			<legend>Formulario de contacto</legend>
				<div class="form-group">
				  <label for="nombre" class="col-lg-2 control-label">Nombre</label>
				  <div class="col-lg-10">
					<input class="form-control" name="nombre" placeholder="Introduce tu nombre" type="text">
				  </div>
				</div>
				<div class="form-group">
				  <label for="email" class="col-lg-2 control-label">Email</label>
				  <div class="col-lg-10">
					<input class="form-control" name="email" placeholder="Email" type="email">
				  </div>
				</div>
				<div class="form-group">
				  <label for="asunto" class="col-lg-2 control-label">Asunto</label>
				  <div class="col-lg-10">
					<input class="form-control" name="asunto" type="text">
				  </div>
				</div>
				<div class="form-group">
				  <label for="textArea" class="col-lg-2 control-label">Textarea</label>
				  <div class="col-lg-10">
					<textarea class="form-control" rows="3" name="textarea"></textarea>
				  </div>
				</div>
			<div class="form-group">
			  <div class="col-lg-10 col-lg-offset-2">
				<button class="btn btn-default">Cancelar</button>
				<button type="submit" class="btn btn-primary">Enviar</button>
			  </div>
			</div>
		  </fieldset>
		</form>
		<?php
			
				if(isset($_POST["nombre"]) && isset($_POST["email"]) && isset($_POST["asunto"]) && isset($_POST["textarea"])) {
					$nombre=$_POST["nombre"];
					$email=$_POST["email"];
					$asunto=$_POST["asunto"];
					$texto=$_POST["textarea"];
					$para="veronicamarugal@gmail.com";
					$mensaje="Nombre: $nombre Email: $email Mensaje: $texto";
					
					mail($para, $asunto, $mensaje);
				}
				else{
					echo "Faltan campos por rellenar";
				}
		?>
	</body>
</html>
