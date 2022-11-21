<?php

require_once ROOT . "/models/user.php";
require_once ROOT . "/models/address.php";

class Registration
{
  private $db;
  private  $address;
  private  $user;

  function __construct($db)
  {
    $this->db = $db;
    $this->address = new Address($this->db);
    $this->user = new User($this->db);
  }

  function regis($request)
  {
    $birthDate = date_create("2000-09-21");
    $form1 = [
      "national_id" => "1740301210252",
      "original_province" => "สมุทรสาคร",
      "nationality" => "ไทย",
      "race" => "ไทย",
      "email" => "624259014@webmail.npru.ac.th",
      "prefix" => "นาย",
      "firstname_th" => "ณัฐสิทธิ์ วรนิติเยาวภา",
      "firstname_en" => "Natthasith",
      "lastname_th" => "วรนิติเยาวภา",
      "lastname_en" => "voranitiyaowapa",
      "password" => "12345678",
      "birthday" => date_format($birthDate, "Y-m-d"),
      "blood_group" => "AB",
      "religion" => "พุทธ"
    ];


    $form2 = [
      "is_current" => true,
      "province" => "สมุทรสาคร",
      "alley" => "-",
      "zip_code" => "74120",
      "street" => "-",
      "phone_number" => "0998971234",
      "district" => "บ้านแพ้ว",
      "sub_district" => "หนองสองห้อง",
      "no" => "87",
      "group_no" => "9",
      "user_id" => "1740301210252"
    ];


    $this->address->insert($form2);
    $this->user->insert($form1);
  }


  function login($username, $password): bool
  {
    $user = $this->user->findOneByNID($username);
    if (count($user) === 0) return false;
    if ($user["password"] != $password) return false;
    $_SESSION["id"] = $username;
    $_SESSION["is_login"] = true;
    return true;
  }
}
