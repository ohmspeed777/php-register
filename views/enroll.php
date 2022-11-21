<?php

require_once  "../configs/configs.php";
require_once ROOT . "/controllers/registration.php";


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $db = Database::getInstance();
  $regisController = new Registration($db);

  try {
    $isLogin = $regisController->enroll(1);
  } catch (Exception $e) {
    echo $e->getMessage();
  }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <h1>Enroll page</h1>
  <form action="" method="POST">
    <button>Submit</button>
  </form>
</body>

</html>