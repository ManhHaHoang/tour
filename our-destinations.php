<?php
$ver = time();

$url =  $url =  (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
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
    <link rel="stylesheet" href="assets/css/icon.css?v=<?=$ver?>">
    <link rel="stylesheet" href="assets/css/layout.css?v=<?=$ver?>">
    <link rel="stylesheet" href="assets/css/styles.css?v=<?=$ver?>">
    <link rel="stylesheet" href="assets/css/home.css?v=<?=$ver?>">
    <link rel="stylesheet" href="assets/css/slide.css?v=<?=$ver?>">
    <link rel="stylesheet" href="assets/css/responsive.css?v=<?=$ver?>">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700;900&display=swap" rel="stylesheet">
</head>
<body id="main-body">
    <?php include 'common/header.php'; ?>
    <div class="banner page-banner transformx">
        <img src="/images/our-destinations.jpg" alt="">
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
            <div class="page-description">
                From balmy coastlines with sugar-white beaches, to jungle trails, magnificent temples and unknown traditions, Southeast Asia boasts treasures and paradise for every taste and desire. At Easia Travel, we know the possibilities are as numerous as they are exhilarating, and we delight in working with you to design the most incredible trips to showcase the best of our 5 magnificent destinations: Vietnam, Thailand, Laos, Myanmar, and Cambodia.
            </div>
            <div class="my-destinations">
                <div class="destinations-group">
                    <div class="destination-item">
                        <a href="/vietnam">
                            <img src="/images/destinations/hoian.png" alt="">
                            <span class="destination-item-title"><i class="icon-location2"></i> Vienam</span>
                            <span class="destination-item-more">
                                View More
                                <i class="icon-arrow-long"></i>
                            </span>
                        </a>
                    </div>
                    <div class="destination-item">
                        <a href="/laos">
                            <img src="/images/destinations/vientiane.png" alt="">
                            <span class="destination-item-title"><i class="icon-location2"></i> Laos</span>
                            <span class="destination-item-more">
                                View More
                                <i class="icon-arrow-long"></i>
                            </span>
                        </a>
                    </div>
                </div>
                <div class="destinations-group">
                    <div class="destination-item">
                        <a href="/cambodia">
                            <img src="/images/destinations/cambodia.png" alt="">
                            <span class="destination-item-title"><i class="icon-location2"></i> Cambodia</span>
                            <span class="destination-item-more">
                                View More
                                <i class="icon-arrow-long"></i>
                            </span>
                        </a>
                    </div>
                </div>
                <div class="destinations-group">
                    <div class="destination-item">
                        <a href="/myanmar">
                            <img src="/images/destinations/myanmar.png" alt="">
                            <span class="destination-item-title"><i class="icon-location2"></i> Myanmar</span>
                            <span class="destination-item-more">
                                View More
                                <i class="icon-arrow-long"></i>
                            </span>
                        </a>
                    </div>
                    <div class="destination-item">
                        <a href="/thailand">
                            <img src="/images/destinations/thaialand.png" alt="">
                            <span class="destination-item-title"><i class="icon-location2"></i> Thailand</span>
                            <span class="destination-item-more">
                                View More
                                <i class="icon-arrow-long"></i>
                            </span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <?php include 'common/footer.php'; ?>

</body>
</html>
