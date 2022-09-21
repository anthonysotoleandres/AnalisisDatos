<?php
$registrarC = new registrarC();
$registrarC->registrarUsuarioC();

?>
<div class="row">
<div class="col s10 push-s1">
<div class="container">
<h4 class="purple-text text-accent-3">Registrar Nuevo Socio</h4>

<form method="post" action="" id ="forregistrar">
	<div>
		<input type="text" placeholder="Nombre" name="nombreRU" required>
	</div>
	<div>
		<input type="text" placeholder="Apellido" name="apellidoRU" required>
	</div>
	<div>
		<input type="text" placeholder="username" name="usernameRU" required>
	</div>
	<div>
		<input type="email" id="email" placeholder="ejemplo@gmail.com" name="emailRU" required>
	</div>
	<div>
		<input type="password" id="contraseña" placeholder="Password" name="passwordRU" required>
	</div>
	<div>
		<input type="password" placeholder="Confirmar Password" name="ConfipasswordRU" required>
	</div>
	
	<div>
	<h5 class="deep-purple-text text-lighten-1">Perfil</h5>
        <select name="perfilRU" id="perfil" class="browser-default blue lighten-4 ">
            <option value="" disabled selected>Seleccionar perfil</option>
            <option value="administrador">Administrador</option>
            <option value="socio">Socio</option>
        </select>
	</div>
	<button class="btn waves-effect waves-light" type="submit" name="action">Registrar
            	</button>
	</div>
</form>
</div>
</div>
</div>




<script>

$(document).ready(function(){
   $('#forregistrar').validate({
      rules: {
         nombreRU: {
            required: true,
            minlength: 5
         },

         passwordRU: {
            required: true,
            minlength: 5
         },
         ConfipasswordRU: {
            required: true,
            minlength: 5,
            equalTo: "#contraseña"
         },
         email: {
            required: true,
            email: true
         },
         usernameRU: {
            required: true,
            minlength: 5,
         },
      },
      messages: {           
         nombreRU: {
            required: "Por favor ingresa tu nombre completo",
            minlength: "Tu nombre debe ser de no menos de 5 caracteres"
         },
         passwordRU: {
            required: "Por favor ingresa una contraseña",
            minlength: "Tu contraseña debe ser de no menos de 5 caracteres de longitud"
         },
         ConfipasswordRU: {
            required: "Ingresa un password",
            minlength: "Tu contraseña debe ser de no menos de 5 caracteres de longitud",
            equalTo: "Por favor ingresa la misma contraseña de arriba"
         },
         email: "Por favor ingresa un correo válido",
      },
      
   });
});

</script>
