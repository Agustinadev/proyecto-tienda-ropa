<?php 
class Producto{
  private $id;
  private $categoria_id;
  private $nombre;
  private $descripcion;
  private $precio;
  private $stock;
  private $oferta;
  private $fecha;
  private $imagen;
  private $db;

  public function __construct(){
    $this->db = Database::connect();
  }

  public function getId(){
    return $this->id;
  }
  public function getCategoriaId(){
    return $this->categoria_id;
  }
  public function getNombre(){
    return $this->nombre;
  }
  public function getdescripcion(){
    return $this->descripcion;
  }
  public function getPrecio(){
    return $this->precio;
  }
  public function getStock(){
    return $this->stock;
  }
  public function getOferta(){
    return $this->oferta;
  }
  public function getFecha(){
    return $this->fecha;
  }
  public function getImagen(){
    return $this->imagen;
  }



  public function setId($id){
   $this->id = $id;
  }



  public function setCategoriaId($categoria_id){
    $this->categoria_id = $categoria_id;
  }



  public function setNombre($nombre){
    $this->nombre = $this->db->real_escape_string($nombre);
  }


  public function setdescripcion($descripcion){
    $this->descripcion = $this->db->real_escape_string($descripcion);
  }


  public function setPrecio($precio){
   $this->precio = $precio;
  }

  public function setStock($stock){
     $this->stock = $stock;
  }

  public function setOferta($oferta){
    $this->oferta = $oferta;
  }

  public function setFecha($fecha){
    $this->fecha = $this->db->real_escape_string($fecha);
  }

  public function setImagen($imagen){
     $this->imagen = $imagen;
  }
  public function getAll(){
    $productos = $this->db->query("SELECT * FROM productos ORDER BY id DESC");

    return $productos;
  }





  public function getProducto(){
    $consult = $this->db->query("SELECT * FROM productos");
    return $consult;
    }
    
    //para insertarlas
    public function saveProducto(){
        require_once 'model/producto.php';
        $sql = "INSERT INTO productos VALUES(null, {$this->getCategoriaId()}, '{$this->getNombre()}', '{$this->getDescripcion()}', {$this->getPrecio()}, {$this->getStock()}, null, CURDATE(), '{$this->getImagen()}')";
    
        $consult = $this->db->query($sql);
        if ($consult) {
          return true;
        } else {
          return false;
        }
      }
    
     public function borrar() { 
      $sql = "DELETE FROM productos WHERE id = {$this->getId()}";
      $consult = $this->db->query($sql);
      if ($consult) {
        return $consult; 
      } else {
        return false;
      }
    }


     public function sacarUno() {
      $sql = "SELECT * FROM productos WHERE id = {$this->getId()}";
      $consult = $this->db->query($sql);
      if ($consult) {
       $fetch = $consult->fetch_object(); 
       return $fetch;
      } else {
        return false;
      }
      }
    }
  
  
  
?>






