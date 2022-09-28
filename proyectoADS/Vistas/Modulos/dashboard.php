<?php
$carroC = new vehiculoC();
$carro= $carroC->mostrarNumeroVehiculoC();

$choferC = new registrarC();
$chofer= $choferC->mostrarNumeroChoferC();
$socio= $choferC->mostrarNumeroSociosC();

$admi= $choferC->mostrarNumeroAdminC();

?>

	<br>
<br>
	<body>
		
	<div class="container principal">
		<div class="row">
			<div class="col-lg-12 text-center">
	            <div class="row">
					         <!--tarjeta 1-->
							<div class="col-lg-4 col-md-12 mb-4">
								<div class="card-section border rounded p-3">
									<div class="card-header-first rounded pb-5">
									
										<h2 class="card-header-title text-white pt-3"><?php foreach($carro as $empleado): ?>
												<?=$empleado['numero']?>
												<?php endforeach; ?> Vehiculos	
										</h2>
									</div>
								</div>
	                		</div>
					         <!--tarjeta 1-->
							 <div class="col-lg-4 col-md-12 mb-4">
								<div class="card-section border rounded p-3">
									<div class="card-header-first rounded pb-5">
										<h2 class="card-header-title text-white pt-3"><?php foreach($chofer as $empleado): ?>
												<?=$empleado['numero']?>
												<?php endforeach; ?> Choferes
											</h2>
									</div>
								</div>
	                		</div>
					         <!--tarjeta 1-->
							 <div class="col-lg-4 col-md-12 mb-4">
								<div class="card-section border rounded p-3">
									<div class="card-header-first rounded pb-5">
										<h2 class="card-header-title text-white pt-3"><?php foreach($socio as $empleado): ?>
												<?=$empleado['numero']?>
												<?php endforeach; ?> Socios
											</h2>
									</div>
								</div>
	                		</div>
							
					         <!--tarjeta 1-->
							 <div class="col-lg-4 col-md-12 mb-4">
								<div class="card-section border rounded p-3">
									<div class="card-header-first rounded pb-5">
										<h2 class="card-header-title text-white pt-3"><?php foreach($admi as $empleado): ?>
												<?=$empleado['numero']?>
												<?php endforeach; ?> Administradores
											</h2>
									</div>
								</div>
	                		</div>	
	</div>
	</div>
	</div>
	</div>
					
</body>

<style>
	/*tarjeta 1*/
.card-header-first{

    height: 120px;
	background: linear-gradient(-90deg, #BF019F, #F28A57); 
	box-shadow:1px 5px 15px #a2a2a2;
}
	</style>

