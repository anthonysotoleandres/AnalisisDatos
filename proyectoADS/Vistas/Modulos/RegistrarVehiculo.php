<?php

$registrarC = new vehiculoC();
$registrarC->registrarVehiculoC();

$tareasC = new registrarC();
$tareas= $tareasC->mostrarUsuarioC();
?>
<div class="row">
<div class="text-center">
<div class="container">
<br>
<h4 class="purple-text text-accent-3">Registrar Nuevo Vehiculo</h4>

<form method="post" action="" id ="forregistrar" class="needs-validation">
<div class="row g-4">
	<div class="col-sm-6">
		<label for="firstName" class="form-label">Placa</label>
		<input class="form-control" type="text" placeholder="Placa" aria-label="default input example" name="placaRV" required>
	</div>
	<div class="col-sm-6">
		<label for="firstName" class="form-label">Color</label>
		<input class="form-control" type="text" placeholder="Color" name="colorRV" required>
	</div>
	<div class="col-sm-6">
		<label for="firstName" class="form-label">Marca</label>
		<input class="form-control" type="text" placeholder="marca" name="marcaRV" required>
	</div>
	<div class="col-sm-6">
		<label for="firstName" class="form-label">Modelo</label>
		<input class="form-control" type="text" placeholder="modelo" name="modeloRV" required>
	</div>
	<div class="col-sm-6">
		<label for="firstName" class="form-label">Tipo</label>

		<select class="form-select" aria-label="Default select example" name="tipoRV">
               <option value="" disabled selected>Seleccionar Tipo de Automovil</option>
               <option value="taxi">Taxi</option>
               <option value="MiniBan">MiniBan</option>
         </select>
	</div>


   <div class="col-sm-6">
	<h5 class="deep-purple-text text-lighten-1">Nombre del Socio(a)</h5>
        <select name="socioRV" class="form-select" aria-label="Default select example">

        <?php foreach($tareas as $tarea): ?>
            <option value=<?=$tarea['idsocio']?> ><span><?=$tarea['nombre']?></span></option>
         <?php endforeach; ?>
        </select>
	</div>
	<button class=" w-auto m-auto  btn btn-outline-primary btn-sm  " type="submit" name="action">Registrar
            	</button>
	</div>
	</div>
</form>
</div>
</div>
</div>



