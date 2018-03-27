<?php
 include_once('../BD/conectar.php');
    $sql= $pdo->prepare("INSERT INTO usuarios(usuario, nombre, password, email) VALUES (:usuario,:nombre,:password,:email)");

  $sql->bindParam(':usuario', $usuario);
  $sql->bindParam(':nombre', $nombre);
  $sql->bindParam(':password', $password);
  $sql->bindParam(':email', $email);

$usuario = $_POST['usuario'];
$nombre = $_POST['nombre'];
$password = hash('SHA256',  $_POST['password']);
$email = $_POST['email'];

$sql->execute();  

header('Location: index.php');
?>