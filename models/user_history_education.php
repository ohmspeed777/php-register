<?php

require_once ROOT . "/models/baseModel.php";

class UserHistoryEducation extends BaseModel
{
  protected $table = "users_history_education";
  protected $columns = [
    "degree", "user_id", "academy", "GPA"
  ];

  function __construct($db)
  {
    parent::__construct($db);
  }

}
