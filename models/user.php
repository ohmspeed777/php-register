<?php

require_once ROOT . "/models/baseModel.php";

class User extends BaseModel
{
  protected $table = "users";
  protected $columns = [
    "national_id", "original_province", "nationality", "race", "email", "prefix", "firstname_th", "firstname_en", "lastname_th", "lastname_en", "password", "birthday", "blood_group", "religion"
  ];

  function __construct($db)
  {
    parent::__construct($db);
  }

  function findOneByNID($national_id) {
    $sql = "SELECT * FROM {$this->table} Where national_id = '${national_id}'";
    $stmt = $this->db->prepare($sql);
    $stmt->execute();
    return $stmt->fetch();
  }
}
