<?php
$host = "localhost";
$banco = "estoque_schema";
$username = "root";
$password = "";

try {
  $conn = new PDO("mysql:host=$host;dbname=$banco", $username, $password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  // echo "Conectado com sucesso!";
} catch(PDOException $e) {
  echo "Falha na conexão: " . $e->getMessage();
}
