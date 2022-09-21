<?php
$adminC = new AdminC();
$adminC->redirigirSesionC('ingreso');

$tareasC = new TareasC();
$tareas= $tareasC->mostrarTareasC();

$tareasC->borrarTareasC();
?>

<br> 
<div class="row">
<div class="col s10 push-s1">
<div class="container">
<h2 class="deep-purple-text ">Tareas Publicas</h2>
</div>
<?php foreach($tareas as $tarea): ?>
	<body>
    <div class="container">
        <div class="row">
            <div class="col s12 m12">
                <div class="card blue-grey darken-1">
                    <div class="card-content white-text">
                        <span class="card-title"><?=$tarea['titulo']?></span>
                        <p>
							<strong>Por:</strong><span><?=$tarea['nombre']?></span>
								&nbsp; &nbsp;
							<strong>Fecha:</strong><span><?=$tarea['fecha_registro']?></span>
							<strong>Vence en:</strong><span><?=$tarea['fecha_vencimiento']?></span>
						</p>
						<p class="parrafo-post"><?=$tarea['contenido']?></p>
						<a href="#" onclick="cargarComentario()">Comentarios</a>

							<section class ="contenidoDinamico" id= "contenidoDinamico">
				
							</section>
						<strong>Prioridad:</strong><span><?=$tarea['prioridad']?></span>
                    </div>
                    <div class="card-action">
						<a href='index.php?ruta=editar&titulo=<?=$tarea['titulo']?>'>Editar</a>
                        <a href='index.php?ruta=tareas&titulo=<?=$tarea['titulo']?>'>Borrar</a>
                    </div>
                </div>
            </div>
        </div>

    </div>
</body>
<?php endforeach; ?>
</div>
</div>
<script>
	function cargarElemento(url, elemento){

		var request = new XMLHttpRequest();
		request.open('GET', url, false);
		request.send(null);
		elemento.innerHTML = request.responseText;
					
	}

	function cargarComentario(){
		cargarElemento("Vistas/Modulos/comentar.php", document.getElementById("contenidoDinamico"));
	}
</script>