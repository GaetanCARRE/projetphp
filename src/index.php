<?php
session_start();
$db = require_once('./config/config.php');



require('./app/shop_functions.php');
require('./app/account_functions.php');


require_once('./template/header.php');


$page = "home";

if(isset($_GET['p'])) {
    $page = trim($_GET['p']);
}

switch($page) {

    case "home":
        require_once("./pages/home.php");
        break;
    
    case "shop":
        require_once("./pages/shop.php");
        break;

    case "checkout":
        require_once("./pages/checkout.php");
        break;
    case "admin":
        require_once(".pages/admin.php");
        break;
        
    default:
        require_once('./pages/404.php');
        break;

}


require_once('./template/footer.php');
