<?php

$registrarC = new pasajeC();
$registrarC->registrarpasajeC();

$tareasC = new registrarC();
$tareas= $tareasC->mostrarUsuario1C();
?>
<div class="row">
<div class="text-center">
<div class="container">
<br>
<h4 class="purple-text text-accent-3">Registrar Pasaje </h4>

<form method="post" action="" id ="forregistrar">
<div class="row g-4">
	<div class="col-sm-6">
		<label for="firstName" class="form-label">Precio de la ruta 1</label>
		<input class="form-control"type="number" placeholder="Precio de ruta 1" name="precio1RP" required>
	</div>
	<div class="col-sm-6">
		<label for="firstName" class="form-label">Precio de la ruta 2</label>
		<input class="form-control"type="number" placeholder="Precio de ruta 2" name="precio2RP" required>
	</div>
    <div class="center w-auto m-auto ">
	<br>	
	<h5 class="deep-purple-text text-lighten-1">Administrador</h5>
        <select name="socioRP" class="form-select" aria-label="Default select example">

        <?php foreach($tareas as $tarea): ?>
            <option value=<?=$tarea['idadministrador']?> ><span><?=$tarea['nombre']?></span></option>
         <?php endforeach; ?>
        </select>
	</div>


	<div>
	<button class="w-auto m-3 btn btn btn-outline-primary btn-sm " type="submit" name="action">Registrar
            	</button>
	</div>
</form>
</div>
</div>
</div>
<div>

</div>



