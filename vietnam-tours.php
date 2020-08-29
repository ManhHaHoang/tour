<?php
$ver = time();

// $url  =  (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
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
    <title>
        <?php if (key_exists('city', $_GET) && $_GET['city'] == true) {
            echo $_GET['city'];
        } ?> - Vietnam Travel Agency</title>
        <meta name="author" content="Manh Ha Hoang">
        <meta name="title" content="myTravel - Vietnam Travel Agency">
        <meta name="description" content="Home to an extensive collection of historical and cultural attractions, Vietnam is undoubtedly one of the most fascinating countries in Southeast Asia!">
        <link rel="stylesheet" href="/assets/css/icon.css?v=<?=$ver?>">
        <link rel="stylesheet" href="/assets/css/layout.css?v=<?=$ver?>">
        <link rel="stylesheet" href="/assets/css/styles.css?v=<?=$ver?>">
        <link rel="stylesheet" href="/assets/css/slide.css?v=<?=$ver?>">
        <link rel="stylesheet" href="/assets/css/responsive.css?v=<?=$ver?>">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700;900&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700;900&display=swap" rel="stylesheet">
    </head>
    <body id="main-body">
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
                    <?php
                    if (key_exists('name', $_GET) && $_GET['name'] == true) {
                        echo $_GET['name'];
                    } else { ?>
                        Our Destinations
                    <?php } ?>
                </div>
                <div class="site-w">
                    <ul class="breadcrumb">
                        <li>
                            <a href="/">Home</a>
                        </li>
                        <li>
                            <a href="destinations">Destination</a>
                        </li>
                        <li>
                            <a href="vietnam-destination">Vietnam</a>
                        </li>
                        <li>
                            <?php
                            if (key_exists('city', $_GET) && $_GET['city'] == true) {
                                echo $_GET['city'];
                            } else { ?>
                                <script> window.location.href = 'vietnam-destination';</script>
                            <?php } ?>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <main class="main-content">
            <div class="site-w">
                <div id="hanoi-sort" class="city_country active">
                    <h1 class="sort-title">
                        <?php if (key_exists('city', $_GET) && $_GET['city'] == true) {
                            echo $_GET['city'];
                        } ?>
                    </h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    <h2>MORE INFORMATION</h2>
                    <div class="nocontainer">
                        <div class="myTravel-service">
                            <div class="ea_service_icon">
                                <img width="35" height="35" src="/images/time.svg" class="attachment-fulll" alt="" >
                            </div>
                            <div class="ea_service_info">
                                <div class="ea_service_title">
                                    Best time to go
                                </div>
                                <div>From February to May and July to mid-September</div>
                            </div>
                        </div>
                        <div class="myTravel-service">
                            <div class="ea_service_icon">
                                <img width="35" height="35" src="/images/travel.svg" class="attachment-fulll" alt="" >
                            </div>
                            <div class="ea_service_info">
                                <div class="ea_service_title">
                                    Travel Types
                                </div>
                                <div>Classic, Honeymoon, Family Travel, Art &amp; Culture, Gastronomy, Sustainable</div>
                            </div>
                        </div>
                        <div class="myTravel-service">
                            <div class="ea_service_icon">
                                <img width="35" height="35" src="/images/origami.svg" class="attachment-fulll" alt="" >
                            </div>
                            <div class="ea_service_info">
                                <div class="ea_service_title">
                                    My Travel Companions
                                </div>
                                <div>
                                    <a href="#companion/la-siesta-trendy/">La Siesta Trendy Hotel</a>
                                </div>
                            </div>
                        </div>
                        <div class="myTravel-service">
                            <div class="ea_service_icon">
                                <img width="35" height="35" src="/images/itinerary.svg" class="attachment-fulll" alt="" >
                            </div>
                            <div class="ea_service_info">
                                <div class="ea_service_title">
                                    Suggest Itinerary
                                </div>
                                <div >
                                    <a href="#planning/vietnam-culinary-tour-in-vietnam/">Culinary Tour in Vietnam</a>, <a href="#planning/vietnam-nature-detox-flow-in-northern-central-vietnam/">Nature &amp; Detox flow in Northern &amp; Central Vietnam</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <section class="destination-tour">
                <div class="site-w flex-box">
                    <div class="tour-left-col">
                        <h3 class="left-title choose-destination">
                            Choose my destination
                        </h3>
                        <div class="dt-sc-destination-sorting">
                            <?php
                            $listCity = [
                                ["Hanoi", "hanoi"],
                                ["Ninh Binh", "ninhbinh"],
                                ["Da Nang", "danang"],
                                ["Phu Quoc island", "phuquoc"],
                                ["Can Tho", "cantho"],
                                ["Sapa", "sapa"],
                                ["Nha Trang", "nhatrang"],
                                ["Mui Ne", "muine"],
                                ["Hue", "hue"],
                                ["Hoi An", "hoian"],
                                ["Ho Chi Minh City", "hochiminh"],
                                ["Phong Nha", "phongnha"],
                                ["Da Lat", "dalat"],
                            ];
                            ?>
                            <?php foreach ($listCity as $value) { ?>
                                <a href="/vietnam-tours?city=<?=$value[0]?>" title="<?=$value[0]?>" rel="nofollow">
                                    <span data-filter="#<?=$value[1]?>" class="sort-item <?= $_GET['city'] == $value[0] ? 'active' : '' ?>">
                                        <small></small>
                                        <?=$value[0]?>
                                    </span>
                                </a>
                            <?php } ?>
                        </div>
                        <div class="booknow-box">
                            <form class="" action="/" method="post">
                                <h3 class="left-title">
                                    Travel Expenses
                                </h3>
                                <div class="booknow-form-content">
                                    <div class="booknow-row">
                                        <input class="form-control" type="text" name="" placeholder="Your Full Name" required>
                                    </div>
                                    <div class="booknow-row">
                                        <input class="form-control" type="text" name="" placeholder="Your email" required>
                                    </div>
                                    <div class="booknow-row">
                                        <input class="form-control" type="text" name="" placeholder="Your phone" required>
                                    </div>
                                    <div class="booknow-row">
                                        <input class="form-control" type="text" name="" placeholder="Ex: Hanoi">
                                    </div>
                                    <div class="booknow-row">
                                        <label for="">To: <small>*</small></label>
                                        <select class="" name="">
                                            <?php foreach ($listCity as $value) { ?>
                                                <option value="<?=$value[0]?>" <?= $_GET['city'] == $value[0] ? 'selected' : '' ?>><?=$value[0]?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                    <div class="booknow-row">
                                        <label for="">Departure Date <small>*</small></label>
                                        <input class="form-control" type="date" name="" placeholder="Departure Date">
                                    </div>
                                    <div class="booknow-row">
                                        <div class="book-sub-title">
                                            Number of Travellers <small>*</small>
                                        </div>
                                    </div>
                                    <div class="booknow-row sub-row">
                                        <label for="">Adults <small>*</small></label>
                                        <input class="form-control" type="number" min="1" name="" value="1" placeholder="Adults" required>
                                    </div>
                                    <div class="booknow-row sub-row">
                                        <label for="">Children <small>*</small></label>
                                        <input class="form-control" type="number" name="" min="0"  value="0" placeholder="Children" required>
                                    </div>
                                    <div class="booknow-row sub-row">
                                        <label for="">Infants <small>*</small></label>
                                        <input class="form-control" type="number" name="" min="0"  value="0" placeholder="Infants" required>
                                    </div>
                                    <div class="booknow-row sub-row">
                                        <button type="submit" class="button primary" name="button">Send request</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="tour-right-col">

                        <div class="tour-packages">
                            <h2 class="destination-title">
                                <?php
                                if (key_exists('name', $_GET) && $_GET['name'] == true) { ?>
                                    <?= $_GET['name'] ?>  Tour Offers
                                <?php } else { ?>
                                    myTravel Tour Offers
                                <?php } ?>
                                <span  class="destination-note">
                                    Browse through our most popular tours!
                                </span>
                            </h2>
                            <?php include 'component/tour-list.php';?>
                        </div>


                    </div>

                </div>
            </section>
        </main>
            <div class="tour-packages" style="padding-bottom: 25px">
                <h2 class="destination-title">
                    <?php
                    if (key_exists('name', $_GET) && $_GET['name'] == true) { ?>
                        <?= $_GET['name'] ?>  Packages
                    <?php } else { ?>
                        myTravel Packages
                    <?php } ?>
                    <span  class="destination-note">
                        Looking for a particular type of trip?
                    </span>
                </h2>
            <?php include 'component/packages-list.php';?>
        </div>
        <section class="box-why-us bg-grey">
            <div class="site-w">
                <div class="featured-item">
                    <div class="icon">
                        <img src="/images/service.png" alt="">
                    </div>
                    <div class="content">
                        <h5>Authentic</h5>
                        <ul>
                            <ul>
                                <li>We use real local restaurants, not tourist hangouts.</li>
                                <li>Visit local families experience real Vietnam life.</li>
                            </ul>
                        </ul>
                    </div>
                </div>
                <div class="featured-item">
                    <div class="icon">
                        <img src="/images/quality.png" alt="">
                    </div>
                    <div class="content">
                        <h5>Quality</h5>
                        <ul>
                            <li>Attraction, hotel and service provid - ers constantly reviewed.</li>
                            <li>No risk of forced shopping.</li>
                        </ul>
                    </div>
                </div>
                <div class="featured-item">
                    <div class="icon">
                        <img src="/images/guide.png" alt="">
                    </div>
                    <div class="content">
                        <h5>Expert Guides</h5>
                        <ul>
                            <li>Excellent tour guides are the soul of Waytovietnam service.</li>
                            <li>We select and arrange the most experienced tour guides for our customers.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <?php include 'common/footer.php'; ?>

        <script type="text/javascript">

        $(document).ready(function() {
            $('.list-packages').slick({
                slidesToShow: 5,
                slidesToScroll: 5,
                autoplay: !1,
                dots: !1,
                autoplaySpeed: 1000,
                speed: 1000,
                variableWidth: !1,
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

            // $('.sort-item').click(function(e) {
            //     var currentSort = $(this).attr('data-filter');
            //     $(this).addClass('active').siblings().removeClass('active');
            //     $(currentSort + '.city_country').addClass('active').siblings().removeClass('active');
            //     e.preventDefault();
            // });


        });
        </script>
    </body>
    </html>
