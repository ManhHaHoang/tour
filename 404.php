<?php
$ver = time();

// $url =  (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI] .'/'";
$url = 'http://' . $_SERVER['SERVER_NAME'] .'/';
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
    <style media="screen">
        .about-box {
            align-items: flex-end ;
        }
    </style>
    <?php include 'common/header.php'; ?>
    <?php include 'common/banner404.php'; ?>
    <?php include 'common/home/destinations.php'; ?>
    <?php include 'common/home/about.php'; ?>
    <?php include 'common/footer.php'; ?>
    <script type="text/javascript">

        $(document).ready(function() {
            $('.destinations-wrapper').slick({
                slidesToShow: 5,
                slidesToScroll: 2,
                autoplay: !1,
                dots: !1,
                autoplaySpeed: 1000,
                speed: 1000,
                variableWidth: true,
                responsive: [
                    {
                        breakpoint: 760,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1,
                            variableWidth: false
                        }
                    }
                ]
            });

            $('.companions-slide').slick({
                slidesToShow: 1,
                slidesToScroll: 1,
                arrows: true,
                fade: !1,
                asNavFor: '.slider-nav',
                autoplay: !1,
                autoplaySpeed: 2000,
                fade: true,
                responsive: [
                    {
                        breakpoint: 760,
                        settings: {
                            fade: false,
                            autoplay: 1,
                        }
                    }
                ]
            });

            $('.slider-nav').slick({
                slidesToShow: 3,
                slidesToScroll: 1,
                asNavFor: '.companions-slide',
                focusOnSelect: true,
                arrows: !1,
            });
        });
    </script>
</body>
</html>
