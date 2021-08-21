<?php
class UsuarioController {
  public function message () {
   echo 'controller de usuario';
  }


  public function save () {
   if (isset($_POST)) {
     require_once 'model/usuario.php';
     $usuario = new Usuario();
     $usuario->setNombre($_POST['nombre']);
     $usuario->setApellido($_POST['apellido']);
     $usuario->setContraseña($_POST['contraseña']);
     $usuario->setEmail($_POST['email']);
     $query = $usuario->query();
     
     if ($query) {
       $_SESSION['register'] = 'completed';
     } else {
      $_SESSION['register'] = 'failed';
     }
   } else {
      $_SESSION['register'] = 'failed';
   }
   //var_dump($_SESSION['register']);
   //die();
   header('location: index.php?controller=usuario&action=contact');
  }


  public function login () {
    require_once 'model/usuario.php';
    $users = new Usuario();
    $password = $_POST['contraseña'];
    $email = $_POST['email'];
    $identity = $users->loginModel($email, $password);
  
    if ($identity && is_object($identity)) {
        $_SESSION['identity'] = $identity;
       $_SESSION['identity-aprobed'] = 'sesion iniciada';
      if ($identity->tipo == 'admin') {
        $_SESSION['admin'] = true;
      }
    } else {
      $_SESSION['identity-aprobed'] = 'sesion con error';
    }
  

    header('Location: index.php?controller=usuario&action=contact');
  }


//solo para views
  public function Contact () {
    require_once 'views/layout/contacto.php';
  }

  public function logout(){
  if (isset($_SESSION['identity'])) {
    unset($_SESSION['identity']);
    $_SESSION['identity-delete'] = true;
  }
  if (isset($_SESSION['admin'])) {
    unset($_SESSION['admin']);
  }
  header('Location: index.php?controller=usuario&action=contact');
}



//solo para views
public function profile () {
    require_once 'views/layout/profile.php';
  }

}
?>