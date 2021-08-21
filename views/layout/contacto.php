<?php 
      require_once 'config/parametros.php';
      require_once 'helpers/utils.php';

if(isset($_SESSION['register']) && $_SESSION['register'] == 'completed'){
echo '<div class="register"><h2 class="completed">Registrado completamente.</h2></div>';

} 

elseif (isset($_SESSION['register']) && $_SESSION['register'] == 'failed') {
  echo '<div class="register"><h2 class="failed">Problemas al registrarse, por favor revise sus datos.</h2></div>';
  var_dump($_SESSION['identity-aprobed']);
 
}

elseif (isset($_SESSION['identity-aprobed']) && $_SESSION['identity-aprobed'] == 'sesion iniciada') {
  echo '<div class="register"><h2 class="completed">Se ha ingresado correctamente.</h2></div>';
}


elseif (isset($_SESSION['identity-aprobed']) && $_SESSION['identity-aprobed'] == 'sesion con error') {
  echo '<div class="register"><h2 class="failed">Sesión error</h2></div>';
}

Utils::delete('register');

Utils::delete('identity-aprobed');
?>
  <div class="form-container">
  <form action="index.php?controller=usuario&action=save" class="form" method="POST">
    <h2 class="h2-form">Crear una cuenta</h2>
    <label class="label" for="nombre">Nombre</label>
    <input class="input" type="text" name="nombre" placeholder="Ingresa tu nombre">


<label class="label" for="">Apellido</label>
    <input class="input" type="text" name="apellido" placeholder="Ingresa tu apellido">

    <br>
    <label class="label" for="contraseña">Contraseña</label>
    <input class="input" type="password" name="contraseña" placeholder="Ingresa tu contraseña">


      <br>
    <label class="label" for="email">Email</label>
    <input class="input" type="email" name="email" placeholder="Ingresa tu correo electrónico">

<br>
    <input class="input submit" type="submit" value="Enviar">
  </form>
  <form class="form" action="index.php?controller=Usuario&action=login" method="POST">
    <h2 class="h2-form">Ya tengo una cuenta</h2>
    <label class="label" for="email">Email</label>
  <input type="text" class="input" name="email" placeholder="Ingresa tu correo electrónico">
  <br>
  <label class="label" for="password">Contraseña</label>
  <input type="password"class="input" name="contraseña" placeholder="Ingresa tu contraseña">
  <br>
  <input type="submit"class="input">
</form>
  </div>
 
  