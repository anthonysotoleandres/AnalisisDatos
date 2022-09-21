<?php
$adminC = new AdminC();
$adminC->redirigirSesionC('ingreso');

$empleadosC = new TareasC();
$empleados= $empleadosC->mostrarTareasPrivateC();
$empleadosC->borrarTareasPrivadasC();

?>
<br>  <!-- Vistas/Modulos/empleados.php -->
<h3 class="purple-text text-accent-3">Tareas Privadas</h3>

<table id="t1" border="1">
	<thead>
		<tr>
			<th class="deep-purple-text text-lighten-1" >Autor</th>
			<th class="deep-purple-text text-lighten-1">Titulo</th>
			<th class="deep-purple-text text-lighten-1">Contenido</th>
			<th class="deep-purple-text text-lighten-1">Registro</th>
			<th class="deep-purple-text text-lighten-1">Vencimiento</th>
			<th class="deep-purple-text text-lighten-1">Prioridad</th>
			<th></th>
			<th></th>
		</tr>
	</thead>

	<tbody>
	<?php foreach($empleados as $empleado): ?>
			<td><?=$empleado['nombre']?></td>
			<td><?=$empleado['titulo']?></td>
			<td><?=$empleado['contenido']?></td>
			<td><?=$empleado['fecha_vencimiento']?></td>
			<td><?=$empleado['fecha_registro']?></td>
			<td><?=$empleado['prioridad']?></td>
			<td>
				<a href='index.php?ruta=editar&titulo=<?=$empleado['titulo']?> class="btn-floating btn-large waves-effect waves-light purple"'>
				<i class="material-icons">edit</i>
				</a>
			</td>
			<td>
				<a href='index.php?ruta=tareasprivate&titulo=<?=$empleado['titulo']?> class="btn-floating btn-large waves-effect waves-light purple"'>
				<i class="material-icons">delete</i>
				</a>
			</td>
			</tr>
	<?php endforeach; ?>

	</tbody>
</table>

