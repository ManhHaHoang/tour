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
    <title>myTravel - Vietnam Travel Agency</title>
    <meta name="author" content="Manh Ha Hoang">
    <meta name="title" content="myTravel - Vietnam Travel Agency">
    <meta name="description" content="Home to an extensive collection of historical and cultural attractions, Vietnam is undoubtedly one of the most fascinating countries in Southeast Asia!">
    <link rel="stylesheet" href="assets/css/icon.css?v=<?=$ver?>">
    <link rel="stylesheet" href="assets/css/layout.css?v=<?=$ver?>">
    <link rel="stylesheet" href="assets/css/styles.css?v=<?=$ver?>">
    <link rel="stylesheet" href="assets/css/slide.css?v=<?=$ver?>">
    <link rel="stylesheet" href="assets/css/responsive.css?v=<?=$ver?>">
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
                        <a href="destination">Destination</a>
                    </li>
                    <li>
                        <?php
                        if (key_exists('name', $_GET) && $_GET['name'] == true) {
                            echo $_GET['name'];
                        } else { ?>
                            Our Destinations
                        <?php } ?>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <main class="main-content">
        <div class="site-w">
            <h1 class="main-title">
                <?php
                if (key_exists('name', $_GET) && $_GET['name'] == true) {
                    echo $_GET['name'] . ' - Your Inspirations';
                } else { ?>
                    Find Inspiration for Your Travelers
                <?php } ?>

            </h1>
            <div class="page-description">
                Stunning scenery, combined with high-level customer service and charming local culture, make Vietnam an ideal travel destination for all traveler profiles. From the northern mountains and the laid-back central coastline, down to the exotic flood plains of the southern provinces, Vietnam’s variety is one of its unique selling points. A year-round destination, the geography of Vietnam ensures it’s always a good time to travel, no matter what time of year.
            </div>
            <div class="dt-sc-destination-sorting">
                <span data-filter="#hanoi-sort" class="sort-item active">Hanoi</span>
                <span data-filter="#ho-chi-minh-sort" class="sort-item ">Ho Chi Minh</span>
                <span data-filter="#cao-bang-sort" class="sort-item">Cao Bang</span>
                <span data-filter="#ba-be-sort" class="sort-item">Ba Be</span>
                <span data-filter="#con-dao-island-sort" class="sort-item">Con Dao Island</span>
                <span data-filter="#ben-tre-sort" class="sort-item">Ben Tre</span>
                <span data-filter="#can-tho-sort" class="sort-item">Can Tho</span>
                <span data-filter="#ha-giang-sort" class="sort-item">Ha Giang</span>
                <span data-filter="#phu-quoc-sort" class="sort-item">Phu Quoc</span>
                <span data-filter="#quy-nhon-sort" class="sort-item">Quy Nhon</span>
                <span data-filter="#phan-thiet-sort" class="sort-item">Phan Thiet</span>
                <span data-filter="#dan-nang-sort" class="sort-item">Da Nang</span>
                <span data-filter="#vung-tau-sort" class="sort-item">Vung Tau</span>
                <span data-filter="#sa-pa-sort" class="sort-item">Sa Pa</span>
                <span data-filter="#nha-trang-sort" class="sort-item">Nha Trang</span>
                <span data-filter="#mai-chau-sort" class="sort-item">Mai Chau</span>
                <span data-filter="#ninh-binh-sort" class="sort-item">Ninh Binh</span>
            </div>
            <div id="hanoi-sort" class="city_country active">
                <h3 class="sort-title">Capital: Hanoi</h3>
                <p>Formerly Thang Long, the “City of the Rising Dragon,” Hanoi became Vietnam’s official capital city in 1954 with the signing of the Geneva agreement. The city later suffered tremendously from the destruction caused by the American bombardments during the Vietnam War, and the end of the conflict marked a long period of withdrawal from the outside world. Only From the 1990s and the commencement of the Doi Moi economic freedoms did Hanoi open up to the rest of the world once again. Today, Hanoi is a capital of irresistible charm, at the meeting point of traditions and legends, dotted with lakes, tree-lined avenues, and lush parks</p>
                <h4>MORE INFORMATION</h4>
                <div class="nocontainer">
                    <div class="myTravel-service">
                        <div class="ea_service_icon">
                            <img width="50" height="50" src="https://www.easia-travel.com/wp-content/uploads/2019/01/time.png" class="attachment-full size-full" alt="" srcset="https://www.easia-travel.com/wp-content/uploads/2019/01/time.png 50w, https://www.easia-travel.com/wp-content/uploads/2019/01/time-24x24.png 24w, https://www.easia-travel.com/wp-content/uploads/2019/01/time-48x48.png 48w" sizes="(max-width: 50px) 100vw, 50px">
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
                            <img width="60" height="60" src="https://www.easia-travel.com/wp-content/uploads/2019/02/icon-3.png" class="attachment-full size-full" alt="" srcset="https://www.easia-travel.com/wp-content/uploads/2019/02/icon-3.png 60w, https://www.easia-travel.com/wp-content/uploads/2019/02/icon-3-24x24.png 24w, https://www.easia-travel.com/wp-content/uploads/2019/02/icon-3-48x48.png 48w" sizes="(max-width: 60px) 100vw, 60px">
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
                            <img width="50" height="50" src="https://www.easia-travel.com/wp-content/uploads/2019/02/Easia-Companions.png" class="attachment-full size-full" alt="" srcset="https://www.easia-travel.com/wp-content/uploads/2019/02/Easia-Companions.png 50w, https://www.easia-travel.com/wp-content/uploads/2019/02/Easia-Companions-24x24.png 24w, https://www.easia-travel.com/wp-content/uploads/2019/02/Easia-Companions-48x48.png 48w" sizes="(max-width: 50px) 100vw, 50px">
                        </div>
                        <div class="ea_service_info">
                            <div class="ea_service_title">
                                Easia Companions
                            </div>
                            <div>
                                <a href="#companion/la-siesta-trendy/">La Siesta Trendy Hotel</a>
                            </div>
                        </div>
                    </div>
                    <div class="myTravel-service">
                        <div class="ea_service_icon">
                            <img width="60" height="60" src="https://www.easia-travel.com/wp-content/uploads/2019/02/icon-1.png" class="attachment-full size-full" alt="" srcset="https://www.easia-travel.com/wp-content/uploads/2019/02/icon-1.png 60w, https://www.easia-travel.com/wp-content/uploads/2019/02/icon-1-24x24.png 24w, https://www.easia-travel.com/wp-content/uploads/2019/02/icon-1-48x48.png 48w" sizes="(max-width: 60px) 100vw, 60px">
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
            <div id="ho-chi-minh-sort" class="city_country">
                <h3 class="sort-title">Ho Chi Minh</h3>
                <p class="updating">Updating</p>
            </div>
            <div id="cao-bang-sort" class="city_country">
                <h3 class="sort-title">Cao Bang</h3>
                <p class="updating">Updating</p>
            </div>
            <div id="ba-be-sort" class="city_country">
                <h3 class="sort-title">Ba Be</h3>
                <p class="updating">Updating</p>
            </div>
            <div id="con-dao-island-sort" class="city_country">
                <h3 class="sort-title">Con Dao Island</h3>
                <p class="updating">Updating</p>
            </div>
            <div id="ben-tre-sort" class="city_country">
                <h3 class="sort-title">Ben Tre</h3>
                <p class="updating">Updating</p>
            </div>
            <div id="can-tho-sort" class="city_country">
                <h3 class="sort-title">Can Tho</h3>
                <p class="updating">Updating</p>
            </div>
            <div id="ha-giang-sort" class="city_country">
                <h3 class="sort-title">Ha Giang</h3>
                <p class="updating">Updating</p>
            </div>
            <div id="phu-quoc-sort" class="city_country">
                <h3 class="sort-title">Phu Quoc</h3>
                <p class="updating">Updating</p>
            </div>
            <div id="quy-nhon-sort" class="city_country">
                <h3 class="sort-title">Quy Nhon</h3>
                <p class="updating">Updating</p>
            </div>
            <div id="phan-thiet-sort" class="city_country">
                <h3 class="sort-title">Phan Thiet</h3>
                <p class="updating">Updating</p>
            </div>
            <div id="dan-nang-sort" class="city_country">
                <h3 class="sort-title">Da Nang</h3>
                <p class="updating">Updating</p>
            </div>
            <div id="vung-tau-sort" class="city_country">
                <h3 class="sort-title">Vung Tau</h3>
                <p class="updating">Updating</p>
            </div>
            <div id="sa-pa-sort" class="city_country">
                <h3 class="sort-title">Sa Pa</h3>
                <p class="updating">Updating</p>
            </div>
            <div id="nha-trang-sort" class="city_country">
                <h3 class="sort-title">Nha Trang</h3>
                <p class="updating">Updating</p>
            </div>
            <div id="mai-chau-sort" class="city_country">
                <h3 class="sort-title">Mai Chau</h3>
                <p class="updating">Updating</p>
            </div>
            <div id="ninh-binh-sort" class="city_country">
                <h3 class="sort-title">Ninh Binh</h3>
                <p class="updating">Updating</p>
            </div>

            <section class="destination-tour">
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

                <div class="tour-packages">
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

                <div class="tour-packages">
                    <h2 class="destination-title">
                        <?php
                        if (key_exists('name', $_GET) && $_GET['name'] == true) { ?>
                            <?= $_GET['name'] ?> tour by destinations
                        <?php } else { ?>
                            myTravel by destinations
                        <?php } ?>
                        <span  class="destination-note">
                            Day Tours by Destinations
                        </span>
                    </h2>
                    <?php include 'component/destination.php';?>
                </div>


            </section>
        </div>
    </main>
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


        $('.sort-item').click(function(e) {
            var currentSort = $(this).attr('data-filter');
            $(this).addClass('active').siblings().removeClass('active');
            $(currentSort + '.city_country').addClass('active').siblings().removeClass('active');
            e.preventDefault();
        });
    });
    </script>
</body>
</html>
