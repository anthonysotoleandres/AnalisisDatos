<?php
$adminC = new AdminC();
$adminC->redirigirSesionC('ingreso');

$empleadosC = new pagosC();
$empleados= $empleadosC->mostrarPagosC();


?>
<br>  <!-- Vistas/Modulos/empleados.php -->
<h3 class="text-center">Reporte de Pagos</h3>
<br>
<div class="table-responsive">
<table class="table table-striped table-sm">
	<thead>
		<tr>
			<th scope="col" >Monto</th>
			<th scope="col">Fecha de Pago</th>
			<th scope="col">Socio</th>
			<th></th>
			<th></th>
		</tr>
	</thead>
	<tbody>
        
	<?php foreach($empleados as $empleado): ?>
        <tr>
			<td><?=$empleado['monto']?></td>
			<td><?=$empleado['fecha_pago']?></td>
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


