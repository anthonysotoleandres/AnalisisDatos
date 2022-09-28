<?php
$adminC = new AdminC();
$adminC->redirigirSesionC('ingreso');

$empleadosC = new registrarC();
$empleados= $empleadosC->mostrarChoferC();

$segundo= $empleadosC->mostrarChofer1C();
?>
<br>  <!-- Vistas/Modulos/empleados.php -->
<h3 class="text-center">Reporte del Cronograma</h3>
<br>
<br>


<div class="container text-center">
<div class="row align-items-start">
    <div class="col">
    <h5 class="text-center">Ruta 1</h5>
    <table class="table table-striped table">
        <thead>
            <tr>
                <th scope="col-sm-6" >Orden de Salida</th>
                <th scope="col-sm-6">Nombre</th>
                <th scope="col-sm-6">Apellido</th>
            </tr>
        </thead>
        <tbody>
            
        <?php foreach($empleados as $empleado): ?>
            <tr>
                <td><?=$empleado['Orden']?></td>
                <td><?=$empleado['nombre']?></td>
                <td><?=$empleado['apellido']?></td>
                
                </tr>
        <?php endforeach; ?>

        </tbody>
    </table>
    <?php
	    date_default_timezone_set("America/Lima"); // fecha horarioa
		$hoy = date("dMY", time()); //sacando la fecha
	?>
        <div >
            <p class="h6">Fecha: <?=$hoy?></p>
        </div>
    </div>
    <div class="col">
    <h5 class="text-center">Ruta 2</h5>
        <table class="table table-striped table">
            <thead>
                <tr>
                    <th scope="col-sm-6" >Orden de Salida</th>
                    <th scope="col-sm-6">Nombre</th>
                    <th scope="col-sm-6">Apellido</th>
                </tr>
            </thead>
            <tbody>
                
            <?php foreach($segundo as $segun): ?>
                <tr>
                    <td><?=$segun['Orden']?></td>
                    <td><?=$segun['nombre']?></td>
                    <td><?=$segun['apellido']?></td>
                    
                    </tr>
            <?php endforeach; ?>

            </tbody>
        </table>
        <?php
	    date_default_timezone_set("America/Lima"); // fecha horarioa
		$hoy = date("dMY", time()); //sacando la fecha
	    ?>
        <div >
            <p class="h6">Fecha: <?=$hoy?></p>
        </div>
    </div>
    </div>


</div>  



  


