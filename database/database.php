<?php

class Database
{
  protected static $instance;

  protected function __construct()
  {
  }

  public static function getInstance()
  {
    if (empty(self::$instance)) {

      $db_info = array(
        "db_host" => "localhost",
        "db_port" => "3306",
        "db_user" => "root",
        "db_pass" => "12345678",
        "db_name" => "p1",
        "db_charset" => "UTF-8"
      );

      try {
        self::$instance = new PDO("mysql:host=" . $db_info['db_host'] . ';port=' . $db_info['db_port'] . ';dbname=' . $db_info['db_name'], $db_info['db_user'], $db_info['db_pass']);
        self::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        self::$instance->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
        self::$instance->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
      } catch (PDOException $error) {
        echo $error->getMessage();
      }
    }

    return self::$instance;
  }
}
