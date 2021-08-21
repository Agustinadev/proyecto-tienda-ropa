<?php
class Usuario {
private $nombre;
private $apellido;
private $contraseña;
private $email;
private $db;

public function __construct() {
  $this->db = database::connect();
}


//getters
public function getNombre(){
return $this->nombre;
}
public function getApellido(){
  return $this->apellido;
}
public function getContraseña(){
  return $this->contraseña;
}
public function getEmail(){
  return $this->email;
}


//setters
public function setNombre($nombre){
  return $this->nombre = $this->db->real_escape_string($nombre);
}
public function setApellido($apellido){
   return $this->apellido = $this->db->real_escape_string($apellido);
}
public function setEmail($email){
   return $this->email = $this->db->real_escape_string($email);
}
public function setContraseña($contraseña){
  return $this->contraseña = password_hash($this->db->real_escape_string($contraseña), PASSWORD_BCRYPT, ['cost' => 4] );
}


//funcion para crear cuenta
public function query () {
  $sql = "INSERT INTO usuarios VALUES(null, '{$this->getNombre()}', '{$this->getApellido()}','{$this->getEmail()}','{$this->getContraseña()}','usuario' )";
  $consult = $this->db->query($sql); 
  return $consult;
}


//funcio para iniciar sesion
 public function loginModel($email, $password){
    $result = false;
    $sql = "SELECT * FROM usuarios WHERE email = '$email'";
    $user = $this->db->query($sql);
    if ($user && $user->num_rows == 1) {
     $fetch = $user->fetch_object();
     
     $verify = password_verify($password, $fetch->contraseña);
    } 

    if ($verify) {
      $result = $fetch;
    }
    else {
      echo 'mal';
    }
    return $result;
  }





}

?>