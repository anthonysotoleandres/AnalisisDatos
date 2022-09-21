<?php

$registrarC = new ObjetosPerC();
$registrarC->registrarObjetosPerdidosC();

$tareasC = new registrarC();
$tareas= $tareasC->mostrarUsuario2C();
?>
<div class="row">
<div class="col s10 push-s1">
<div class="container">
<h4 class="purple-text text-accent-3">Registrar Objetos Perdidos </h4>

<form method="post" action="" id ="forregistrar">
    <div>
	<h5 class="deep-purple-text text-lighten-1">Chofer</h5>
        <select name="socioRO" class="browser-default blue lighten-4 ">

        <?php foreach($tareas as $tarea): ?>
            <option value=<?=$tarea['idchofer']?> ><span><?=$tarea['nombre']?></span></option>
         <?php endforeach; ?>
        </select>
	</div>
	<div>
        <h5 class="deep-purple-text text-lighten-1">Objeto Perdido</h5>
		<input type="text" placeholder="Objeto" name="objetoRO" required>
	</div>
    <div class="form-group">
			<label>Comentario</label>
			<textarea id="comment" class="form-control" name="descripcionRO"></textarea></label>
	</div>
	<div>
		<input type="text"class="datepicker" placeholder="fecha" name="fechaRO" required>
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



