<?php
$adminC = new AdminC();
$adminC->redirigirSesionC('ingreso');

$perfilC = new perfilC();
$perfil = $perfilC->editarPerfilC();
$perfilC->actualizarPerfilC();
?>
<br>
<h3 class="deep-purple-text ">EDITAR PERFIL</h3>
<body>
    <div class="container">
        
        <div class="row">
            <form class="col s12">
                <div class="row">
                    <div class="input-field col s6">
						<input type="hidden" value="<?=$perfil['id_usuario']?>" name="id_usuarioE" required>
                        <input type="text" placeholder="Nombre" name="nombreE" value='<?=$perfil['nombre']?>' required>
                        <label for="first_name">Nombre</label>
                    </div>
                    <div class="input-field col s6">
						<input type="text" placeholder="Apellido" name="apellidoE" value='<?=$perfil['apellido']?>' required>
                        <label for="last_name">Apellidos</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
						<input type="text" placeholder="Usuario" name="usernameE" value='<?=$perfil['username']?>' required>
                        <label for="disabled">Usuario</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
						<input type="email" placeholder="Email" name="emailE" value='<?=$perfil['email']?>' required>
                        <label for="email">Email</label>
                    </div>
                </div>
				<div class="row">
                    <div class="input-field col s12">
						<input type="text" placeholder="Estudio en" name="universidadE" value='<?=$perfil['universidad']?>' required>
                        <label for="disabled">Estudios</label>
                    </div>
                </div>
				<div class="row">
                    <div class="input-field col s12">
						<input type="date" placeholder="Fecha de Nacimiento" name="fecha_nacimientoE" value='<?=$perfil['fecha_nacimiento']?>' required>
                        <label for="disabled">Fecha de Nacimiento</label>
                    </div>
                </div>
				<div class="row">
                    <div class="input-field col s12">
					<input type="text" placeholder="Vive en" name="lugar_vivirE" value='<?=$perfil['lugar_vivir']?>' required>
                        <label for="disabled">Donde reside</label>
                    </div>
                </div>
				<div class="row">
                    <div class="input-field col s12">
					<input type="text" placeholder="Ciudad de Origen" name="procedenciaE" value='<?=$perfil['procedencia']?>' required>
                        <label for="disabled">Lugar de Procedencia</label>
                    </div>
                </div>
				<div class="row">
                    <div class="input-field col s12">
					<input type="text" placeholder="Estado Sentimental" name="estado_SE" value='<?=$perfil['estado_S']?>' required>
                        <label for="disabled">Estado Sentimental</label>
                    </div>
                </div>
				<button class="btn waves-effect waves-light" type="submit" name="action">Actualizar
            	</button>
            </form>
        </div>


    </div>

    <!--JavaScript at end of body for optimized loading-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>