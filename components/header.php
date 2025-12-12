<?php

if (isset($_GET["language"])) {
    $language_get = $_GET["language"];
} else {
    $language_get = 2;
}
//$language_get = $_GET["language"] ? $_GET["language"] : 2;

include("env.php");



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
    <a href="index.php"><p>Digital agency</p></a>
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
        <li></li>
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
                <p class="moving-gradient">Digital agency</p>
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
                <li><a href="<?=$link ?>" onclick="openBurger()"></a></li>
            <?php } ?>

        </ul>
    </div>
</div>
<script defer src="js/extra.js"></script>