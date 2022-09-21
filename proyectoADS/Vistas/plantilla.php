<!DOCTYPE html>  <!-- Vistas/plantilla.php-->
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>EmpresaETC</title>
	<!--Import Google Icon Font-->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
	
      <!--Import materialize.css-->
	<link href="parallax-template/css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="parallax-templatecss/style.css" type="text/css" rel="stylesheet" media="screen,projection"/> 

      <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<script src='http://code.jquery.com/jquery-3.2.1.min.js'></script>
</head>

<body>

	<?php
		include 'Modulos/menu.php';
	?>
	<div class="container">
	<section>
		<?php
			$rutasC = new RutasC();
			$modulo = $rutasC->procesaRutasC();
			include $modulo;
		?>
	</section>
	</div>
	<script type="text/javascript" src="js/materialize.min.js"></script>



	<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/js/materialize.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

   <script src="Vistas/Modulos/password.js"></script>
   <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>
</html>