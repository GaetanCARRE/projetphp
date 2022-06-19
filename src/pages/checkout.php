<?php
if (isset($_GET['id'])) {
    foreach ($_SESSION['panier'] as $key => $value) {
        if ($value['id'] === $_GET['id']) {

            unset($_SESSION['panier'][$key]);
            break;
        }
    }
}
?>

<div class="grid-container-checkout">
    <div class="product-checkout">
        <div class="votrepanier">
            <h2>Votre panier</h2>
        </div>
        <?php
        foreach ($_SESSION['panier'] as $key) {
            echo "<div id=" . $key['id'] . " >";
            echo " <img src=" . $key['image'] . " class='img_panier' width='20%'>";
            echo " </div>";

            echo "<div>";
            echo $key['nom'];
            echo " </div>";

            echo "<div>";
            echo $key['prix'];
            echo " €</div>";


        ?>

            <div class="delete-checkout"></div>
            <!-- A afficher en meme temps que produit taille quantitée prix  -->
            <a href="?p=checkout&id=<?php echo $key['id'] ?>">
                <ion-icon class="delete" name="close-circle-outline"></ion-icon>
            </a>
            <!-- A afficher en meme temps que produit taille quantitée prix  -->



        <?php } ?>


    </div>

    <div class="payment-checkout">
        <form class='checkout-form' action="" method="post">
            <h2>Paiement</h2>
            <!-- <div>Méthode de paiement
                    <br>
                    <input type="checkbox" class="payment-checkbox"> <label>Visa</label><br>
                    <input type="checkbox" class="payment-checkbox"> <label>MasterCard</label>

                </div> -->

            Nom sur la carte
            <input class="checkout-input" name="card_name" placeholder="Prenom Nom" required />
            Numero de carte
            <input class="checkout-input" name="card num" placeholder="Numero de la carte" required />
            Date d'expiration
            <input class="checkout-input" name="expiration_date" placeholder="MM/YY" required />
            CVV
            <input class="checkout-input" name="cvv" placeholder="cvv" required />


            <h2>Livraison</h2>


            Adresse
            <input class="checkout-input" type="adresse" name="adresse" required />
            Ville
            <input class="checkout-input" type="Ville" name="Ville" placeholder="" required />
            Code Postal
            <input class="checkout-input" type="CodePostal" name="CodePostal" placeholder="" required />

            <button class='button-payment' type="submit" className="button">Payer</button>
        </form>
    </div>

    <?php
    function Totalprix($id)
    {
        $somme = 0;
        foreach ($id as $key => $value) {
            $somme += intval($value['prix']);
        }
        return $somme;
    }

    $Total = Totalprix($_SESSION['panier']);
    ?>

    <div class="total-checkout">
        <div class="total">
            <h3> Produit</h3>
            <h3><?php echo $Total ?> €</h3>
            <h3>Livraison</h3>
            <h3>10 €</h3>


        </div>

        <div class="total">
            <h2>Total: </h2>
            <h2><?php echo $Total + 10 ?> €</h2>
        </div>
    </div>

</div>