<?php 
  session_start()
?>
<!DOCTYPE html>
<html>
<head>
  <title>Perfil</title>
</head>
<body>
  <center>
    <?php if(isset($_SESSION['usuario'])){
      echo "<h4>Perfil de</h4>".$_SESSION['usuario'];
    }else{
      echo "No puedes entrar<br>Debes inicidar sesión primero";
    }
    ?>
    <?php if(!isset($_SESSION['usuario'])){ ?>

    
    <?php } ?>
    <br>
    <a href="index.php">Regresar</a>
  </center>
</body>
</html>