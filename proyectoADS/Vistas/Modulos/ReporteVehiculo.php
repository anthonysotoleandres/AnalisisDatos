<?php
$adminC = new AdminC();
$adminC->redirigirSesionC('ingreso');

$empleadosC = new vehiculoC();
$empleados= $empleadosC->mostrarVehiculoC();


?>
<br>  <!-- Vistas/Modulos/empleados.php -->
<h3 class="purple-text text-accent-3">Reporte de Vehiculos</h3>

<div class="table-responsive">
<table class="table table-striped table-sm">
	<thead>
		<tr>
			<th scope="col" >Placa</th>
			<th scope="col">Color</th>
			<th scope="col">Marca</th>
			<th scope="col">Modelo</th>
			<th scope="col">Tipo de Vehiculo</th>
			<th scope="col">Propietario</th>
			<th></th>
			<th></th>
		</tr>
	</thead>
	<tbody>
        
	<?php foreach($empleados as $empleado): ?>
        <tr>
			<td><?=$empleado['placa']?></td>
			<td><?=$empleado['color']?></td>
			<td><?=$empleado['marca']?></td>
			<td><?=$empleado['modelo']?></td>
			<td><?=$empleado['tipo_vehiculo']?></td>
			<td><?=$empleado['nombre']?></td>
			<td>
				<a href='index.php?ruta=editar&titulo=<?=$empleado['placa']?> class="btn-floating btn-large waves-effect waves-light purple"'>
				<i class="material-icons">edit</i>
				</a>
			</td>
			<td>
				<a href='index.php?ruta=tareasprivate&titulo=<?=$empleado['placa']?> class="btn-floating btn-large waves-effect waves-light purple"'>
				<i class="material-icons">delete</i>
				</a>
			</td>
			</tr>
	<?php endforeach; ?>

	</tbody>
</table>


