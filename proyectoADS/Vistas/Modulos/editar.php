<?php
$adminC = new AdminC();
$adminC->redirigirSesionC('ingreso');

$tareasC = new TareasC();
$tarea = $tareasC->editarTareasC();
$tareasC->actualizarTareasC();
?>
<div class="row">
<div class="col s10 push-s1">
<div class="container">

<h4 class="deep-purple-text ">Editar la Tarea</h4>

    <form  method="post" action=""> 
        <div>
            <h5 class="deep-purple-text text-accent-3">Titulo de la Tarea</h5>   
            <input type="text"placeholder="Titulo de la Tarea" name="tituloR" required>
        </div>
        <div>   
            <h5 class="deep-purple-text text-accent-3">Contenido</h5>
            <textarea class="indigo lighten-4" name="contenidoR" required>
            </textarea>
        </div>
        <div>   
            <h5 class="deep-purple-text text-accent-3">Fecha de registro</h5>
            <input type="date"placeholder="Registro" name="fecha_registroR" required>
        </div>
        <div>   
            <h5 class="deep-purple-text text-accent-3">Fecha de vencimiento</h5>
            <input type="date"placeholder="Fecha de Vencimiento" name="fecha_vencimientoR" required>
        </div>
        <div>   
            <h5 class="deep-purple-text text-accent-3">Elige la Prioridad de la tarea</h5>
            <select class="browser-default blue lighten-4" name="prioridadR" size="1" placeholder="Prioridad" required>
            <option value="Alto">Alto</option>
            <option value="Medio">Medio</option>
            <option value="Bajo">Bajo</option>
            </select>
        </div>
        <h5 class="deep-purple-text text-accent-3">Estado de la tarea</h5>
            <select class="browser-default blue lighten-4 " name="estadoR" size="1" placeholder="Prioridad" required>
                <option value="" disabled selected>Elige una opcion</option>
                <option value="publico">publico</option>
                <option value="privado">privado</option>
            </select>

            <button class="btn waves-effect waves-light" type="submit" name="action">Editar Tarea
            </button>
    </form>
</div>
</div>
</div>
