<?php

$registrarC = new ObjetosPerC();
$registrarC->registrarObjetosPerdidosC();

$tareasC = new registrarC();
$tareas= $tareasC->mostrarUsuario2C();
?>
<div class="row">
<div class="text-center">
<div class="container">
	<br>
<h4 class="purple-text text-accent-3">Registrar Objetos Perdidos </h4>

<form method="post" action="" id ="forregistrar" class="needs-validation">
<div class="row g-4">
    <div class="col-sm-6">
	<label for="firstName" class="form-label">Chofer</label>
        <select name="socioRO" select class="form-select" aria-label="Default select example">
        <?php foreach($tareas as $tarea): ?>
            <option value=<?=$tarea['idchofer']?> ><span><?=$tarea['nombre']?></span></option>
         <?php endforeach; ?>
        </select>
	</div>
	<div class="col-sm-6">
		<label for="firstName" class="form-label">ObjetoPerdido</label>
		<input class="form-control"type="text" placeholder="Objeto" name="objetoRO" required>
	</div>
    <div class="col-sm-6">
			<label for="firstName" class="form-label">Descripcion del Objeto Perdido</label>
			<textarea id="comment" class="form-control" name="descripcionRO"></textarea></label>
	</div>
	<div class="col-sm-6">
		<label for="firstName" class="form-label">Fecha </label>
		<input class="form-control"type="datetime-local"class="datepicker" placeholder="fecha" name="fechaRO" required>
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

<script>
    $(document).ready(function () {
    $('.datepicker').datepicker();
    });
</script>
</div>



