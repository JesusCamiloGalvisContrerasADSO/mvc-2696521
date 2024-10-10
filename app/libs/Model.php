<?php

namespace Sena\libs;

class model{

  protected $db;
  protected $connection;

  public function __construct()
  {
    //creamos una nueva instancia de la connecion
    $this->db = new Database();
    $this->connection = $this->db->getConnection();
  }

  /** Metodo para selecionar todos los registros de una tabla en la base de date_offset_get 
   * @param string $table
   * @return array*/ 

  public function select($table = "")
  {
    $stm = $this->connection->prepare("SELECT * FROM $table");
    $stm->execute();
    return $stm->fetchAll();
  }

  public function getById($table = "", $id ){
    $stm = $this->connection->prepare("SELECT * FROM $table WHERE id = :id");
    $stm->bindValue(":id", $id);
    $stm->execute();
    return $stm->fetch();
  }

  // public function update($table = "", $id){
  //   $stm = $this->connection->prepare("");
  // }
}