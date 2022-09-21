<?php
$adminC = new AdminC();
$adminC->redirigirSesionC('ingreso');

$perfilC = new perfilC();
$perfil=$perfilC->mostrarPerfilC();

?>
<br>  <!-- Vistas/Modulos/empleados.php -->

<h1 class="purple-text text-accent-3">Perfil</h1>

<table class="highlight">
	<thead>
		<tr>
			<th class="deep-purple-text text-lighten-1">Nombre</th>
			<th class="deep-purple-text text-lighten-1">Apellido</th>
			<th class="deep-purple-text text-lighten-1">Usuario</th>
			<th class="deep-purple-text text-lighten-1">Estudio en:</th>
			<th class="deep-purple-text text-lighten-1">Email</th>
			<th class="deep-purple-text text-lighten-1">Nacimiento</th>
			<th class="deep-purple-text text-lighten-1">Vive en</th>
			<th class="deep-purple-text text-lighten-1">Ciudad de Origen</th>
			<th class="deep-purple-text text-lighten-1">Situacion Sentimental</th>
			<th></th>
			

		</tr>
	</thead>

	<tbody>
	<?php foreach($perfil as $perf): ?>
            <tr>
			<td><?=$perf['nombre']?></td>
			<td><?=$perf['apellido']?></td>
			<td><?=$perf['username']?></td>
            <td><?=$perf['universidad']?></td>
			<td><?=$perf['email']?></td>
			<td><?=$perf['fecha_nacimiento']?></td>
			<td><?=$perf['lugar_vivir']?></td>
			<td><?=$perf['procedencia']?></td>
			<td><?=$perf['estado_S']?></td>
			<td><a href='index.php?ruta=editarperfil&id_usuario=<?=$perf['id_usuario']?>'>
			<button class="btn waves-effect waves-light" type="button" name="action">Editar
  			</button></td>

			</tr>
	<?php endforeach; ?>

	</tbody>
</table>
