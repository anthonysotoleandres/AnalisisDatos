<?php

$registrarC = new pasajeC();
$registrarC->registrarpasajeC();

$tareasC = new registrarC();
$tareas= $tareasC->mostrarUsuario1C();
?>
<div class="row">
<div class="col s10 push-s1">
<div class="container">
<h4 class="purple-text text-accent-3">Registrar Pasaje </h4>

<form method="post" action="" id ="forregistrar">
    <div>
	<h5 class="deep-purple-text text-lighten-1">Administrador</h5>
        <select name="socioRP" class="browser-default blue lighten-4 ">

        <?php foreach($tareas as $tarea): ?>
            <option value=<?=$tarea['idadministrador']?> ><span><?=$tarea['nombre']?></span></option>
         <?php endforeach; ?>
        </select>
	</div>
	<div>
		<input type="text" placeholder="Precio de ruta 1" name="precio1RP" required>
	</div>
	<div>
		<input type="text" placeholder="Precio de ruta 2" name="precio2RP" required>
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

</div>



