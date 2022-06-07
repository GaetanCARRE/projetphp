<?php


function afficherProduct($id, $db)
{
 
    $res = $db->prepare("SELECT * FROM product WHERE id=?");

    $res->execute(array($id));

    $data = $res->fetchAll(PDO::FETCH_OBJ);

    return $data;

    $res->closeCursor();
}

function ajouter($image, $nom, $prix, $taille)
{
    $res = $db->prepare("INSERT INTO product (image, nom, prix, taille) VALUES (?, ?, ?, ?)");

    $res->execute(array($image, $nom, $prix, $taille));

    $res->closeCursor();
}

function afficher($tri = "asc", $db, $cat = null)
{
    
    if ($tri == "asc" || $tri = "NULL") {//j'ai mis null sinon le cas ou ya pas de $_get les articles s'affiche pas 
      $text = "nom ASC";
    }
    else if ($tri == "desc") {
      $text = "nom DESC";
    }
    else if ($tri == "prix_asc") {
      $text = "prix ASC";
    }
    else if ($tri == "prix_desc") {
      $text = "prix DESC";
    }
    $categorie = "";
    if($cat != null)
    {
      $categorie = "WHERE product.categorie =".$cat;
    }

    $res = $db->prepare("
      SELECT *, product.categorie as categorie
      FROM product 
      LEFT JOIN categorie ON product.categorie = categorie.id
      ".$categorie."
      ORDER BY ".$text);

    $res->execute();

    $data = $res->fetchAll(PDO::FETCH_ASSOC);  
    return $data;

  
  
}


function supprimer($id)
{
  if (require("../account/config.php")) {
    $res = $db->prepare("DELETE FROM product WHERE id=?");

    $res->execute(array($id));

    $res->closeCursor();
  }
}

function getCategories() {
 //$req = $db->prepare("SELECT * FROM categorie");


}

