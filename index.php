<?php 
require_once 'config/parametros.php';
require_once 'config/db.php';
require_once 'controller/CategoriaController.php';
require_once 'controller/ProductoController.php';
require_once 'controller/PedidoController.php';
require_once 'controller/UsuarioController.php';
require_once 'controller/ErrorController.php';
//url amigable

// index


 

  require_once 'model/categorias.php';

require_once 'helpers/utils.php';
require_once 'views/layout/cabecera.php';
session_start();
 



function show_error () {
  $error = new ErrorController();
  $error->error();
  exit();
}
if (isset($_GET['controller'])) {
  $controller = $_GET['controller'] . 'Controller';
  
}
 elseif (!isset($_GET['controller']) && !isset($_GET['action'])) {
 $controller = controllerdefault;
} 

else {
  show_error();
}

  if ( class_exists($controller)) {
    $object = new $controller();
    
    if (isset($_GET['action']) && method_exists($object, $_GET['action'])) {
      $action = $_GET['action'];
     $object->$action();
   } 
   elseif (!isset($_GET['controller']) && !isset($_GET['action'])) {
    $default = actiondefault; 
    $object->$default();
    
    }   
    else {
          show_error();
        }


 } else {
   show_error();
 }
 
 require_once 'views/layout/footer.php';
?>        

