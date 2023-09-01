<?php
$page_name = $_GET["theme"];
$host = "localhost";
$login = "root";
$password = "";
$bd_name = "dreams";

$connect = mysqli_connect($host, $login, $password, $bd_name);
if (!$connect) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql = "SELECT * FROM `blog` WHERE `tag` = '$page_name'";
$query_main= mysqli_query($connect, $sql);
$query =$query_main->fetch_array();
if ($query_main->num_rows==0){
    header("Location: index.php");
    die();
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css?<?=date("Y-m-d H:i:s")?>">
    <link rel="stylesheet" href="css/blog.css?<?=date("Y-m-d H:i:s")?>">
    <title><?= $query["name"] ?></title>
</head>
<body>
<style>
    header{
        height: 100vh;
        overflow: hidden;
        /*background: url("<?=$query["img"]?>") no-repeat fixed;
        background-size: 524px;
        background-position-x: center;
        background-position-y: -63px;*/
        /*background: url("*/<?php //=$query["img"]?>/*") no-repeat;*/
        background: url("24.jpg") no-repeat;
        background-size: cover;
    }
</style>
<header>
    <?php include ("components/header.php")?>
    <!--    <img src="audience.webp" alt="">-->
</header>
<div class="content">
    <h1><?= $query["name"] ?></h1>
    <div class="text">
        <?= $query["text"] ?>
    </div>
</div>
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
</body>
</html>



