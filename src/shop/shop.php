<?php

require("commandes.php");
$product = afficher();

/* foreach($product as $pr)
{
    $product_name[$k] = $pr['name'];
    $product_image[$k] = $pr['image'];

}
page 1
for(i =  -> 9 and j<tablenght) */

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
            <div class="dropdown">
                <button onclick="myFunction()" class="dropbtn">FILTRES</button>
                <div id="myDropdown" class="dropdown-content">
                    <a href="shop.html">Prix croissant</a>
                    <a href="shop.html">Prix decroissant</a>
                    <a href="shop.html">filtre 3</a>
                    <div class="Check">
                        <input type="checkbox" id="scales1" name="scales1" checked>
                        <label for="scales"> 0€-30€</label>
                    </div>
                    <div class="Check">
                        <input type="checkbox" id="scales2" name="scale2" checked>
                        <label for="scales"> 30€-60€</label>
                    </div>
                    <div class="Check">
                        <input type="checkbox" id="scales3" name="scales3" checked>
                        <label for="scales">60€-100€</label>
                    </div>
                </div>
            </div>
        </div>
        <div class="shop_droite">
            <div class="grid_column_shop">

                <?php

                
                $i = 0;
                $j = 6;
                $num_art = 0;
                for ($i; $i < $j; $i++) {
                    echo "<div id='article_{$num_art}'>";
                    echo "<img src= ../{$product[$i]['image']} class='img_article'><br>";
                    echo $product[$i]['nom'] . "<br>" . $product[$i]['prix'];
                    $num_art++;
                


                /* echo $donnees['nom']; */
                
                echo "<a href='www.google.fr'>";
                echo "<ion-icon name='bag-add-outline'></ion-icon>";
                echo "</a>";
                echo "</div>";
                }
                $i++;
                $j++;

                ?>
            </div>



        </div>
    </div>
    </div>
    </div>

    <div class="center">
        <div class="pagination">
            <a >&laquo;</a>
            <?php 
            for ($i=0; $i < round(count($product)/9,0,PHP_ROUND_HALF_UP) ; $i++) { 
                ?>
                    <a href='shop.php?p=<?=$i ?>'><?=$i+1 ?></a>
                <?php
            }
            ?>

            <a href="#">&raquo;</a>
        </div>
    </div>


    <div id="footer"></div>

</body>


<script>
    /* When the user clicks on the button, 
    toggle between hiding and showing the dropdown content */
    function myFunction() {
        document.getElementById("myDropdown").classList.toggle("show");
    }

    // Close the dropdown if the user clicks outside of it
    window.onclick = function(event) {
        if (!event.target.matches('.dropbtn')) {

            var dropdowns = document.getElementsByClassName("dropdown-content");
            var i;
            for (i = 0; i < dropdowns.length; i++) {
                var openDropdown = dropdowns[i];
                if (openDropdown.classList.contains('show')) {
                    openDropdown.classList.remove('show');
                }
            }
        }
    }
</script>

</html>
<style>
    .dropbtn {
        background-color: black;
        color: white;
        padding: 16px;
        font-size: 16px;
        border: none;
        cursor: pointer;
    }

    .dropbtn:hover,
    .dropbtn:focus {
        background-color: grey;
    }

    .dropdown {
        position: fixed;
        padding-left: 10px;
        padding-top: 10px;
        display: inline-block;
    }

    .dropdown-content {
        display: none;
        position: absolute;
        background-color: #f9f9f9;
        min-width: 160px;
        overflow: auto;
        box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
    }

    .dropdown-content a {
        color: black;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
    }

    .dropdown a:hover {
        background-color: #e1e1e1
    }

    .show {
        display: block;
    }

    [type="button"] {
        margin-bottom: 10px;
    }

    .Check {
        padding-top: 10px;
    }
</style>