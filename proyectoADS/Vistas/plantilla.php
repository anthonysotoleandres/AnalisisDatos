<!DOCTYPE html>  <!-- Vistas/plantilla.php-->
<html lang="en">
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.2/assets/css/docs.css" rel="stylesheet">
	<link href="Vistas/css/estilos.css" rel="stylesheet">
    <title>Empresa Cuadros</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
  </head>

<body>
<header class="header">
		<div class="container">
		<div class="btn-menu">
			<label for="btn-menu">☰</label>
		</div>
			<div class="logo">
				<h1>Logotipo</h1>
			</div>

	<?php
		include 'Modulos/menu.php';
	?>

	
	<div class="container1" >
	<section>
		<?php
			$rutasC = new RutasC();
			$modulo = $rutasC->procesaRutasC();
			include $modulo;
		?>
	</section>
	
	</div>
	</header>
	


	
</body>
</html>