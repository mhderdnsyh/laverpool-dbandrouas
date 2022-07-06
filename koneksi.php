<?php
$server ="localhost";
$username ="root";
$password="020627";
$db ="laverpool";

$dsn = "mysql:host={$server};db={$db}";

try {
  $dbConnection = mysqli_connect($server, $username, $password, $db);
} catch (Exception $exception) {
  die("Terjadi error : {$exception->getMessage()}");
}


