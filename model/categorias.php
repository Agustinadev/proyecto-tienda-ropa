<?php
class Categoria {
    public $id;
    public $nombre;
    public $db;

    public function __construct() {
        $this->db = database::connect();
      }
      
//getters
    public function getId (){
        $this->id;
    }

    public function getNombre (){
        $this->nombre;
    }



//setters
    public function setId ($id){
        $this->id = $id;
    }

    public function setNombre ($nombre){
        $this->nombre = $nombre;
    }

//para traer todas las categorias
public function getCategorias(){
$consult = $this->db->query("SELECT * FROM categorias");
return $consult;
}

//para insertarlas
public function saveCategoria(){
    require_once 'model/categorias.php';
    if (isset($_POST)) {
        $name = $_POST['nombre'];
    }
    $consult = $this->db->query("INSERT INTO categorias VALUES(null, '$name')");

    if ($consult) {
      return true;
    } else {
      return false;
    }
  }

}

?>