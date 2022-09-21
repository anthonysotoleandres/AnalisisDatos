<?php
$adminC = new AdminC();
$resultado = $adminC->IngresoC();

?>

<br> <!-- Vistas/Modulos/ingreso.php -->

<div class="row">
<div class="col s6 push-s3">
<form method="post" action="" >
	<div>
    <h4 class="deep-purple-text ">INGRESAR</h4>
	</div>
	<input type="hidden" value="<?=$idingreasar['idadministrador']?>" name="idusuarioI" required>
	<input id='nombre' type="text" placeholder="Usuario" name="usuarioI" required>	
	<input  id='contraseña' type="password" placeholder="Contraseña" name="claveI" required>perfil
	<select id="perfil" class="browser-default blue lighten-4 " name="perfilI"  requiered>
                
                <option value="administrador">Administrador</option>
                <option value="socio">Socio</option>
    </select>
	<button class="btn waves-effect waves-light" type="submit" name="action">Ingresar
    <i class="material-icons right">send</i>
  	</button>
</form>
<div >

<a href="index.php?ruta=recuperar_contraseña" style="color:#0000FF;">Recuperar Contraseña</a>
</button>

</div>
</div>
</div>



<?php if (!$resultado):?>
	<script>
		alert("Datos invalidos");
	</script>
<?php endif;?>


