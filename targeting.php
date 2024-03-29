<?php
print_r($_SESSION);
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/variable.css?<?=date("Y-m-d H:i:s")?>">
    <link rel="stylesheet" href="css/css.css?<?=date("Y-m-d H:i:s")?>">
    <link rel="stylesheet" href="css/style.css?<?=date("Y-m-d H:i:s")?>">
    <link rel="stylesheet" href="assets/style.css?<?=date("Y-m-d H:i:s")?>">

<!--    <link rel="stylesheet" href="css/webd.css">-->
    <link rel="stylesheet" href="css/targeting.css?<?=date("Y-m-d H:i:s")?>">
    <link rel="stylesheet" href="css/m.css?<?=date("Y-m-d H:i:s")?>">
    <title>Dream Marketing</title>
</head>

<body  class="skill">
<header class="container_header">
    <?php include ("components/header.php")?>
    <div class="text">
        <h1>Dreams</h1>
    </div>
    <div class="scroll">
        <p>scroll to discover</p>
    </div>
</header>
<section id="targeting" class = "targeting">
    <?=translate($query_main,"targeting_page_text");?>
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
