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
    <link rel="stylesheet" href="/assets/css/icon.css?v=<?=$ver?>">
    <link rel="stylesheet" href="/assets/css/layout.css?v=<?=$ver?>">
    <link rel="stylesheet" href="/assets/css/styles.css?v=<?=$ver?>">
    <link rel="stylesheet" href="/assets/css/booking.css?v=<?=$ver?>">
    <link rel="stylesheet" href="/assets/css/responsive.css?v=<?=$ver?>">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700;900&display=swap" rel="stylesheet">
</head>
<body id="main-body">
    <?php include 'common/header.php'; ?>
    <div class="banner page-banner transformx" style="height: 450px">
        <img src="/images/booking.jpg" alt="">
        <div class="breadcrumb-box">
            <div class="page-title site-w">
                Enquire This Tour
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
    <section class="destination-tour">
        <div class="tour-packages">
            <h2 class="destination-title">
                Tour booking
            </h2>
            <div class="booking-detail site-w">
                <div class="booking-row">
                    <h1 class="h2-title">Tour booking</h1>
                </div>
                <div class="row booking-row align-items-center">
                    <div class=" booking-item">
                        <a href="/tour?Classic_tours/Vietnam_Christmas_Holiday_Package_for_2020">
                            <img src="/images/Halongbay_Vietnam.jpg">
                        </a>
                    </div>
                    <div class="col-md-8">
                        <h2 class="h3-tour text-bold">
                            <a class="text-black" href="https://waytovietnam.com/tours/Classic_tours/Vietnam_Christmas_Holiday_Package_for_2020.htm">
                                Vietnam Christmas Holiday Package for 2020
                            </a>
                        </h2>
                        <div class="meta">
                            <p class="margin-bottom-5"><i class="fa fa-map-marker fa-fw"></i> <strong>Start
                                from:</strong> Hanoi
                            </p>
                            <p class="margin-bottom-5"><i class="fa fa-clock-o fa-fw"></i> <strong>Duration:</strong> 14
                                days 13 night
                            </p>
                            <p class="margin-bottom-5"><i class="fa fa-map-marker fa-fw"></i>
                                <strong>Destination:</strong> Hanoi - Ha Long - Hoi An - Ho Chi Minh City - Mekong Delta - Phu Quoc
                            </p>
                        </div>
                    </div>
                </div>
                <form action="/tour-booking" method="POST" id="frmbook">
                    <input type="hidden" name="tourid" value="737">
                    <h3 class="h3-title-contact">Booking information</h3>
                    <div class="contact-content booking-row">
                        <div class="flex-box">
                            <div class="booking-item">
                                <label class="text-bold">Package</label>
                                <select class="form-control" name="package">
                                    <option value="3 Stars">3 Stars</option>
                                    <option value="4 Stars">4 Stars</option>
                                    <option value="5 Stars">5 Stars</option>
                                </select>
                            </div>
                            <div class="  booking-item">
                                <label class="text-bold">Depart date (*)</label>
                                <input type="text" name="departure" id="departure" class="date form-control hasDatepicker" required="">
                            </div>
                        </div>
                        <div class="flex-box">
                            <div class="booking-item ">
                                <label class="text-bold">Adults (*)</label>
                                <input type="number" name="adult" id="adult" class="form-control mda-quantity  valid" min="1" max="20" aria-invalid="false" required="">
                            </div>
                            <div class="booking-item ">
                                <label class="text-bold">Childrens</label>
                                <input type="number" name="children" class="form-control mda-quantity  valid" min="0" max="20" aria-invalid="false">
                            </div>
                        </div>
                    </div>
                    <h3 class="h3-title-contact">Your information</h3>
                    <div class="contact-content">
                        <div class="flex-box">
                            <div class="  booking-item">
                                <label class="text-bold">Name (*)</label>
                                <input type="text" name="name" id="name" class="form-control" required="">
                            </div>
                            <div class=" booking-item">
                                <label class="text-bold">Email (*)</label>
                                <input type="text" name="email" id="email" class="form-control" required="">
                            </div>
                        </div>
                        <div class="flex-box">
                            <div class="   booking-item">
                                <label class="text-bold">Phone</label>
                                <input type="text" name="phone" id="phone" class="form-control">
                            </div>
                            <div class=" booking-item">
                                <label class="text-bold">Nationality</label>
                                <input type="text" name="nationality" id="nationality" class="form-control">
                            </div>
                        </div>
                        <div class="booking-row">
                            <label class="text-bold">More request</label>
                            <textarea name="content" id="request" class="form-control"></textarea>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="button primary">
                                <i class="fa fa-envelope"></i> Send us
                            </button>
                        </div>
                    </div>
                </form>

            </div>
        </div>

    </section>
    <?php include 'common/footer.php'; ?>
</body>
</html>
