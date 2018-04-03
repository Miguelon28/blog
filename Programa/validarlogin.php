<?php 
session_start();

if (isset($_POST['usuario']) and isset($_POST['password'])){
include("../BD/conectar.php");
$con = $pdo->prepare('SELECT usuario, password, nombre FROM usuarios WHERE usuario = :us and password = :pass');

//bind 
    $con->bindparam(':us', $usuario);
    $con->bindparam(':pass', $password);
 
    //execute 
    $us= $_POST['usuario'];
    $us= $_POST['password'];
    $con->execute();

 $reg = $con->fetch();  

  if ($pas == $reg['password']) {
   $_SESSION['nombre'] = $reg['nombre'];
   $_SESSION['id_usuario'] = $reg['id_usuario'];
   $_SESSION['tipo'] = $reg['tipo'];
   header("location:login.php");
  } else {
     header("location:index.php?error=2");
  }
  } else {
   header("location:index.php?error=1");

}
 ?>