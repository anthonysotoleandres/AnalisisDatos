<?php
$adminC = new AdminC();
$resultado = $adminC->IngresoC();

?>
    <style>


body {
  display: flex;
  align-items: center;
  padding-top: 40px;
  padding-bottom: 40px;
  background-color: #f5f5f5;
}

.form-signin {
  max-width: 330px;
  padding: 15px;

  margin: 25%;
 
}

.form-signin .form-floating:focus-within {
  z-index: 2;
}

.form-signin input[type="email"] {
  margin-bottom: -1px;
  border-bottom-right-radius: 0;
  border-bottom-left-radius: 0;
}

.form-signin input[type="password"] {
  margin-bottom: 10px;
  border-top-left-radius: 0;
  border-top-right-radius: 0;
}

    </style>

<body class="text-center">
    
<main class="form-signin ">
  <form method="post" action="">
    <img class="mb-4" src="../assets/brand/bootstrap-logo.svg" alt="" width="72" height="57">
    <h1 class="h3 mb-3 fw-normal">Please sign in</h1>

    <div class="form-floating">
      <input type="text" class="form-control"  name="usuarioI" placeholder="name@example.com">
      <label for="floatingInput">Email address</label>
    </div>
    <div class="form-floating">
      <input type="password" class="form-control" id="floatingPassword" name="claveI" placeholder="Password">
      <label for="floatingPassword">Password</label>
    </div>
	<h1 class="h4 mb-3 fw-normal">Elige el Perfil</h1>
	<select class="form-select" aria-label="Default select example" name="perfilI" >
		<option value="administrador">Administrador</option>
                <option value="socio">Socio</option>
	</select>
    <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
    <p class="mt-5 mb-3 text-muted">&copy; 2017–2022</p>
  </form>
</main>  
  </body>

<?php if (!$resultado):?>
	<script>
		alert("Datos invalidos");
	</script>
<?php endif;?>


