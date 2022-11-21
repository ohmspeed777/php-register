<?php

require_once ROOT . "/models/baseModel.php";
class Address extends BaseModel
{
  protected $table = "address";
  protected $columns = [
    "is_current", "province", "alley", "zip_code", "street", "phone_number", "district", "sub_district", "no",  "user_id", "group_no"
  ];


  function __construct($db)
  {
    parent::__construct($db);
  }
}
