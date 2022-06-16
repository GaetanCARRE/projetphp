<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="styles.css">
    <title>Home</title>
    <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous">
    </script>
    <script>
        $(function() {
            $("#header").load("header/header.html");
            $("#footer").load("header/footer.html");
        });
    </script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&display=swap" rel="stylesheet">
</head>

<body>

    <header>

        <div class="grid-container-header">
            <h1 class="header_h1 a1">F&S</h1>

            <a href="/website/src/account/index.php" class="a2" id="open">
                <ion-icon name="person-circle-outline" class="logo_header"></ion-icon>
            </a>
            <!-- <div class="flex-container">
<div class="modal-container">
<div class="modal">
    <h1>le modal marche</h1>

    <button id="close">
        close me
    </button>
</div>
</div>
</div> -->
            <a href="./" class="a3">
                <ion-icon name="home-outline" class="logo_header"></ion-icon>
            </a>
            <a href="./?p=checkout" class="a4">
                <ion-icon name="cart-outline" class="logo_header"></ion-icon>
            </a>
        </div>
    </header>

    <div class="flex-wrapper">