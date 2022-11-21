<?php

require_once ROOT . "/models/baseModel.php";
class OpenRegister extends BaseModel
{
  protected $table = "open_register";
  protected $columns = [
    "major_id", "round", "type", "university_year", "start_date", "end_date", "degree"
  ];


  function __construct($db)
  {
    parent::__construct($db);
  }

  function findAllByRoundAndYear($universityYear, $round, $type, $degree) {
    $condition = "university_year = '{$universityYear}' 
    AND round = '{$round}' 
    AND type = '{$type}'  
    AND degree = '{$degree}'";
    $sql = "SELECT * FROM {$this->table} Where {$condition}";
    $stmt = $this->db->prepare($sql);
    $stmt->execute();
    return $stmt->fetchAll();
  }
}
