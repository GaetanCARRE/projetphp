<?php

require("commandes.php");
$product = afficher();

$k = 0;
foreach($product as $pr)
{
    $product_name[$k] = $pr['name'];
    $product_image[$k] = $pr['image'];

}

require("../account/config.php");

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../styles.css">
    <title>Home</title>
    <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous">
    </script>
    <script>
        $(function() {
            $("#header").load("../header/header.html");
            $("#footer").load("../header/footer.html");
        });
    </script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</head>

<body>


    <div id="header"></div>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>




    <div class="container-grid-shop">
        <div class="filtre_gauche">
        <?php
         $data=$bdd->prepare('select distinct categorie from product order by categorie');
         $data->execute();
         $result=$data->fetchAll(PDO::FETCH_ASSOC);
         foreach($result as $row){
         ?>

        <div class="list-group-item checkbox">
        <label><input type="checkbox" value="<?php echo $row['categorie'];?>"> <?php echo $row['categorie'];?></label>
        </div>

        <?php
        }
        ?>
        </div>
        <div class="shop_droite">
            <div class="grid_column_shop">

                <?php
                $a = 1; $i = 1;
                $b= 3; $j = 3;
                /*
                while ($donnees = $product->fetch() and $i>=$a and $i<=$b) {
                    echo "<div class='article_{$i}'>";
                    echo "<img src= ../{$donnees['image']} class='img_article'><br>";
                    echo $donnees['nom']. "<br>" . $donnees['prix'];
                    
                    /* echo $donnees['nom']; */
                   /*  ?>
                    <a href="www.google.fr">
                    <ion-icon name="bag-add-outline"></ion-icon>
                    </a>
                    <?php
                    echo "</div>";
                    
                    $i++;
                    $j++;
                    
                }  */
                
                foreach($product as $p)
                {
                    echo "<div class='article_{$i}'>";
                    echo "<img src= ../{$p['image']} class='img_article'><br>";
                    echo $p['nom']. "<br>" . $p['prix'];
                    
                    /* echo $donnees['nom']; */
                    ?>
                    <a href="www.google.fr">
                    <ion-icon name="bag-add-outline"></ion-icon>
                    </a>
                    <?php
                    echo "</div>";
                    
                    $i++;
                    $j++;
                }
                ?>
            </div>



        </div>
    </div>
    </div>
    </div>

    <div class="center">
        <div class="pagination">
            <a href="#">&laquo;</a>
            <a href="#">1</a>
            <a href="#" class="active">2</a>
            <a href="test.php">3</a>
            <a href="#">4</a>
            <a href="#">5</a>
            <a href="#">6</a>
            <a href="#">&raquo;</a>
        </div>
    </div>


    <div id="footer"></div>

</body>


</html>