<?php
$ordre = "asc";
$cat = null;
$page = 0;
$Prix_min=0;
$Prix_max=1000;

if(isset($_GET['change']))
    $db = require_once('../config/config.php');

$product = afficherV2($ordre, $db, $cat,$Prix_min,$Prix_max);
$id;
echo "<br><br><br><br><br>";


echo "<table>";
echo "<tr>";
    
    echo "<form action='./admin/add.php' method='POST'>";

    echo "<td>";
    echo "<label for='image'>New Article: </label>";
    echo "<td>";

    echo "<td>";
    echo "<label for='image'> image: </label>";
    echo "<input type='text' id='image' name='image' placeholder='article.webp'>";
    echo "<td>";
   
    echo "<td>";
    echo "<label for='nom'>nom: </label>";
    echo "<input type='text' id='nom' name='nom'>";
    echo "<td>";

    echo "<td>";
    echo "<label for='prix'>prix: </label>";
    echo "<input type='number' id='prix' name='prix' min='1' max='10000'>";
    echo "<td>";

    echo "<td>";
    echo "<label for='categorie'>Categorie: </label>";
    echo "<input type='number' id='categorie' name='categorie' min='1' max='3' value='1'>";
    echo "<td>";


    echo "<td>";
    echo "<label for='quantity'>Quantity: </label>";
    echo "<input type='number' id='quantity' name='quantity' min='0' value=0>";
    echo "<td>";

    echo "<td>";
    $id = sizeof($product);
    echo "<input type='hidden' id='id' name='id' value={$id}>";
    echo "<input type='submit' value='ajouter'>";
    echo "</td>";
    echo "</form>";

echo "</tr>";
echo "<tr><td><br><br></td></tr>";
foreach($product as $prod):
    echo "<tr>";
    echo "<td>"."<img src= ./{$prod['image']} class='img_article' height='110' width='80'>"."</td>";
    echo "<td>".$prod['nom']."</td>";

    echo "<form action='./admin/modif.php' method='POST'>";
    echo "<td>";
    echo "<label for='quantity'>Quantity: </label>";
    echo "<input type='number' id='quantity' name='quantity' min='0' value={$prod['quantite']}>";
    echo "</td>";
    
    echo "<td>";
    echo "<label for='quantity'>Prix: </label>";
    echo "<input type='number' id='prix' name='prix' min='1' value={$prod['prix']}>";
    echo "</td>"; 

   
    echo "<td>";
    echo "<input type='hidden' id='id' name='id' value={$prod['id']}>";
    echo "<input type='submit' value='modifier'>";
    echo "</form>"; 
    echo "</td>";
   
    echo "<td>";
    echo "<form action='./admin/supprimer.php' method='POST'>";
    echo "<input type='hidden' id='id' name='id' value={$prod['id']}>";
    echo "<input type='submit' value='supprimer'>";
    echo "</form>"; 
    echo "</td>";
    
     

    echo "</tr>";
endforeach

?>
</table>
