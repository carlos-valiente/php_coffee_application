<?php

class Database {

 var $conexion;

 public function conectar()
 {
      $db_host = 'localhost';
      $db_user = 'root';
      $db_pass = '';
      $db_database = 'cafe';
      
      $this->conexion = new mysqli($db_host, $db_user, $db_pass, $db_database);

      // convertimos los caracteres que nos devuelve a UTF-8
      $this->conexion->set_charset("utf8");
 } 

 public function consulta($sql){
    $result = $this->conexion->query($sql);   
    return $result;
 }

 public function desconectar(){
    mysqli_close($this->conexion);
 }

}
?>

