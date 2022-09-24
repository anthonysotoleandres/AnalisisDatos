<?php
	$adminC = new AdminC();
?>
    <nav class="menu">
	
	<?php if(!$adminC->sesionIniciadaC()): ?>
		<a  href="index.php?ruta=ingreso">Logo</a>
		<!--<a href="index.php?ruta=nuevo_usuario">Registrarce</a></li> -->
		<!--<li><a href="index.php?ruta=recuperar_contraseña">Recuperar Contraseña</a></li> -->
	
	<?php else: ?>
		<a  href="#">Logo</a>
		<a href="index.php?ruta=salir">Salir</a>   
		</nav>
		
			
		<input type="checkbox" id="btn-menu">	
		<div class="container-menu"id="sidebar">
		<div class="cont-menu">
		<nav>
		  	<a href="index.php?ruta=perfil">Perfil</a>
			<a href="index.php?ruta=RegistroSocio">Registrar nuevo Socio</a>
			<a href="index.php?ruta=RegistrarVehiculo">Registrar un Vehiculo</a>
			<a href="index.php?ruta=RegistrarPagos">Pagos</a>
			<a href="index.php?ruta=RegistrarPasaje">Pasaje</a>
			<a href="index.php?ruta=RegistrarObjetosPerdidos">Objetos Perdidos</a>
			
	<?php endif; ?>
	</nav>
		<label for="btn-menu">✖️</label>
	</div>
	
        </div>
      </div>	
