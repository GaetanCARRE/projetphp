<?php

function afficherProduct($id)
{
  if (require("../account/config.php")) {
    $res = $bdd->prepare("SELECT * FROM product WHERE id=?");

    $res->execute(array($id));

    $data = $res->fetchAll(PDO::FETCH_OBJ);

    return $data;

    $res->closeCursor();
  }
}

function ajouter($image, $nom, $prix, $taille)
{
  if (require("../account/config.php")) {
    $res = $bdd->prepare("INSERT INTO product (image, nom, prix, taille) VALUES (?, ?, ?, ?)");

    $res->execute(array($image, $nom, $prix, $taille));

    $res->closeCursor();
  }
}

function afficher()
{
  
  if (require("../account/config.php")) {
    
    $res = $bdd->prepare("SELECT * FROM product ORDER BY id DESC");

    $res->execute();

    /* $data = $res->fetchAll(PDO::FETCH_OBJ); */

    return $res;

    /* $res->closeCursor(); */
  }
}

function supprimer($id)
{
  if (require("../account/config.php")) {
    $res = $bdd->prepare("DELETE FROM product WHERE id=?");

    $res->execute(array($id));

    $res->closeCursor();
  }
}
