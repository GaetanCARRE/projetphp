<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="styles.css">
    <title>Home</title>
    <script src="https://code.jquery.com/jquery-3.3.1.js"
        integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous">
        </script>
    <script>
        $(function () {
            $("#header").load("header/header.html");
            $("#footer").load("header/footer.html");
        });
    </script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</head>

<body>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400&display=swap" rel="stylesheet">
    <div class="top">
        <div id="header"></div>


        <div class="div_button_home">
            <img src="img/banner.jpg" class="banner" alt="banner">
            <a href="shop/shop.html">
                <button class="button_home" onclick="">SHOP NOW</button>
            </a>
        </div>
    </div>
    <br>
    <br>
    <br>
    <div class="grid-container-home">
        <div class="img_home_1">
            <img class="img_home" src="img/stussy.jpg" alt="Stussy">
            <h3>STUSSY</h3>
        </div>
        <div class="img_home_2">
            <img class="img_home" src="img/Parra.jpg" alt="Parra">
            <h3>PARRA</h3>

        </div>
        <div class="img_home_3">
            <img class="img_home" src="img/jordan.jpg" alt="Jordan">
            <h3>JORDAN</h3>
        </div>

    </div>
    <div id="footer"></div>
</body>


</html>