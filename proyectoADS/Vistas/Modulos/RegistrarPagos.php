<?php

$registrarC = new pagosC();
$registrarC->registrarpagosC();

$tareasC = new registrarC();
$tareas= $tareasC->mostrarUsuarioC();
?>
<div class="row">
<div class="text-center">
<div class="container">
	<br>
<h4 class="purple-text text-accent-3">Registrar los Pagos de los Socios </h4>

<form method="post" action="" id ="forregistrar" class="needs-validation">
<div class="row g-4">
    <div class="col-sm-6">
		<label for="firstName" class="form-label">Socios</label>
        <select name="socioRP" select class="form-select" aria-label="Default select example">

        <?php foreach($tareas as $tarea): ?>
            <option value=<?=$tarea['idsocio']?> ><span><?=$tarea['nombre']?></span></option>
         <?php endforeach; ?>
        </select>
	</div>
	<div class="col-sm-6">
		<label for="firstName" class="form-label">Monto a Cancelar</label>
		<input  class="form-control"type="number" placeholder="S/. Soles" name="montoRP" required>
	</div>
	<div class="col-sm-6">
		<label for="firstName" class="form-label">Fecha</label>
			<?php
				date_default_timezone_set("America/Lima"); // fecha horarioa
				$hoy = date("dMY", time()); //sacando la fecha
			?>
		<input  class="form-control"type="text" value=<?=$hoy?> name="fechaRP" required>
	</div>
	<div>


	<button class="w-auto m-3 btn btn btn-outline-primary btn-sm " type="submit" name="action">Registrar
            	</button>
	</div>
	</div>
</form>
</div>
</div>
</div>
<div>

<script>
    $(document).ready(function () {
    $('.datepicker').datepicker();
    });
</script>
</div>



