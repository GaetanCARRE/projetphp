<?php

$product = afficher($_GET['o'], $db);
?>

<div class="container-grid-shop">
    <div class="filtre_gauche">
        <div class="dropdown">
            <button onclick="myFunction()" class="dropbtn">FILTRES</button>
            <div id="myDropdown" class="dropdown-content">
                <a href="?p=shop&o=prix_asc">Prix croissant</a>
                <a href="?p=shop&o=prix_desc">Prix decroissant</a>
                <a href="?p=shop&o=asc">Nom croissant</a>
                <a href="?p=shop&o=desc">Nom decroissant</a>

                <div>
                    <h3>Categorie</h3>
                    <?php
                    $data = $db->prepare('select * from categorie order by name');
                    $data->execute();
                    $result = $data->fetchAll(PDO::FETCH_ASSOC);
                    foreach ($result as $row) {
                        

                    ?>

                        <div class="list-group-item checkbox">
                            <label><input type="checkbox" value="<?php echo $row['name']; ?>"> <?php echo $row['name']; ?></label>
                        </div>

                    <?php
                    }
                    ?>

                </div>

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
                echo "<img src= ./{$product[$i]['image']} class='img_article'><br>";
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
        <a>&laquo;</a>
        <?php
        for ($i = 0; $i < round(count($product) / 9, 0, PHP_ROUND_HALF_UP); $i++) {
        ?>
            <a href='?p=shop&page=<?= $i ?>'><?= $i + 1 ?></a>
        <?php
        }
        ?>

        <a href="#">&raquo;</a>
    </div>
</div>


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