<?php
	$adminC = new AdminC();
?>

<?php if(!$adminC->sesionIniciadaC()): ?>
		
		<!--<a href="index.php?ruta=nuevo_usuario">Registrarce</a></li> -->
		<!--<li><a href="index.php?ruta=recuperar_contraseña">Recuperar Contraseña</a></li> -->

<?php else:?>

<header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
    <a class="navbar-brand col-md-3 col-lg-2 me-0 px-5 fs-6" href="index.php?ruta=dashboard">
    <img class="img-fluid" src="Vistas\Modulos\image (1).png" alt="" width="40" height="40">
  </a> 
    <div class="navbar-nav">
      <div class="nav-item text-nowrap">
        <a class="nav-link px-5" href="index.php?ruta=salir">Salir</a>
      </div>
    </div>
</header>

<div class="container-fluid">
  <div class="row">
    <nav id="sidebarMenu" class="col-md-6 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="position-sticky pt-3 sidebar-sticky">
        <ul class="nav flex-column">

          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php?ruta=dashboard">             
              Dashboard 
            </a>
          </li>
          
          <span>Registro</span>
        
            
          </a>
        </h6>
          <li class="nav-item">
            <a class="nav-link" href="index.php?ruta=RegistroSocio">
              
              Registrar Nuevo Socio
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php?ruta=RegistrarVehiculo">
            
              Registrar Vehiculo
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php?ruta=RegistrarPasaje">
             
              Registrar Pasaje
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php?ruta=RegistrarObjetosPerdidos">
              
              Registrar Objetos Perdidos 
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php?ruta=RegistrarPagos">
              
              Registrar Pagos de los Socios
              
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php?ruta=RegistroChoferes">
              
              Registro de Choferes
              
            </a>
          </li>
        </ul>
          <span>Reportes</span>
    
          </a>
        </h6>
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link" href="index.php?ruta=ReporteVehiculo">
             
              <i class="bi bi-cart"></i>
              Vehiculos
            </a>
          </li>
          
          <li class="nav-item">
            <a class="nav-link" href="index.php?ruta=ReportePagos">
           
              Pagos
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="index.php?ruta=ReporteCronograma">

              cronograma
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php?ruta=ReporteChoferes">
            
              Choferes
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="index.php?ruta=ReporteSocios">
            
              Socios
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php?ruta=ReporteAdmin">
              Administrador
            </a>
          </li>
        </ul>
      </div>
    </nav>


  </div>
</div>

	<?php endif; ?>
