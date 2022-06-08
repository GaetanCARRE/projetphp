<?php
$ordre = "asc";
$cat = null;
$page = 0;
if (isset($_GET['o'])){    
    $ordre = $_GET['o'];
   
}
if (isset($_GET['c'])){
    $cat = $_GET['c'];
    
}
if (isset($_GET['pa'])){
    if($_GET['pa']> sizeof($product)/9+1 or $_GET['pa']< 0)
        header("Location: ?p=shop&o=$ordre&c=$cat");
    else
        $page = $_GET['pa'];
}
$product = afficher($ordre, $db, $cat);

?>

<div class="container-grid-shop">
    <div class="filtre_gauche">
        <div class="dropdown">
            <button onclick="myFunction()" class="dropbtn">FILTRES</button>
            <div id="myDropdown" class="dropdown-content">
                <a href="?p=shop">Reinitialiser</a>
                <a href="?p=shop&o=prix_asc&c=<?php echo $cat; ?>&pa=<?php echo $page;?>">Prix croissant</a>
                <a href="?p=shop&o=prix_desc&c=<?php echo $cat; ?>&pa=<?php echo $page;?>">Prix decroissant</a>
                <a href="?p=shop&o=asc&c=<?php echo $cat; ?>&pa=<?php echo $page?>;">Nom croissant</a>
                <a href="?p=shop&o=desc&c=<?php echo $cat; ?>&pa=<?php echo $page?>;">Nom decroissant</a>

                <div>
                    <h3>Categorie</h3>
                    <?php
                    $data = $db->prepare('select * from categorie order by name');
                    $data->execute();
                    $result = $data->fetchAll(PDO::FETCH_ASSOC);
                    foreach ($result as $row) {


                    ?>

                        <div class="list-group-item checkbox">
                            <label><a href="?p=shop&o=<?php echo $ordre ?>&c=<?php echo $row['id']; ?>&pa=0"> <?php echo $row['name']; ?></a></label>
                        </div>

                    <?php
                    }
                    ?>

                </div>
                    
                <div class="Check">
                <h3>Prix</h3>
                <form action="" method="POST">
                        <input type="text" placeholder="Prix min">
                        <input type="text" placeholder="Prix max">
                        <input type="submit" >
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="shop_droite">
        <div class="grid_column_shop">

            <?php


            $i = 0;
            $j = 9;
            $num_art = 0;
            for ($i; $i < $j and $i+$page*9<sizeof($product); $i++) {
                echo "<div class='article'>";
                echo "<img src= ./{$product[$i+$page*9]['image']} class='img_article'><br>";
                echo $product[$i+$page*9]['nom'] . "<br>" . $product[$i+$page*9]['prix'];
            
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
        <a href="?p=shop&o=<?php echo $ordre?>&c=<?php echo $cat; ?>&pa=<?php ($pageinf = $page-1); $pageinf = $pageinf%(sizeof($product)/9+1);echo $page;?>">&laquo;</a>
        <?php
        for ($i = 0; $i < ceil((sizeof($product) )/ 9 ); $i++) {
        ?>
            <a <?php if($page == $i) echo"class='active'";?> href='?p=shop&o=<?php echo $ordre?>&c=<?php echo $cat; ?>&pa=<?= $i ?>'><?= $i + 1 ?></a>
        <?php
        }
        ?>

        <a href="?p=shop&o=<?php echo $ordre?>&c=<?php echo $cat; ?>&pa=<?php ($page++); $page = $page%(sizeof($product)/9+1);echo $page;?>">&raquo;</a>
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