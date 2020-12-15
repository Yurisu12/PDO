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

if (isset($_SESSION['id'])) {
  echo  "<br>You are logged in and your user id is    ". $_SESSION['id'];
  echo  "<br>and your naam id is ". $_SESSION['naam'];
} else {
    echo  "<br>You are NOT logged in";
}

?>
