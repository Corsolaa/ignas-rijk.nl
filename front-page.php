<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ignas Rijk</title>

    <link rel="stylesheet" href="http://www.brunobouwman.nl/standard.css">
    <link rel="stylesheet" href="assets/css/main.css">

    <link rel="icon" href="https://www.brunobouwman.nl/images/src/ignas-logo-23.webp">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville:ital@1&family=Noto+Sans:ital,wght@0,400;0,600;1,400;1,600&display=swap" rel="stylesheet">
</head>
<body>

<header>
    <div class="logo">
        <img src="https://www.brunobouwman.nl/images/src/ignas-logo-23.webp" alt="">
        <p class="title is-size-1">Ignas Rijk</p>
    </div>
    <nav>
        <ul>
            <li class="is-size-4">home</li>
            <li class="is-size-4">gallerij</li>
            <li class="is-size-4">contact</li>
        </ul>
    </nav>
</header>

<main>
    <div class="text">
        <h1 class="is-size-2">Ignas Rijk</h1>
        <p class="sub is-size-3">subtext</p>
        <p class="is-size-3 hover_check">hover</p>
        <a href="#" class="is-size-4">link</a>
    </div>
    <div class="images">
        <img src="https://www.brunobouwman.nl/images/src/20231230_160252.jpg" alt="">
        <img src="https://www.brunobouwman.nl/images/src/20240115_142430.jpg" alt="">
        <img src="https://www.brunobouwman.nl/images/src/20240115_151117.jpg" alt="">
        <img src="https://www.brunobouwman.nl/images/src/IMG_20200426_114247.jpg" alt="">
    </div>
    <?php
    include "functions/splitMyArray.php";

    require "modules/module_gallery.php";
    require "modules/module-wide-image-3.php";
    require "modules/module-wide-image-1.php";
    ?>
</main>

</body>
</html>