<div class="grid-container-checkout">
    <div class="product-checkout">
        <div class="votrepanier"><h2>Votre panier</h2></div>
        <div>Produit</div>
        <div>Taille</div>
        <div>Quantitée</div>
        <div>Prix</div>
        <div class="delete-checkout"></div>
        <!-- A afficher en meme temps que produit taille quantitée prix  -->
        <a href="">
            <ion-icon name="close-circle-outline"></ion-icon>
        </a>
        <!-- A afficher en meme temps que produit taille quantitée prix  -->

    </div>

    <div class="payment-checkout">
            <form action="" method="post">
                <h2>Paiement</h2>
                <div>Méthode de paiement
                    <br>
                    <input type="checkbox" class="payment-checkbox"> <label>Visa</label><br>
                    <input type="checkbox" class="payment-checkbox"> <label>MasterCard</label>

                </div>

                Nom sur la carte
                <input type="card_name" name="card_name" placeholder="Prenom Nom" required />
                Numero de carte
                <input type="card_num" name="card num" placeholder="Numero de la carte" required />
                Date d'expiration
                <input id="expiration_date" name="expiration_date" placeholder="MM/YY" required />
                CVV
                <input id="cvv" name="cvv" placeholder="cvv" required />


                <h2>Livraison</h2>


                Adresse
                <input type="adresse" name="adresse" required />
                Ville
                <input type="Ville" name="Ville" placeholder="" required />
                Code Postal
                <input type="CodePostal" name="CodePostal" placeholder="" required />

                <button class='button-payment' type="submit" className="button">Payer</button>
            </form>
    </div>

</div>