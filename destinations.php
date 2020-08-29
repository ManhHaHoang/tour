<?php
$ver = time();
$url = 'http://' . $_SERVER['SERVER_NAME'] . '/';
$name = $_SERVER['SERVER_NAME'];
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no, user-scalable=no">
    <link type="image/x-icon" rel="shortcut icon" sizes="16x16" href="/images/favicon.png?v=<?= $ver ?>"/>
    <link rel="icon" sizes="16x16 32x32" type="image/png" href="images/favicon.png?v=<?= $ver ?>" >
    <title>myTravel - Vietnam Travel Agency</title>
    <meta name="author" content="Manh Ha Hoang">
    <meta name="title" content="myTravel - Vietnam Travel Agency">
    <meta name="description" content="Home to an extensive collection of historical and cultural attractions, Vietnam is undoubtedly one of the most fascinating countries in Southeast Asia!">
    <link rel="stylesheet" href="/assets/css/icon.css?v=<?=$ver?>">
    <link rel="stylesheet" href="/assets/css/layout.css?v=<?=$ver?>">
    <link rel="stylesheet" href="/assets/css/styles.css?v=<?=$ver?>">
    <link rel="stylesheet" href="/assets/css/responsive.css?v=<?=$ver?>">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700;900&display=swap" rel="stylesheet">
</head>
<body id="main-body">
    <style media="screen">

    .home-destinations-group {
        display: flex;
        justify-content: flex-start;
        align-items: stretch;
    }

    .home-destination-item {
        position: relative;
        margin-bottom: 25px;
    }

    .home-destination-item a {
        display: block;
        width: 100%;
        height: 100%;
        margin: 0;
        position: relative;
        padding: 0
    }

    .home-destination-item img {
        height: 100%;
        display: block;
    }

    .home-destination-desc {
        position: absolute;
        width: 100%;
        bottom: 0;
        left: 0;
        z-index: 8;
        text-align: center;
        color: var(--white);
    }
    .vietnam-box {
        width: 700px;
        height: 300px;
        display: flex;
        justify-content: center;
        align-items: center;
        position: relative;
    }

    .description-page-desc {
        width: calc(100% - 700px);
        text-align: justify;
        padding: 15px 25px;
        background-color: var(--primary);
        color: var(--white);
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .main-destination {
        height: 290px;
    }

    .our-destinations .home-destination-item:first-child {
        margin-right: 15px;
    }
    .our-destinations .home-destination-item + .home-destination-item {
        margin-left: 15px;
    }

    .our-destinations .home-destination-item:nth-of-type(2) {
        margin-right: 15px
    }


    .home-destination-item:not(.page-description):hover a:after {
        position: absolute;
        bottom: 3px;
        height: 100%;
        width: 100%;
        content: " ";
        display: block;
        background-image: -webkit-gradient(linear,left top,left bottom,from(hsla(0,0%,100%,0)),to(rgba(0, 0, 0, 0.5)));
        background-image: linear-gradient(180deg,hsla(0,0%,100%,0),rgba(0, 0, 0, 0.5));
        z-index: 0;
        transition: all 350ms ease;
    }

    </style>
    <?php include 'common/header.php'; ?>
    <div class="banner page-banner transformx">
        <div id="blockVideo" data-vide-bg=" mp4:<?= $url ?>videos/welcome-vietnam.mp4, ogv:<?= $url ?>videos/welcome-vietnam.ogv, webm:<?= $url ?>videos/welcome-vietnam.webm, poster:<?= $url ?>images/homepage-poster.jpg" data-vide-options="posterType: jpg">
            <div style="position: absolute; inset: 0px; overflow: hidden; background-size: cover; background-color: transparent; background-repeat: no-repeat; background-position: 50% 50%; background-image: none;">
                <video autoplay="" loop="" muted="" style="margin: auto; visibility: visible; opacity: 1; width: 1364px; height: auto;"><source type="video/mp4" src="<?= $url ?>videos/welcome-vietnam.mp4" /><source type="video/webm" src="<?= $url ?>videos/welcome-vietnam.webm" /><source type="video/ogg" src="<?= $url ?>videos/welcome-vietnam.ogv">
                </video>
            </div>
        </div>
        <div class="breadcrumb-box">
            <div class="page-title site-w">
                Destinations
            </div>
            <div class="site-w">
                <ul class="breadcrumb">
                    <li>
                        <a href="/">Home</a>
                    </li>
                    <li>
                        Our Destinations
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <main class="main-content">
        <div class="site-w">
            <h1 class="main-title">Our Destinations</h1>
            <div class="our-destinations">
                <div class="home-destinations-group">
                    <div class="home-destination-item main-destination description-page-desc">
                        From balmy coastlines with sugar-white beaches, to jungle trails, magnificent temples and unknown traditions, Southeast Asia boasts treasures and paradise for every taste and desire. At Easia Travel, we know the possibilities are as numerous as they are exhilarating, and we delight in working with you to design the most incredible trips to showcase the best of our 5 magnificent destinations: Vietnam, Thailand, Laos, Myanmar, and Cambodia.
                    </div>
                    <div class="home-destination-item main-destination vietnam-box">
                        <a href="/vietnam-destination" title="" rel="nofollow">
                            <img src="/images/destinations/vietnam.jpg" alt="Vietnam">
                        </a>
                        <div class="home-destination-desc">
                            <p><span class="title20">Vietnam</span><br>
                                +99 properties
                            </p>
                        </div>
                    </div>

                </div>
                <div class="home-destinations-group">
                    <div class="home-destination-item main-destination">
                        <a href="/vietnam-tour" title="" rel="nofollow">
                            <img src="/images/destinations/cambodia.png" alt="">
                        </a>
                        <div class="home-destination-desc">
                            <p><span class="title20">Cambodia</span><br>
                                +31 properties
                            </p>
                        </div>
                    </div>
                    <div class="home-destination-item main-destination">
                        <a href="/vietnam-tour" title="" rel="nofollow">
                            <img src="/images/destinations/thaialand.png" alt="">
                        </a>
                        <div class="home-destination-desc">
                            <p><span class="title20">Thailand</span><br>
                                +22 properties
                            </p>
                        </div>
                    </div>

                </div>
                <div class="home-destinations-group">
                    <div class="home-destination-item">
                        <a href="/vietnam-tour/" title="" rel="nofollow">
                            <img src="/images/destinations/laos.jpg" alt="">
                        </a>
                        <div class="home-destination-desc">
                            <p><span class="title20">Laos</span><br>
                                +15 properties
                            </p>
                        </div>
                    </div>
                    <div class="home-destination-item">
                        <a href="/vietnam-tour/" title="" rel="nofollow">
                            <img src="/images/destinations/myanmar.png" alt="">
                        </a>
                        <div class="home-destination-desc">
                            <p><span class="title20">Myanmar</span><br>
                                +15 properties
                            </p>
                        </div>
                    </div>
                    <div class="home-destination-item">
                        <a href="/vietnam-tour/ho-chi-minh-city-saigon" title="" rel="nofollow">
                            <img src="/images/destinations/singapore.jpg" alt="">
                        </a>
                        <div class="home-destination-desc">
                            <p><span class="title20">Singapore</span><br>
                                +9 properties
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <?php include 'common/footer.php'; ?>

</body>
</html>
