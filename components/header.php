<?php

if (isset($_GET["language"])) {
    $language_get = $_GET["language"];
} else {
    $language_get = 2;
}
//$language_get = $_GET["language"] ? $_GET["language"] : 2;

$host = "localhost";
$login = "root";
$password = "";
$bd_name = "dreams";

$connect = mysqli_connect($host, $login, $password, $bd_name);
if (!$connect) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql = "SELECT * FROM `translate` WHERE `language` = '$language_get'";
$query_main = mysqli_query($connect, $sql);
//$query =$query_main->fetch_array();
if ($query_main->num_rows == 0) {
    header("Location: index.php");
    die();
}
function translate($query, $name)
{
    foreach ($query as $item) {
        if ($item["name"] == $name) {
            return $item["text"];
        }
    }
}
//$host=
?>
<div class="header_nav">
    <a href="index.php"><p>Marketing agency</p></a>
    <div class="language">
        <img src="res/language.svg" alt="" onclick="open_language(this)">

        <ul>
            <li><a href="index.php?language=1">RU</a></li>
            <li><a href="index.php?language=2">ENG</a></li>
            <li><a href="index.php?language=3">FR</a></li>
        </ul>
    </div>

    <ul class="spisok">
        <li><a href="index.php?scroll_block=contact"><?= translate($query_main, "home"); ?></a></li>
        <li><a href="#information"><?= translate($query_main, "about us"); ?></a></li>
        <li><a href="#about"><?= translate($query_main, "services"); ?></a></li>
        <li><a href="#blogy"><?= translate($query_main, "blog"); ?></a></li>
        <li><a href="#contact"><?= translate($query_main, "contact us"); ?></a></li>
    </ul>
    <div class="burger" onclick="openBurger()">
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
    </div>
    <div class="menu_mobile_navigation">
        <div class="btn_cross">
            <div class="name">
              <p>Marketing agency</p>
            </div>
            <img src="res/cross2.svg" alt="" onclick="openBurger()">
        </div>
        <ul>
            <li><a href="#home" onclick="openBurger()"><?= translate($query_main, "home"); ?></a></li>
            <li><a href="#information" onclick="openBurger()"><?= translate($query_main, "about us"); ?></a></li>
            <li><a href="#about" onclick="openBurger()"><?= translate($query_main, "services"); ?></a></li>
            <li><a href="#blogy" onclick="openBurger()"><?= translate($query_main, "blog"); ?></a></li>
            <li class="hr"></li>
            
            <li>
                <img src="res/call.svg" alt="">
                <a href="#contact"><?= translate($query_main, "contact us"); ?></a></li>
            <li>
                <img src="res/mail.png" alt="">
                <a href="#contact">info@dreamsagency.net</a></li>
        </ul>
    </div>
</div>
<script defer src="js/extra.js"></script>