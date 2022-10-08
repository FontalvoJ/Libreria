<?php
$hostname = "localhost";
$user = "root";
$pass = "";

try {
  $conn = new PDO("mysql:host=$hostname;dbname=db_formulario", $user, $pass);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  //echo "Conexion exitosa";
} catch(PDOException $e) {
  echo "Conexion Erronea: " . $e->getMessage();
}
?>