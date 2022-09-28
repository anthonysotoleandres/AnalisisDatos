<?php
$adminC = new AdminC();
$adminC->redirigirSesionC('ingreso');

$empleadosC = new registrarC();
$empleados= $empleadosC->reporteSociosC();


?>
<br>  <!-- Vistas/Modulos/empleados.php -->
<h3 class="text-center">Reporte de Choferes</h3>
<br>
<div class="table-responsive">
<table class="table table-striped table-sm">
	<thead>
		<tr>
			<th scope="col" >Nombre</th>
			<th scope="col">Apellido</th>
            <th scope="col">Usuario</th>
			<th scope="col">Telefono</th>
			<th scope="col">Direccion</th>
			<th scope="col">Edad</th>
			<th scope="col">Genero</th>
			<th scope="col">Email></th>
			
		</tr>
	</thead>
	<tbody>
        
	<?php foreach($empleados as $empleado): ?>
        <tr>
			<td><?=$empleado['nombre']?></td>
			<td><?=$empleado['apellido']?></td>
            <td><?=$empleado['usuario']?></td>
			<td><?=$empleado['telefono']?></td>
			<td><?=$empleado['direccion']?></td>
			<td><?=$empleado['edad']?></td>
			<td><?=$empleado['sexo']?></td>
            <td><?=$empleado['email']?></td>
			<td>
				<a href='index.php?ruta=editar&titulo=<?=$empleado['apellido']?> class="btn-floating btn-large waves-effect waves-light purple"'>
				<i class="material-icons">edit</i>
				</a>
			</td>
			<td>
				<a href='index.php?ruta=tareasprivate&titulo=<?=$empleado['apellido']?> class="btn-floating btn-large waves-effect waves-light purple"'>
				<i class="material-icons">delete</i>
				</a>
			</td>
			</tr>
	<?php endforeach; ?>

	</tbody>
</table>


