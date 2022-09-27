<?php
	$adminC = new AdminC();
?>

<?php if(!$adminC->sesionIniciadaC()): ?>
		
		<!--<a href="index.php?ruta=nuevo_usuario">Registrarce</a></li> -->
		<!--<li><a href="index.php?ruta=recuperar_contraseña">Recuperar Contraseña</a></li> -->

<?php else:?>

<header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
    <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-6" href="#">Logo</a>
    <div class="navbar-nav">
      <div class="nav-item text-nowrap">
        <a class="nav-link px-3" href="index.php?ruta=salir">Salir</a>
      </div>
    </div>
</header>

<div class="container-fluid">
  <div class="row">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="position-sticky pt-3 sidebar-sticky">
        <ul class="nav flex-column">

          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php?ruta=salir">
              
              Dashboard 
            </a>
          </li>
          <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted text-uppercase">
          <span>Registro</span>
          <a class="link-secondary" href="#" aria-label="Add a new report">
            
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

        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted text-uppercase">
          <span>Reportes</span>
          <a class="link-secondary" href="#" aria-label="Add a new report">
           
          </a>
        </h6>
        <ul class="nav flex-column mb-2">
          <li class="nav-item">
            <a class="nav-link" href="index.php?ruta=ReporteVehiculo">
             
              <i class="bi bi-cart"></i>
              Vehiculos
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
           
              Last quarter
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
            
              Social engagement
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
            
              Year-end sale
            </a>
          </li>
        </ul>
      </div>
    </nav>


  </div>
</div>

	<?php endif; ?>
