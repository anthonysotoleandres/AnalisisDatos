<?php
$recuperarContraC = new recuperarC();
$recuperarContraC->recuperarContraseñaC();
?>
<div class="row">
<div class="col s10 push-s1">
<div class="container">
<body>
<!--<button class="waves-effect waves-light btn modal-trigger" data-target="modal1">Haga click para recuperar contraseña</button> -->

   <!-- <div id="modal1" class="modal"> -->
    <div class="modal-content">
    <form  method="post" action="">
        <div>
        <h4 class="deep-purple-text text-lighten-1">Ingresa tu correo electronico</h4> 
            <input type="email" id="email" placeholder="ejemplo@gmail.com" name="emailRC" required>
        </div>
        <select name="preguntaRC" id="pregunta" class="browser-default blue lighten-4 ">
                <option value="">Seleccionar Pregunta secreta</option>
                <option value="primera_mascota">¿Como se llamaba tu primera mascota?</option>
                <option value="estudios">¿Donde fue que estudiastes en kinder?</option>
                <option value="color_favorito">¿Cual es tu color favorito?</option>
                <option value="sueño_verdadero">¿Cual es tu verdadero sueño?</option>
            </select>
            <div>
                <input type="text" placeholder="Respuesta" name="respuestaRC" required>
            </div>
            <div>
            <h6 class="deep-purple-text text-lighten-1">Nueva Contraseña</h6> 
                <input type="password" id="contraseña" placeholder="NewPassword" name="passwordRC" required>
            </div>
            <div>
            <h6 class="deep-purple-text text-lighten-1">Confirma tu contraseña</h6> 
                <input type="password" placeholder="Confirmar Password" name="ConfipasswordRC" required>
            </div>

            <div>
            <button class="btn waves-effect waves-light" type="submit" name="action">Enviar Solicitud
            	</button>
    </form>
	</div>

  <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/js/materialize.min.js"></script>
</body>

<script>
    $(document).ready(function(){
    // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
    $('.modal-trigger').leanModal();
  });
</script>


 