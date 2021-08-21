<?php 
class Utils {
public static function delete ($sesion) {
  if (isset($_SESSION[$sesion])) {
     $_SESSION[$sesion] = null;
    unset($_SESSION[$sesion]);
  }
return $sesion;
}

public static function isAdmin(){
  if (!isset($_SESSION['admin'])) {
    header('Location: index.php');
  }  else {
return true;
  }
}
public static function mostrarCategorias () {
  require_once 'model/categorias.php';
  Utils::isAdmin();
  $categoria = new Categoria();
  $categorias = $categoria->getCategorias();
 return $categorias;


}


public static function mostrarProductos () {
  $product = new Producto();
  $products = $product->getAll();
  return $products;
}
}
?>