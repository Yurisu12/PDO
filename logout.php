<!DOCTYPE html>
<html>
<body>

  <a href='index.php'>Landing page</a> -
  <a href="login.php">Login</a> -
  <a href="logout.php">Log out</a> -
  <a href='page.php'>Just another page</a>
<hr>

<?php
session_start();
session_destroy();
?>
Uitgelogd
