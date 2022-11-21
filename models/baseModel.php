<?php

class BaseModel
{
  protected $db;
  protected $table = "";
  protected $columns = [];

  function __construct($db)
  {
    $this->db = $db;
  }

  function insert($data)
  {
    $columnStr = join(", ", $this->columns);

    $values = [];
    foreach ($this->columns as $item) {
      array_push($values, ":" . $item);
    }
    $valuesStr = join(", ", $values);

    $sql = "INSERT INTO $this->table ({$columnStr}) VALUES ({$valuesStr})";
    $stmt = $this->db->prepare($sql);

    foreach ($this->columns as $item) {
      $stmt->bindParam(":{$item}", $data[$item]);
    }

    // $stmt->debugDumpParams();
    $stmt->execute();
  }

}
