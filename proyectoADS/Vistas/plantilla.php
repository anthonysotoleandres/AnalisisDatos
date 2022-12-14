<!DOCTYPE html>  <!-- Vistas/plantilla.php-->
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>EmpresaETC</title>
	<!--Import Google Icon Font-->
	
<link href="Vistas\css\bootstrap.min.css" rel="stylesheet">

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css"> 
    <!-- Custom styles for this template -->
    <link href="Vistas\css\dashboard.css" rel="stylesheet">
	

</head>

<body>

	<?php
		include 'Modulos/menu.php';
	?>
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
<div class="container">
	<section>
		<?php
			$rutasC = new RutasC();
			$modulo = $rutasC->procesaRutasC();
			include $modulo;
		?>
	</section>
	</div>
</main>
<script src="C:\xampp\htdocs\MCV\AnalisisDise├▒oSistemas\proyectoADS\Vistas\Modulos\bootstrap.bundle.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script><script src="dashboard.js"></script>

</body>
</html>