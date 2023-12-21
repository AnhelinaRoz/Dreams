<?php


?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/variable.css?<?=date("Y-m-d H:i:s")?>">
    <link rel="stylesheet" href="css/css.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/webd.css?093">
    <link rel="stylesheet" href="css/m.css">
    <title>Dream Marketing</title>
</head>

<body class="skill">
<header class="container_header">
    <?php include ("components/header.php")?>
<!--    <div class="header_nav">-->
<!--        <p>Marketing agency</p>-->
<!---->
<!--        <ul class="spisok">-->
<!--            <li><a href="webd.php?language=1">RU</a></li>-->
<!--            <li><a href="webd.php?language=2">ENG</a></li>-->
<!--            <li><a href="webd.php?language=3">FR</a></li>-->
<!--            <li><a href="#home">HOME</a></li>-->
<!--            <li><a href="index.php#about">ABOUT</a></li>-->
<!--            <li><a href="#contact">CONTACT US</a></li>-->
<!--        </ul>-->
<!---->
<!--        <div class="burger" onclick="openBurger(this)">-->
<!--            <div class="line"></div>-->
<!--            <div class="line"></div>-->
<!--            <div class="line"></div>-->
<!--            <div class="burgerContent hideBlock">-->
<!--                <ul>-->
<!--                    <li><a href="#home">HOME</a></li>-->
<!--                    <li><a href="index.php#about">ABOUT</a></li>-->
<!--                    <li><a href="#contact">CONTACT US</a></li>-->
<!--                </ul>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
    <div class="text">
        <h1>Dreams</h1>
    </div>
    <div class="scroll">
        <p>scroll to discover</p>
    </div>
</header>
<section id="web-development" class = "web-development">
    <?=translate($query_main,"webd_page_text");?>

    <a href="index.php?block=contact"><button><?=translate($query_main,"contact us");?></button></a>

</section>
<footer>
    <div class="logo">
        <img src="res/dreamss.jpg" alt="">
    </div>
    <div class="inf">
        <h3>MARKETING AGENCY DREAMS</h3>
        <ul>
            <li>Geneva, Switzerland</li>
            <li>+41799399629</li>
            <li>info@dreamsagency.net</li>
        </ul>
    </div>
</footer>
<script src="js/autre.js?<?=date("Y-m-d H:i:s")?>"></script>
</body>
</html>

