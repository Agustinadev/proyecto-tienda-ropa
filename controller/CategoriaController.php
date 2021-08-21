<?php
require_once 'model/categorias.php';
require_once 'helpers/utils.php';

class CategoriaController {
  public function index () {
    Utils::isAdmin();
    $categoria = new Categoria();
    $categorias = $categoria->getCategorias();
   
require_once 'views/categoria/index.php';

  }

  public function añadirCategoria(){
Utils::isAdmin();
    require_once 'views/categoria/crear.php';
  }
 

  public function guardarCategoria(){
    Utils::isAdmin();
    $categoria = new Categoria();
    $categorias = $categoria->saveCategoria();
    if ($categorias) {
      header("index.php?controller=Categoria&action=index");
    }
  }
}
?>