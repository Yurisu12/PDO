<?php

$dsn = "mysql:host=localhost;dbname=test";
$user = "root";
$passwd = "";

try {
  $pdo = new PDO($dsn, $user, $passwd);
} catch (Exception $e) {
  echo 'Caught exception: ',  $e->getMessage(), "\n";
}


?>
