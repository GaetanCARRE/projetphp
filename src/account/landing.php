<?php
    session_start();
    if(!isset($_SESSION['user']))
        header('Location:index.php');
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="header.css" />
    <title>Bonjour ! </title>
  </head>

  <body>
      <h1>Bonjour <?php echo $_SESSION['user']; ?></h1>
    <a href="deconnexion.php">Déconnexion</a>

      <h2>Nombre de vues du site <?php
          echo file_get_contents('cpt.txt')
          ?></h2>
    </div>
  </body>
</html>