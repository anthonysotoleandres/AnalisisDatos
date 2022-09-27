<?php
$registrarC = new registrarC();
$registrarC->registrarUsuarioC();

?>
<div class="row">
<div class="text-center">
<div class="container">
<br>
<h4 class="mb-3">Registrar Nuevo Socio</h4>

<form method="post" action="" id ="forregistrar"class="needs-validation">
   <div class="row g-4">
      <div class="col-sm-6">
         <label for="firstName" class="form-label">Nombres</label>
         <input class="form-control" type="text" placeholder="Nombre" aria-label="default input example" name="nombreRU">           
      </div>
      
      <div class="col-sm-6">
         <label for="firstName" class="form-label">Apellidos</label>
         <input class="form-control" type="text" placeholder="Apellido" aria-label="default input example" name="apellidoRU"> 
            
      </div>
      <div class="col-sm-6">
         <label for="firstName" class="form-label">Usuario</label>
         <input class="form-control" type="text" placeholder="Usuario" aria-label="default input example" name="usernameRU">
            
      </div>
      <div class="col-sm-6">
         <label for="firstName" class="form-label">Email</label>
         <input class="form-control" type="email" placeholder="email" aria-label="default input example" name="emailRU">

      </div>
      <div class="col-sm-6">
         <label for="firstName" class="form-label">Constraseña</label>
         <input class="form-control" type="password" placeholder="Password" aria-label="default input example" name="passwordRU">

      </div >
      <div class="col-sm-6">
         <label for="firstName" class="form-label">Confirme la Contraseña</label>
         <input class="form-control" type="password" placeholder="Confirmar Password" aria-label="default input example" name="ConfipasswordRU">

      </div>
      
      <div class="col-sm-6">
      <h5 class="deep-purple-text text-lighten-1">Perfil</h5>
         <select  select class="form-select" aria-label="Default select example" name="perfilRU">
               <option value="" disabled selected>Seleccionar perfil</option>
               <option value="administrador">Administrador</option>
               <option value="socio">Socio</option>
         </select>
      </div>
      <button class=" w-auto m-auto btn btn btn-outline-primary btn-sm  " type="submit" name="action">Registrar
                  </button>
      </div>
      </div>
</form>
</div>
</div>
</div>




