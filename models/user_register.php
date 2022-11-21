<?php

require_once ROOT . "/models/baseModel.php";

class UserRegister extends BaseModel
{
  protected $table = "user_register";
  protected $columns = [
    "open_register_education", "user_id", "is_approve", "id"
  ];

  function __construct($db)
  {
    parent::__construct($db);
  }

}
