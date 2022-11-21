<?php

require_once ROOT . "/models/baseModel.php";
class OpenRegister extends BaseModel
{
  protected $table = "open_register";
  protected $columns = [
    "major_id", "round", "type", "university_year", "start_date", "end_date",
  ];


  function __construct($db)
  {
    parent::__construct($db);
  }
}
