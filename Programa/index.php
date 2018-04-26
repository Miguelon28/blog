  <?php    
    session_start();       
include_once('funcion.php');
include_once('../BD/conectar.php');
$sentencia = $pdo->query("SELECT * FROM publicaciones;");
$publicaciones = $sentencia->fetchAll(PDO::FETCH_OBJ);
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
	<TITLE>Blog</TITLE> 
</head>
<body>
  <center>
    <?php if(isset($_SESSION['usuario'])){
    echo "<H3>Bienvenido<br>".$_SESSION['usuario'];
  }
  else{
    echo "<H1>Bienvenido</H1>";
  }
    ?>
  </center>
  <?php if(!isset($_SESSION['usuario'])) { ?>
  <div align="center">
  <a href="login.php">Iniciar sesión</a> 
  <a href="">Información</a>
  </div>
  <section>
    <?php 
      echo "<h3>Categorias</h3>";
      $categorias = dbase('categorias', $pdo);
        foreach($categorias as $key){
          echo "<a class='categoria' style='color: black;' href='vercat.php?categoria=".$key['id_categoria']."'>".$key['valor']."</a><br>";
        }
    ?>
  </section>
  <table border="1">
    <tr>
      <th>Titulo</th>
      <th>Descripción</th>
    </tr>
    <?php foreach($publicaciones as $publicacion){ ?>
  <tr>
    <td><?php echo $publicacion->titulo ?></td>
    <td><?php echo $publicacion->cuerpo ?></td>
  </tr>
  <?php } ?>
  </table>
  <?php } else { ?>
  <?php 
      echo "<h3>Categorias</h3>";
      $categorias = dbase('categorias', $pdo);
        foreach($categorias as $key){
          echo "<a class='categoria' style='color: black;' href='vercat.php?categoria=".$key['id_categoria']."'>".$key['valor']."</a><br>";
        }
    ?>
  <div align="right">
  <a href="publicacion.php">Agregar nueva publicación</a>
  <a href="miperfil.php">Perfil</a>
  <a  href="logout.php">Cerrar sesion</a>
  </div>
  <table border="1">
    <tr>
      <th>Titulo</th>
      <th>Descripción</th>
      <th>Acciones</th>
    </tr>
    <?php foreach($publicaciones as $publicacion){ ?>
  <tr>
    <td><a href="publicaciones.php"><?php echo $publicacion->titulo ?></a></td>
    <td><?php echo $publicacion->cuerpo ?></td>
    <td><a href="like.php">Me gusta</a><br><a href="comentar.php">Comentar</a></td>
  </tr>
  <?php } ?>
  </table>
  <?php } ?>
   <br><br>        
   </body>
</html>