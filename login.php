<!DOCTYPE html>
<html>
<body>

  <a href='index.php'>Landing page</a> -
  <a href="login.php">Login</a> -
  <a href="logout.php">Log out</a> -
  <a href='page.php'>Just another page</a>
<hr>

<?php

if ( isset($_GET['naam']) &&  isset($_GET['wachtwoord']) ) {
  $naam = $_GET['naam'];
  $ww=$_GET['wachtwoord'];

  include "db.php";
  echo "Trying to login with ".$_GET['naam'];

  $stmt = $pdo->prepare("SELECT * FROM users where naam = :naam and wachtwoord=:wachtwoord");
  $stmt->bindParam(':naam', $naam, PDO::PARAM_STR);
  $stmt->bindParam(':wachtwoord', $ww, PDO::PARAM_STR);
  $stmt->execute();
  $result = $stmt->fetch();

  if ($result ) {

    echo "<pre>";
    var_dump($result);
    echo "</pre>";

    session_start([ 'cookie_lifetime' => 86400,]);
    $_SESSION['id'] = $result['id'];
    $_SESSION['naam'] = $result['naam'];

    echo "<br>Succesfully loggin in!";
    echo "<br><a href='page.php'>Just another page</a>";
    exit;
  }
}

?>

<h2>Login</h2>

<form action="login.php">
  <label for="naam">Naam:</label><br>
  <input type="text" id="naam" name="naam" value=""><br>
  <label for="wachtwoord">Wachtwoord:</label><br>
  <input type="text" id="wachtwoord" name="wachtwoord" value=""><br><br>
  <input type="submit" value="Submit">
</form>

</body>
</html>
