<?php
 include_once('../BD/conectar.php');
    $sql= $conn->prepare("INSERT INTO publicaciones(titulo, cuerpo) VALUES (:titulo,:cuerpo)");

  $sql->bindParam(':titulo', $titulo);
  $sql->bindParam(':cuerpo', $cuerpo);

$titulo = $_POST['titulo'];
$cuerpo = $_POST['cuerpo'];

$sql->execute();  

header('Location: publicacion.html');
?>