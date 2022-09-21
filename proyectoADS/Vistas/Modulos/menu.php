<?php
	$adminC = new AdminC();
?>
<nav class="light-blue lighten-1" role="navigation">  <!-- modulos/menu.php -->
	<ul>
	<?php if(!$adminC->sesionIniciadaC()): ?>
		<li><a href="index.php?ruta=ingreso">Logo</a></li>
		<!--<a href="index.php?ruta=nuevo_usuario">Registrarce</a></li> -->
		<!--<li><a href="index.php?ruta=recuperar_contraseña">Recuperar Contraseña</a></li> -->
	</ul>
	<?php else: ?>
		<li><a href="#">Logo</a></li>
	<ul class="right">		
		<li><a href="index.php?ruta=perfil">Perfil</a></li>	
		<li><a href="index.php?ruta=RegistroSocio">Registrar nuevo Socio</a></li>
		<li><a href="index.php?ruta=RegistrarVehiculo">Registrar un Vehiculo</a></li>
		<li><a href="index.php?ruta=RegistrarPagos">Pagos</a></li>
		<li><a href="index.php?ruta=RegistrarPasaje">Pasaje</a></li>
		<li><a href="index.php?ruta=RegistrarObjetosPerdidos">Objetos Perdidos</a></li>
		<li><a href="index.php?ruta=salir">Salir</a></li>
	<?php endif; ?>
	</ul>
</nav>