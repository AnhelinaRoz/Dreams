<?php

if (isset($_GET["language"])) {
    $language_get = $_GET["language"];
} else {
    $language_get = 2;
}
//$language_get = $_GET["language"] ? $_GET["language"] : 2;

include("env.php");


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

$nav_links = [
    [
        'name' => 'home',
        'link' => 'home'
    ],[
        'name' => 'about us',
        'link' => 'information'
    ],[
        'name' => 'services',
        'link' => 'about'
    ],[
        'name' => 'blog',
        'link' => 'blogy'
    ],[
        'name' => 'contact us',
        'link' => 'contact'
    ],

];
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
        <?php
        foreach ($nav_links as $item) {
            $link = "";
            if ($_SERVER['PHP_SELF'] == '/Dreams/index.php'){
                $link = '#';
            }
            else{
                $link = 'index.php?scroll_block=';
            }
            $link .= $item["link"];
            ?>
        <li><a href="<?=$link ?>"><?= translate($query_main, $item['name']); ?></a></li>
        <?php } ?>
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
            <?php
            foreach ($nav_links as $item) {
                $link = "";
                if ($_SERVER['PHP_SELF'] == '/Dreams/index.php'){
                    $link = '#';
                }
                else{
                    $link = 'index.php?scroll_block=';
                }
                $link .= $item["link"];
                ?>
                <li><a href="<?=$link ?>" onclick="openBurger()"><?= translate($query_main,  $item['name']); ?></a></li>
            <?php } ?>
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