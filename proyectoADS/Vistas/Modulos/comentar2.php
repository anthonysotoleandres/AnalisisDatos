
<!-- falta implementation -->


<?php
$adminC = new AdminC();
$adminC->redirigirSesionC('ingreso');


$tareasC = new TareasC();
$tareasC->agregarComentariosC();
?>

<form  method="post" action="comentar2.php">
        <div>
            <h4>Comentarios</h4>
            <textarea name="comentarioC" placeholder="Contenido" cols="53" rows="4" wrap="off" required>
		    </textarea>  
        </div>
			<input type="submit" value="Comentar">
</form>




