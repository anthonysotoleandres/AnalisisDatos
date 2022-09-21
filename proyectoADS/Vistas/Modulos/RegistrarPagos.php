<?php

$registrarC = new pagosC();
$registrarC->registrarpagosC();

$tareasC = new registrarC();
$tareas= $tareasC->mostrarUsuarioC();
?>
<div class="row">
<div class="col s10 push-s1">
<div class="container">
<h4 class="purple-text text-accent-3">Registrar los Pagos </h4>

<form method="post" action="" id ="forregistrar">
    <div>
	<h5 class="deep-purple-text text-lighten-1">Socio</h5>
        <select name="socioRP" class="browser-default blue lighten-4 ">

        <?php foreach($tareas as $tarea): ?>
            <option value=<?=$tarea['idsocio']?> ><span><?=$tarea['nombre']?></span></option>
         <?php endforeach; ?>
        </select>
	</div>
	<div>
		<input type="text" placeholder="Monto" name="montoRP" required>
	</div>
	<div>
		<input type="text"class="datepicker" placeholder="fecha" name="fechaRP" required>
	</div>
	<div>


	<button class="btn waves-effect waves-light" type="submit" name="action">Registrar
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



