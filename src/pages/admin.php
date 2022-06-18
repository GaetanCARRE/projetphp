<?php
$ordre = "asc";
$cat = null;
$page = 0;
$Prix_min=0;
$Prix_max=1000;
$product = afficherV2($ordre, $db, $cat,$Prix_min,$Prix_max);

echo "<br><br><br><br><br>";


echo "<table>";
echo "<tr>";
    
    echo "<form action='/changement_bdd.php' metod'POST'>";

    echo "<td>";
    echo "<label for='image'>New Article: </label>";
    echo "<td>";

    echo "<td>";
    echo "<label for='image'>image: </label>";
    echo "<input type='text' id='image' name='image'>";
    echo "<td>";
   
    echo "<td>";
    echo "<label for='nom'>nom: </label>";
    echo "<input type='text' id='nom' name='nom'>";
    echo "<td>";

    echo "<td>";
    echo "<label for='prix'>prix: </label>";
    echo "<input type='text' id='prix' name='prix'>";
    echo "<td>";


    echo "<td>";
    echo "<label for='quantity'>Quantity: </label>";
    echo "<input type='number' id='quantity' name='quantity' min='0' value=0>";
    echo "<td>";

    echo "<td>";
    echo "<input type='submit' value='ajouter'>";
    echo "</td>";
    echo "</form>";

echo "</tr>";
foreach($product as $prod):
    echo "<tr>";
    echo "<td>"."<img src= ./{$prod['image']} class='img_article' height='120' width='40'>"."</td>";
    echo "<td>".$prod['nom']."</td>";
    
    echo "<td>";
    echo "<form action='/changement_bdd.php' metod'POST'>";
    echo "<label for='quantity'>Quantity: </label>";
    $POST['article']=$prod;
    echo "<input type='number' id='quantity' name='quantity' min='0' value={$prod['quantite']}>";
    echo "</td>"; 
   
    echo "<td>";
    echo "<input type='submit' value='modifier'>";
    echo "</form>"; 
    echo "</td>";
   
    echo "<td>";
    echo "<form action=/supprimer_article.php' method='POST'>";
    $POST['article']=$prod;
    echo "<input type='submit' value='supprimer'>";
    echo "</form>"; 
    echo "</td>";
    
     

    echo "</tr>";
endforeach

?>
</table>