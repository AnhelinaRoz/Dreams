<?php

?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="cache-control" content="no-cache">
    <meta http-equiv="expires" content="0">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/itc-slider.css">
    <!-- JavaScript -->
    <script src="assets/itc-slider.js?<?=date("Y-m-d H:i:s")?>" defer></script>
    <link rel="stylesheet" href="css/css.css?<?=date("Y-m-d H:i:s")?>">
    <link rel="stylesheet" href="css/style.css?<?=date("Y-m-d H:i:s")?>">
    <link rel="stylesheet" href="assets/style.css?<?=date("Y-m-d H:i:s")?>">
    <title>Dream Marketing</title>
    <meta http-equiv="cache-control" content="no-cache">
    <meta http-equiv="expires" content="0"><!-- CSS -->

</head>

<body class="body">
<script>
    let get = "<?=$_GET["block"]?>"
    console.log(get)
</script>
<header id="home">
    <div class="canvas_background_wrapper">
        <canvas class="paints canvas_background" width="11" height="122"></canvas>
    </div>
    <?php include ("components/header.php")?>
<!--    <div class="header_nav">-->
<!--        <p>Marketing agency</p>-->
<!--        <div class="language">-->
<!--            <img src="res/language.svg" alt=""onclick="open_language(this)">-->
<!---->
<!--            <ul>-->
<!--                <li><a href="index.php?language=1">RU</a></li>-->
<!--                <li><a href="index.php?language=2">ENG</a></li>-->
<!--                <li><a href="index.php?language=3">FR</a></li>-->
<!--            </ul>-->
<!--        </div>-->
<!--        <ul class="spisok">-->
<!---->
<!--            <li><a href="#home">--><?php //=translate($query_main,"home");?><!--</a></li>-->
<!--            <li><a href="#information">--><?php //=translate($query_main,"about us");?><!--</a></li>-->
<!--            <li><a href="#about">--><?php //=translate($query_main,"services");?><!--</a></li>-->
<!--            <li><a href="#blogy">--><?php //=translate($query_main,"blog");?><!--</a></li>-->
<!--            <li><a href="#contact">--><?php //=translate($query_main,"contact us");?><!--</a></li>-->
<!--        </ul>-->
<!---->
<!---->
<!---->
<!---->
<!---->
<!--        <div class="burger" onclick="openBurger(this)">-->
<!--            <div class="line"></div>-->
<!--            <div class="line"></div>-->
<!--            <div class="line"></div>-->
<!--            <div class="burgerContent hideBlock">-->
<!--                <ul>-->
<!--                    <li><a href="#home">HOME</a></li>-->
<!--                    <li><a href="#information">ABOUT US</a></li>-->
<!--                    <li><a href="#about">SERVICES</a></li>-->
<!--                    <li><a href="#blogy">BLOG</a></li>-->
<!--                    <li><a href="#contact">CONTACT US</a></li>-->
<!--                </ul>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
    <div class="text">
        <h1>Dreams</h1>
        <a href="https://uahelp.monobank.ua/">#<span class="blue">Support</span><span class="yellow">Ukraine</span></a>
    </div>
    <div class="scroll">
        <p class="pc"><a href="#about">scroll to discover</a></p>
        <p class="mobile"><a href="#about">tap to discover</a></p>
    </div>
</header>



<div id="information" class="about-us-block">
    <h2 class="title2">About Us</h2>
   <p><?=translate($query_main,"about_text_blog");?></p>
</div>
<div class="about_mobile_wrapper">

<div class="about_mobile web">
    <div class="text">
        <div>
            <h2>Web Development</h2>
            <a href="webd.php" class="glow ">Learn more</a>
        </div>
        <img src="Background2.png" alt="">


    </div>
</div>
<div class="about_mobile targeting">
    <div class="text">
        <div>
            <h2>Targeting</h2>
            <a href="webd.php" class="glow ">Learn more</a>
        </div>
        <img src="targetgirl.png" alt="">
    </div>
</div>
</div>
<div id="about" class="about_pc service parallax parallax_wrapper">
    <div class="text_wrapper">
        <div class="text parallax_label">
            <h3>Web Development</h3>
            <p><?=translate($query_main,"web_development");?></p>
            <a href="webd.php" class="glow "><?=translate($query_main,"Learn more");?></a>
        </div>
    </div>
    <div class="d-flex">
        <div class="image"
             style="background: url('res/1.png') no-repeat center; background-size: cover;"
             data-paroller-factor="0.5"
             data-paroller-factor-md="0.3"
             data-paroller-factor-sm="0.2"
             data-paroller-factor-xs="0.1"
        >
        </div>
    </div>
</div>

<div class="about_pc smm parallax parallax_wrapper">
    <div class="d-flex">
        <div class="image left_img"
             style="background: url('res/2.JPG') no-repeat center; background-size: cover;"
             data-paroller-factor="0.5"
             data-paroller-factor-md="0.3"
             data-paroller-factor-sm="0.2"
             data-paroller-factor-xs="0.1"
        >
        </div>
    </div>
    <div class="text_wrapper">
        <div class="text parallax_label">
            <h3>Targeting</h3>
            <p><?=translate($query_main,"targeting");?></p>
            <a href="targeting.php" class="glow"><?=translate($query_main,"Learn more");?></a>
        </div>
    </div>
</div>
<div id="blogy" class="blog">
    <div class="container">
        <h2 class="title2">Blog</h2>
        <div class="itc-slider" data-slider="itc-slider" data-autoplay="false" data-loop="1000">
            <div class="itc-slider__wrapper">
                <div class="itc-slider__items">
                    <div class="itc-slider__item">
                        <a href="blog.php?theme=understanding">
                            <div class="img"><img src="audience.webp" alt=""></div>
                            <div class="text">
                                <p class="date">March 28, 2023</p>
                                <h3>Understanding Your Target Audience: Tips and Strategies</h3>
                            </div>
                        </a>
                    </div>
                    <div class="itc-slider__item">
                        <a href="blog.php?theme=power">
                            <div class="img"><img src="targetaudience.webp" alt=""></div>
                            <div class="text">
                                <p class="date">March 23, 2023</p>
                                <h3>The Power of Personalization: Tips for Customizing Your Website to Your Target Audience</h3>
                            </div>
                        </a>
                    </div>
                    <div class="itc-slider__item">
                        <a href="blog.php?theme=strategy">
                            <div class="img"><img src="blogstr.jpeg" alt=""></div>
                            <div class="text">
                                <p class="date">February 20, 2023 </p>
                                <h3>How to Create an Effective Blog Strategy for Your Website</h3>
                            </div>
                        </a>
                    </div>
                    <div class="itc-slider__item">
                        <a href="blog.php?theme=storytelling">
                            <div class="img"><img src="storytelling.png" alt=""></div>
                            <div class="text">
                                <p class="date">January 18, 2023 </p>
                                <h3>The Power of Storytelling in Website Content: How to Engage Your Audience and Build Connections</h3>
                            </div>
                        </a>
                    </div>
                    <div class="itc-slider__item">
                        <a href="blog.php?theme=multilingual">
                            <div class="img"><img src="multilingual.jpeg" alt=""></div>
                            <div class="text">
                                <p class="date">January 1, 2023 </p>
                                <h3>The Benefits and Challenges of Creating a Multilingual Website</h3>
                            </div>
                        </a>
                    </div>
                    <div class="itc-slider__item">
                        <a href="blog.php?theme=productivity">
                            <div class="img"><img src="productivity.png" alt=""></div>
                            <div class="text">
                                <p class="date">December 27, 2022</p>
                                <h3>10 Ways to Boost Your Productivity at Work</h3>
                            </div>
                        </a>
                    </div>
                </div>
            </div>

            <button class="itc-slider__btn itc-slider__btn_prev"></button>
            <button class="itc-slider__btn itc-slider__btn_next"></button>
        </div>
    </div>
</div>
<!--<div class="blog-block">-->
<!--    <h2>Blog</h2>-->
<!--    <ul>-->
<!--        <li>-->
<!--            <a href="#">-->
<!--                <img src="audience.webp" alt="">-->
<!--                <h3>Understanding Your Target Audience: Tips and Strategies</h3>-->
<!--                <span class="date">January 1, 2023</span>-->
<!--            </a>-->
<!--        </li>-->
<!--        <li>-->
<!--            <a href="#">-->
<!--                <img src="article2.jpg" alt="">-->
<!--                <h3>Article 2</h3>-->
<!--                <span class="date">February 15, 2023</span>-->
<!--            </a>-->
<!--        </li>-->
<!--        <li>-->
<!--            <a href="#">-->
<!--                <img src="article3.jpg" alt="">-->
<!--                <h3>Article 3</h3>-->
<!--                <span class="date">March 28, 2023</span>-->
<!--            </a>-->
<!--        </li>-->
<!--        <li>-->
<!--            <a href="#">-->
<!--                <img src="article4.jpg" alt="">-->
<!--                <h3>Article 4</h3>-->
<!--                <span class="date">April 12, 2023</span>-->
<!--            </a>-->
<!--        </li>-->
<!--        <li>-->
<!--            <a href="#">-->
<!--                <img src="article5.jpg" alt="">-->
<!--                <h3>Article 5</h3>-->
<!--                <span class="date">May 20, 2023</span>-->
<!--            </a>-->
<!--        </li>-->
<!--    </ul>-->
<!--</div>-->


<div id="contact" class="RequestAProposal">
<!--    <div class="canvas_background_wrapper">-->
<!--&lt;!&ndash;        <canvas class="paints canvas_background" width="11" height="122"></canvas>&ndash;&gt;-->
<!--    </div>-->
    <div class="scroll">
        <p></p>
    </div>
    <h2>REQUEST A PROPOSAL</h2>
    <form class="" action="mailer.php" method="post">
        <input name="email" placeholder="Your E-mail" type="email">
        <input name="name" placeholder="Your name" type="text">
        <textarea name="text" placeholder="Tell us your goal!" rows="8" cols="80"></textarea>
        <div class="button">
            <button type="submit" name="button">Send</button>
        </div>
    </form>
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


<script src="js/js.js"></script>
<script src="js/addon.js?<?=date("Y-m-d H:i:s")?>"></script>
<script src="js/parallax.js"></script>
<script src="js/scrolling.js?<?=date("Y-m-d H:i:s")?>"> </script>
<!-- Scripts -->
<script async defer src="https://buttons.github.io/buttons.js"></script>
<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.2.1.min.js" crossorigin="anonymous"></script>
<!--paroller.js-->
<script src="dist/jquery.paroller.js"></script>
<script src="js/extra.js?<?=date("Y-m-d H:i:s")?>"></script>
<script src="assets/main.js?<?=date("Y-m-d H:i:s")?>"></script>
<script src="js/js2.js?<?=date("Y-m-d H:i:s")?>"> </script>
<script>
    $(document)
        .ready(function () {
            //initialize paroller.js
            $('[data-paroller-factor]').paroller();
            //initialize paroller.js and set options for elements with .paroller class
            $('.paroller-example').paroller({
                factorXs: 0.1,
                factorSm: 0.1,
                factorMd: -0.4,
                factorLg: -0.5,
                factorXl: -0.6,
                factor: -0.4,
                type: 'foreground',
                direction: 'horizontal',
                transition: 'transform .3s ease-out'
            });
        });
</script>

</body>

</html>
