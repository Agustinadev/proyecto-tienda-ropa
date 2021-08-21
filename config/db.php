<?php
class database {
  public static function connect() {
    $db = new mysqli('Localhost', 'root', '', 'tienda');
    $db->query('SET NAMES utf8');
    return $db;
  }
}







?>