<?php

$cardName = htmlspecialchars($_POST['cardName']);
$address = htmlspecialchars($_POST['address']);
$cvv = htmlspecialchars($_POST['cvv']);
$numCard = htmlspecialchars($_POST['numCard']);
$city = htmlspecialchars($_POST['city']);
$zipCode = htmlspecialchars($_POST['zipCode']);
$c = strlen($cvv);
if (strlen($numCard )== 16) {
    if (strlen($cvv) == 3) {
        if (strlen($zipCode) == 5) {
            header('Location:../index.php?p=checkout&payment=success');
            for ($i=0; $i < sizeof($_SESSION); $i++) { 
                
            }
        }else{
            header('Location:../index.php?p=checkout&payment=zip');
        }
    }else
    {
        header('Location:../index.php?p=checkout&payment=cvv');
    }
}
else
    header("Location:../index.php?p=checkout&payment=numcard");