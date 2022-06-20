<?php
session_start();
require('./shop_functions.php');
$total = Totalprix($_SESSION['panier']);
$user = $_SESSION['user'];
$cardName = htmlspecialchars($_POST['cardName']);
$address = htmlspecialchars($_POST['address']);
$cvv = htmlspecialchars($_POST['cvv']);
$numCard = htmlspecialchars($_POST['numCard']);
$city = htmlspecialchars($_POST['city']);
$zipCode = htmlspecialchars($_POST['zipCode']);
$c = strlen($cvv);

// $session = $_SESSION['user'];
if (isset($_SESSION['user'])){
    if (strlen($numCard) == 16) {
        if (strlen($cvv) == 3) {
            if (strlen($zipCode) == 5) {
                for ($i = 0; $i < sizeof($_SESSION); $i++) {
                    $insert = $bdd->prepare('INSERT INTO commandes(username, total_price) VALUES (:user,:total)');
                    $insert->execute(array('user' => $user, 'total' => $total));
                }
                header('Location:../index.php?p=checkout&payment=success');
            } 
            else {
                header('Location:../index.php?p=checkout&payment=zip');
            }
        } 
        else {
            header('Location:../index.php?p=checkout&payment=cvv');
        }
    } 
    else
        header("Location:../index.php?p=checkout&payment=numcard");
} 
else
    header("Location:../index.php?p=checkout&payment=connexion");
