<?php
//$language_get = $_GET["language"] ? $_GET["language"] : 2;
//$language = 1;
//$host = "localhost";
//$login = "root";
//$password = "";
//$bd_name = "dreams";
//
//$connect = mysqli_connect($host, $login, $password, $bd_name);
//if (!$connect) {
//    die("Connection failed: " . mysqli_connect_error());
//}
//$sql = "SELECT * FROM `translate` WHERE `language` = '$language_get'";
//$query_main= mysqli_query($connect, $sql);
////$query =$query_main->fetch_array();
//if ($query_main->num_rows==0){
//    header("Location: index.php");
//    die();
//}
//function translate($query,$name){
//    foreach($query as $item){
//        if($item["name"] == $name){
//            return $item["text"];
//        }
//    }
//}
//
//?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/css.css?<?=date("Y-m-d H:i:s")?>">
    <link rel="stylesheet" href="css/style.css?<?=date("Y-m-d H:i:s")?>">
    <link rel="stylesheet" href="assets/style.css?<?=date("Y-m-d H:i:s")?>">

<!--    <link rel="stylesheet" href="css/webd.css">-->
    <link rel="stylesheet" href="css/targeting.css?<?=date("Y-m-d H:i:s")?>">
    <link rel="stylesheet" href="css/m.css">
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
<script src="js/autre.js"></script>
</body>
</html>
