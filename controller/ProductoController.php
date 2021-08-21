<?php
 require_once 'model/producto.php';
class ProductoController {
  public function index () {
    require_once 'views/productos/index.php';
  }

  public function main () {
    require_once 'views/layout/main.php';
  }

  public function manejador () {
    $product = new Producto();
    $productos = $product->getAll();
    
    require_once 'views/productos/manage.php';
  }

  public function create () {
    require_once 'views/productos/crear.php';
  }
  
  
  public function save () {
    if (isset($_POST)) {
      $category_id = $_POST['categoria_id'];
      $name = $_POST['nombre'];
      $description = $_POST['descripcion'];
      $stock = $_POST['stock'];
      $cost = $_POST['precio'];
      $ofert = $_POST['oferta'];
      
      
  }

  $producto = new Producto();
  $producto->setCategoriaId($category_id);
  $producto->setNombre($name);
  $producto->setdescripcion($description);
  $producto->setStock($stock);
  $producto->setPrecio($cost);
  $producto->setOferta($ofert);
  


  $archivo = $_FILES["imagen"];
  var_dump($archivo);
  
  $nombre = $archivo["name"];
  $mimetype = $archivo["type"];

  if ($mimetype == "image/jpg" || $mimetype == "image/jpeg" || $mimetype == "image/png" || $mimetype == "image/gif"||$mimetype == "image/webp") {
    if (!is_dir("uploads/images")) {
      mkdir("uploads/images", 0777, true);

    }
    move_uploaded_file($archivo["tmp_name"], "uploads/images/" . $nombre);
    $producto->setImagen($nombre);
  }



  $productos = $producto->saveProducto();
 
if ($productos) {
  $_SESSION['producto'] = "true";
} else {
  $_SESSION['producto'] = "false";
}
 echo'<script type="text/javascript">
 window.location.href="index.php?controller=producto&action=manejador";</script>';
}


public function borrar() {
  if (isset($_GET["id"])) {
    $id = $_GET["id"];
    $producto = new Producto();

    $setId = $producto->setId($id);
    $borrar = $producto->borrar();
if ($borrar) {
  $_SESSION["borrar-productos"] = true;
} else {
  $_SESSION["borrar-productos"] = false;
}

    echo'<script type="text/javascript">
     window.location.href="index.php?controller=producto&action=manejador";</script>';
  }
  
}


public function editar() {
  if (isset($_GET["id"])) {
    $id = $_GET["id"];
    $edit = true;
    $producto = new Producto();
    $producto->setId($id);

    $item = $producto->sacarUno();
    require_once 'views/productos/crear.php';
  }
}
}





?>