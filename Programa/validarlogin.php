<?php 
session_start();

if (isset($_POST['usuario']) and isset($_POST['password'])){
include("../BD/conectar.php");
$con = $pdo->prepare('SELECT * FROM usuarios WHERE usuario = :us and password = :pass');

//bind 
    $con->bindparam(':us', $us);
    $con->bindparam(':pass', $pass);
 
    //execute 
    $us= $_POST['usuario'];
    $pass= $_POST['password'];
    $con->execute();

$reg  = $con->fetch();  

  if ($pass == $reg['password']) {
   $_SESSION['usuario'] = $reg['usuario'];
   $_SESSION['id'] = $reg['id'];
   $_SESSION['tipo'] = $reg['tipo'];
   header("location:index.php");

  } else {
     header("location:login.php?error=2");
  }
  } else {
   header("location:login.php?error=1");

}
 ?>