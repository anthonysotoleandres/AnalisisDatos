<?php

$registrarC = new vehiculoC();
$registrarC->registrarVehiculoC();

$tareasC = new registrarC();
$tareas= $tareasC->mostrarUsuarioC();
?>
<div class="row">
<div class="col s10 push-s1">
<div class="container">
<h4 class="purple-text text-accent-3">Registrar Nuevo Vehiculo</h4>

<form method="post" action="" id ="forregistrar">
	<div>
		<input type="text" placeholder="Placa" name="placaRV" required>
	</div>
	<div>
		<input type="text" placeholder="Color" name="colorRV" required>
	</div>
	<div>
		<input type="text" placeholder="marca" name="marcaRV" required>
	</div>
	<div>
		<input type="text" placeholder="modelo" name="modeloRV" required>
	</div>
	<div>
		<input type="text" placeholder="tipo" name="tipoRV" required>
	</div>
   <div>
	<h5 class="deep-purple-text text-lighten-1">Nombre del Socio(a)</h5>
        <select name="socioRV" class="browser-default blue lighten-4 ">

        <?php foreach($tareas as $tarea): ?>
            <option value=<?=$tarea['idsocio']?> ><span><?=$tarea['nombre']?></span></option>
         <?php endforeach; ?>
        </select>
	</div>
	<button class="btn waves-effect waves-light" type="submit" name="action">Registrar
            	</button>
	</div>
</form>
</div>
</div>
</div>



