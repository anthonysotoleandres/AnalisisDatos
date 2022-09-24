<?php
$adminC = new AdminC();
$adminC->redirigirSesionC('ingreso');

$perfilC = new perfilC();
$perfil=$perfilC->mostrarPerfilC();



?>
<br>  <!-- Vistas/Modulos/empleados.php -->

<h1 class="purple-text text-accent-3">usuario</h1>

<table class="highlight">
	<thead>
		<tr>
			<th class="deep-purple-text text-lighten-1">Nombre</th>
			<th class="deep-purple-text text-lighten-1">Apellido</th>
			<th class="deep-purple-text text-lighten-1">Usuario</th>
			<th class="deep-purple-text text-lighten-1">Perfil:</th>
			<th class="deep-purple-text text-lighten-1">Email</th>
			<th class="deep-purple-text text-lighten-1">Telefono</th>
			<th class="deep-purple-text text-lighten-1">Direccion</th>
			<th class="deep-purple-text text-lighten-1">Edad</th>
			<th class="deep-purple-text text-lighten-1">Genero</th>
			
			<th></th>
			

		</tr>
	</thead>

	<tbody>
	<?php foreach($perfil as $perf): ?>
            <tr>
			<td><?=$perf['nombre']?></td>
			<td><?=$perf['apellido']?></td>
			<td><?=$perf['usuario']?></td>
			<td><?=$perf['perfil']?></td>
			<td><?=$perf['email']?></td>
			<td><?=$perf['telefono']?></td>
			<td><?=$perf['direccion']?></td>
			<td><?=$perf['edad']?></td>
			<td><?=$perf['sexo']?></td>
			
			<td><a href='index.php?ruta=editarperfil&id_usuario=<?=$perf['id_usuario']?>'>
			<button class="btn waves-effect waves-light" type="button" name="action">Editar
  			</button></td>

			</tr>
	<?php endforeach; ?>

	</tbody>
</table>
