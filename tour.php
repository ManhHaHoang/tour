<?php include 'common/head.php';?>
<title> <?php if (key_exists('city', $_GET) && $_GET['city'] == true) { echo $_GET['city'] . ' - '; } ?> Vietnam Travel Agency</title>
<link rel="stylesheet" href="/assets/css/home.css?v=<?=$ver?>">
<link rel="stylesheet" href="/assets/css/slide.css?v=<?=$ver?>">
<link rel="stylesheet" href="/assets/css/responsive.css?v=<?=$ver?>">
</head>
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
                    echo $tourName = str_replace('-', ' ',  $_GET['name']);
                } ?>
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
                        if (key_exists('name', $_GET) && $_GET['name'] == true) {
                            echo $tourName = str_replace('-', ' ',  $_GET['name']);
                        } else { ?>
                            <script> window.history.back();</script>
                        <?php } ?>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <main class="main-content">
        <section class="destination-tour">
            <div class="site-w flex-box">
                <div class="tour-left-col">
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
                    <h1 class="tour-page-title">
                        <?php
                        if (key_exists('name', $_GET) && $_GET['name'] == true) {
                            echo $tourName = str_replace('-', ' ',  $_GET['name']);
                         } ?>
                    </h1>
                    <div class="tour-page-destination">
                        <i class="icon-location2"></i> Lorem ipsum
                    </div>
                    <h2 class="tour-page-title sub-page-title">
                        Overview
                    </h2>
                    <div class="page-content">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </div>
                    <h2 class="tour-page-title sub-page-title">
                        Itinerary
                    </h2>
                    <div class="page-content">
                        <p><strong>Day 1: </strong> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        <p><strong>Day 2: </strong> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        <p><strong>Day 3: </strong> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    </div>
                    <h2 class="tour-page-title sub-page-title">
                        What’s included?
                    </h2>
                    <div class="page-content">
                        <div class="list-check plus cleafix">
							<ul>
                                <li>Tour private in Ha Noi</li><li>Transfer from by private vehicle with A/C.</li><li>1 lunch at local restaurant and&nbsp;bottled water</li> <li>All entrance fees and sightseeing as mentioned in the program. </li> <li>Local English speaking guide(s) in Vietnam.</li> <li>01 FOC in&nbsp; for group of 16pax onward (excluding internal airfares and visas). Maximum 02 FOC per group.</li>
                            </ul>
						</div>
                    </div>
                    <div class="page-detail-price">
                        <h3 class="tour-page-title sub-page-title">
                            Price In USD (in a private tour for a group of 2 - 30 adults)
                        </h3>
                        <div class="price-box">
                            <p class="price_ads">Valued at <span class="price_ads_number">$79</span></p>
                            <p class="price_detail"><span class="number_price" id="price_min" data-number_from="7">$30</span>/For Group 7-9 person</p>
                        </div>
                    </div>
                </div>

            </div>
        </section>
    </main>
    <div class="tour-packages" style="padding-bottom: 25px">
        <h2 class="destination-title">
            <?php
            if (key_exists('name', $_GET) && $_GET['name'] == true) { ?>
                <?= $tourName = str_replace('-', ' ',  $_GET['name']); ?>  Packages
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
