<?php
$registrarC = new registrarC();
$registrarC->registrarChoferC();

?>
<div class="row">
<div class="text-center">
<div class="container">
<br>
<h4 class="mb-3">Registro de Chofer</h4>

<form method="post" action="" id ="forregistrar"class="needs-validation">
   <div class="row g-3">
      <div class="col-sm-6">
         <label for="firstName" class="form-label">Nombres</label>
         <input class="form-control" type="text" placeholder="Nombre" aria-label="default input example" name="nombreRC">           
      </div>
      
      <div class="col-sm-6">
         <label for="firstName" class="form-label">Apellidos</label>
         <input class="form-control" type="text" placeholder="Apellido" aria-label="default input example" name="apellidoRC"> 
            
      </div>
      <div class="col-sm-6">
         <label for="firstName" class="form-label">Telefono</label>
         <input class="form-control" type="number" placeholder="971568331" aria-label="default input example" name="telefonoRC">
            
      </div>
      <div class="col-sm-6">
         <label for="firstName" class="form-label">Direccion</label>
         <input class="form-control" type="text" placeholder="JR. ejemplo" aria-label="default input example" name="direccionRC">

      </div>
      <div class="col-sm-6">
         <label for="firstName" class="form-label">Edad</label>
         <input class="form-control" type="number" placeholder="20" aria-label="default input example" name="edadRC">

      </div >
      <div class="col-sm-6">
         <label for="firstName" class="form-label">Genero</label>
         <select class="form-select" aria-label="Default select example" name="sexoRC">
               <option value="hombre">Masculino</option>
               <option value="mujer">Femenino</option>
         </select>

      </div>
      <div class="col-sm-6">
         <label for="firstName" class="form-label">Email</label>
         <input class="form-control" type="email" placeholder="email" aria-label="default input example" name="emailRC">

      </div>
      <div class="col-sm-6">
         <label for="firstName" class="form-label">Licencia</label>
         <input class="form-control" type="text" placeholder="licencia" aria-label="default input example" name="licenciaRC">

      </div>
      <div>
      <button class=" w-auto m-auto btn btn btn-outline-primary btn-sm  " type="submit" name="action">Registrar
                  </button>
                
      </div>
      </div>
</form>
</div>
</div>
</div>


