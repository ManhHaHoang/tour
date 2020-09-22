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
    <link rel="stylesheet" href="/assets/css/tour.css?v=<?=$ver?>">
    <link rel="stylesheet" href="/assets/css/slide.css?v=<?=$ver?>">
    <link rel="stylesheet" href="/assets/css/responsive.css?v=<?=$ver?>">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700;900&display=swap" rel="stylesheet">
</head>
<body id="main-body">
    <?php include 'common/header.php'; ?>
    <div class="banner page-banner tour-banner transformx">
        <img src="/images/destination/vietnam.png" alt="">

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
                        <a href="/">Tour</a>
                    </li>
                    <li>
                        <a href="/">Vietnam</a>
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
                    echo $_GET['name'];
                } else { ?>
                    Find Inspiration for Your Travelers
                <?php } ?>
            </h1>
            <div class="tour-description">
                <?php if (key_exists('location', $_GET) && $_GET['location'] == true) { ?>
                    <div class="tour-location flex-box">
                        <i class="icon-location2"></i>
                        <div class="tour-location-detail">
                            <h2 class="location">Location</h2>
                            <div class="location-name">
                                <?= $_GET['location'] ?>
                            </div>
                        </div>
                    </div>
                <?php } ?>
                <div class="tour-rating flex-box">
                    <i class="icon-star"></i>
                    <div class="tour-location-detail">
                        <h2 class="location">Location</h2>
                        <div class="location-name">
                            5.5 (195 rated)
                        </div>
                    </div>
                </div>
                <div class="tour-description-info">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </div>
                <div class="tour-description-info">
                    <div class="info-item">
                        <strong>Duration:</strong> 14 days 13 night
                    </div>
                    <div class="info-item">
                        <strong>Destination:</strong> Hanoi - Ha Long - Hoi An - Ho Chi Minh City - Mekong Delta - Phu Quoc
                    </div>
                </div>
                <div class="tour-description-info">
                    <div class="text-center">
                        <span class="price-label">From: $799.00</span>
                        <a href="#/tour-booking/737" class="button primary book-now">Book now</a>
                    </div>
                </div>
            </div>
            <div class="tour-content">
                <div class="main-tour-detail margin-bottom-30 clearfix">
    <div class="left-tour-detail">
        <h3 class="h2-highlight">Tour brief</h3>
        <div class="margin-bottom-30">
            Day 1: Hanoi – Arrival<br>
            Day 2: Hanoi city excursion<br>
            Day 3: Hanoi – Ha Long, overnight onboard<br>
            Day 4: Ha Long – Fly to Danang – Hoi An<br>
            Day 5: Hoi An city excursion<br>
            Day 6: Hoi An Free time<br>
            Day 7: Hoi An – Fly to Ho Chi Minh – City excursion<br>
            Day 8: Cai Be Princess full-day excursion<br>
            Day 9: Ho Chi Minh – Fly to Phu Quoc<br>
            Day 10 – 12: Phu Quoc Free time<br>
            Day 13: Phu Quoc – Fly back to Ho Chi Minh<br>
            Day 14: Ho Chi Minh – Departure<br>
            &nbsp;
        </div>
        <div class="margin-bottom-30">
            <div class="margin-bottom-30">
                <h3 class="h2-highlight">PRICE AND BOOKING</h3>
                <div class="price_table">
                    <table class="table-price responsive" width="100%" cellspacing="1" cellpadding="0">
                        <thead class="responsive">
                            <tr class="responsive">
                                <th class="responsive th-price" style="text-align: left">Tours &amp; Packages</th>
                                <th class="responsive th-price">2 Pax</th>
                                <th class="responsive th-price">3-4 Paxes</th>
                                <th class="responsive th-price">5-6 Paxes</th>
                                <th class="responsive th-price">From 7 Paxes</th>
                                <th class="responsive th-price th_book">&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody class="responsive">
                            <tr class="responsive">
                                <td class="responsive pack-col">3 Stars</td>
                                <td class="responsive dd td-price">
                                    <div class="clearfix"><span class="d-block d-md-none">2 Pax</span>$1025</div>
                                </td>
                                <td class="responsive dd td-price">
                                    <div class="clearfix"><span class="d-block d-md-none">3-4 Paxes</span>$921</div>
                                </td>
                                <td class="responsive dd td-price">
                                    <div class="clearfix"><span class="d-block d-md-none">5-6 Paxes</span>$820</div>
                                </td>
                                <td class="responsive dd td-price">
                                    <div class="clearfix"><span class="d-block d-md-none">From 7 Paxes</span>$772</div>
                                </td>
                                <td class="responsive td-book"><a class="book-now button primary" href="/tour-booking/737/?rowid=1799">Book now</a></td>
                            </tr>
                            <tr class="responsive">
                                <td class="responsive pack-col">4 Stars</td>
                                <td class="responsive dd td-price">
                                    <div class="clearfix"><span class="d-block d-md-none">2 Pax</span>$1285</div>
                                </td>
                                <td class="responsive dd td-price">
                                    <div class="clearfix"><span class="d-block d-md-none">3-4 Paxes</span>$1165</div>
                                </td>
                                <td class="responsive dd td-price">
                                    <div class="clearfix"><span class="d-block d-md-none">5-6 Paxes</span>$1058</div>
                                </td>
                                <td class="responsive dd td-price">
                                    <div class="clearfix"><span class="d-block d-md-none">From 7 Paxes</span>$1012</div>
                                </td>
                                <td class="responsive td-book"><a class="book-now button primary" href="/tour-booking/737/?rowid=1800">Book now</a></td>
                            </tr>
                            <tr class="responsive">
                                <td class="responsive pack-col">5 Stars</td>
                                <td class="responsive dd td-price">
                                    <div class="clearfix"><span class="d-block d-md-none">2 Pax</span>$1712</div>
                                </td>
                                <td class="responsive dd td-price">
                                    <div class="clearfix"><span class="d-block d-md-none">3-4 Paxes</span>$1685</div>
                                </td>
                                <td class="responsive dd td-price">
                                    <div class="clearfix"><span class="d-block d-md-none">5-6 Paxes</span>$1595</div>
                                </td>
                                <td class="responsive dd td-price">
                                    <div class="clearfix"><span class="d-block d-md-none">From 7 Paxes</span>$1535</div>
                                </td>
                                <td class="responsive td-book"><a class="book-now button primary" href="/tour-booking/737/?rowid=1801">Book now</a></td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="note-price"></div>
                </div>
            </div>
        </div>
        <div class="margin-bottom-30">
            <h3 class="h2-highlight">Itinerary</h3>
            <div class="margin-bottom-30 text-justify clearfix">
                <div style="text-align: left;"><span style="color: rgb(255, 0, 0);"><strong><em>The Tour is customizable to fit your needs of Accommodations, dates and destinations…&nbsp; </em></strong></span></div>
                <div style="text-align: justify;"><br>
                    <span style="color:#2ecc71;"><strong>Day 1 : Hanoi – Arrival </strong></span><br>
                    <img align="left" alt="" height="132" src="/userfiles/hanoi(2).jpg" width="200">You are welcome at the airport and transferred to the hotel for check-in.<br>
                    Balance of the day is free time for refreshment after a long flight journey.<br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <span style="text-align:justify;"><span style="color:#2ecc71;"><br>
                    <strong>Day 2 : Hanoi city full-day excursion (B,L)</strong></span></span><br>
                    <img align="left" alt="" height="133" src="/userfiles/temple of literature1.jpg" width="200">8h00 Star the tour by visiting the Ho Chi Minh Complex: Ho Chi Minh's Mausoleum and his Stilts House, Presidential Palace and One Pillar Pagoda nearby. After that our guide will take you to visit <a href="https://waytovietnam.com/travel-guides/vietnam-tourist-attractions/vietnam-museum-of-ethnology.htm">Vietnam Museum of Ethonology.</a><br>
                    In the afternoon, we visit the Temple of Literature,<a href="https://waytovietnam.com/travel-guides/vietnam-tourist-attractions/hoan-kiem-lake.htm"> Hoan Kiem Lake</a> ( Lake of the Restored Sword ) and Ngoc Son Temple, One Hour Cyclo to visit the Old Quarter.<br>
                    Enjoy the Show of Water Puppet and back to your hotel to spend overnight.&nbsp;<br>
                    <span style="text-align:justify;"><span style="color:#2ecc71;"><br>
                    <strong>Day 3 : Hanoi – Halong Bay&nbsp; overnight onboard (B,L,D)</strong></span></span><br>
                    <img align="left" alt="" height="131" src="/userfiles/halong23.jpg" width="200">8h00 : You will be transferred to <a href="https://waytovietnam.com/travel-guides/Vietnam_Destinations/halong-bay.htm">Halong Bay</a> by a private car with 4 hours travelling for the overnight cruise on a deluxe junk. Begin with a seafood lunch then explore some limestone caves.<br>
                    In the afternoon enjoy a swim or relax in the sun on the top deck or try your hand at some kayaking.<br>
                    <br>
                    <span style="text-align:justify;"><span style="color:#2ecc71;"><br>
                    <strong>Day 4: Ha Long – Fly to Danang (Br) </strong></span></span><br>
                    <img align="left" alt="" height="130" src="/userfiles/halong11(3).jpg" width="200">Spend your last morning soaking up the scenery before heading back to the harbour around 11:00am. The crew will bid you farewell and you disembark with our tender boat to Tuan Chau Marina.<br>
                    A private vehicle is waiting to pick you up and transfer to Noi Bai airport for 01hr20mins flight to Danang in the afternoon.<br>
                    On arrival at Danang, get picked up and transferred to the hotel in Hoi An for check-in and spend overnight there.<br>
                    <span style="text-align:justify;"><span style="color:#2ecc71;"><br>
                    <strong>Day 5 : Hoi An half-day excursion (B,D)</strong></span></span><br>
                    <img align="left" alt="" height="129" src="/userfiles/hoian24.jpg" width="200">This afternoon we enjoy a guided walking tour to visit the tranquility and charm of <a href="https://waytovietnam.com/travel-guides/Vietnam_Destinations/hoi-an-ancient-town.htm">Hoi An Ancient Town</a> with its low tiled houses of Chinese appearance, <a href="https://waytovietnam.com/travel-guides/vietnam-tourist-attractions/japanese-covered-bridge.htm">Japanese covered bridge</a>, brightly painted temples and pagodas make it one of the most delightful places to visit in Vietnam.<br>
                    After dinner, transfer back to the hotel and spend overnight there.<br>
                    <span style="text-align:justify;"><span style="color:#2ecc71;"><br>
                    <strong>Day 6&nbsp; : Hoi An Free time (B)</strong></span></span><br>
                    <img align="left" alt="" height="131" src="/userfiles/food(1).jpg" width="200">Spend the day at leisure on the beach, learn the secrets of Vietnamese cuisine with a cooking class or have clothes made by one of Hoi An’s famous – and famously inexpensive tailors!<br>
                    <br>
                    <br>
                    <br>
                    <span style="text-align:justify;"><span style="color:#2ecc71;"><strong>Day 7 : Hoi An – Fly to Ho Chi Minh –</strong></span></span><span style="text-align:justify;"><span style="color:#2ecc71;"><strong> City excur</strong></span></span><span style="text-align:justify;"><span style="color:#2ecc71;"><strong>sion (B,L)</strong></span></span><br>
                    <img align="left" alt="" height="131" src="/userfiles/2.jpg" width="200">This morning, get picked up at the hotel and transferred to the airport to take a flight to <a href="https://waytovietnam.com/travel-guides/Vietnam_Destinations/ho-chi-minh-city.htm">Ho Chi Minh City</a>.<br>
                    On arrival, take a half-day city excursion to see the best of Saigon including the War Remnants Museum, followed by the architectural treats of French colonial Notre Dame Cathedral and the Post Office.&nbsp;<br>
                    Transfer to the hotel for check-in and spend overnight in Ho Chi Minh.<br>
                    <span style="text-align:justify;"></span><br>
                    <span style="text-align:justify;"><span style="color:#2ecc71;"><strong>Day 8 : Mekong full-day excursion on Cai Be Princess (B,L)</strong></span></span><br>
                    <img align="left" alt="" height="132" src="/userfiles/boat1(1).jpg" width="200">08.00 AM, depart from your hotel in the morning and drive to the township of Cai Be to&nbsp;&nbsp; board the Cai Be Princess, a traditional riverboat made from native bamboo, wood and rattan<br>
                    Meet us at the Cai Be Jetty at 10:00 am. The crew welcomes you aboard with cold towels and a refreshing drink while the Cai Be Princess Sampan sets off for its leisurely cruise on the busy waterways of the Mekong Delta. On the river, all sorts of boats ply the water, from small fishing boats to cargo barges loaded with fruit and vegetables. Observe from the comfort of your sampan life as it plays out on the riverbanks the people, the stunning landscapes while your attentive crew serves you tea and seasonal fruit. At Tan Phong Islet, board a small row boat to better explore the canal’s hidden mangroves. Return to your sampan to visit an ancient house built in the 19th century. We’ll make stops along the way to explore local cottage industries including the making of coconut candy and puffed rice (the local equivalent of popcorn).<br>
                    Your cruise ends at Le Longanier Restaurant. Lunch is served in this exquisite colonial-style villa set in a lush tropical garden by the river and surrounded by fruit trees, giving you a sense of privileged life during Indochinese times.<br>
                    After lunch, at around 2:30 pm, take a short walk along a small canal towards the Ba Bon Bridge where your personal vehicle awaits to drive you approximately 2 hours to Ho Chi Minh City.<br>
                    <br>
                    <span style="text-align:justify;"><span style="color:#2ecc71;"><strong>Day 9 : Ho Chi Minh – Fly to Phu Quoc&nbsp; (B) </strong></span></span><br>
                    <img align="left" alt="" height="131" src="/userfiles/bai dai.jpg" width="200">Today you will be transferred to the airport for a 01-hour flight to<a href="https://waytovietnam.com/travel-guides/Vietnam_Destinations/phu-quoc-island.htm"> Phu Quoc Island</a>.<br>
                    On arrival In Phu Quoc Island, our guide and driver will transfer you to the beach hotel/resort&nbsp; for checking in.<br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <span style="text-align:justify;"><span style="color:#2ecc71;"><strong>Day 10 – 12: Phu Quoc&nbsp; Free time (B) </strong></span></span><br>
                    <img align="left" alt="" height="124" src="/userfiles/snorkelling.jpg" width="200">Time at leisure to sunbathe on the beach, enjoy your resort spa facilities or take an optional snorkeling and boat cruise day trip around the islands.<br>
                    <span style="text-align:justify;"><span style="color:#2ecc71;"><br>
                    <br>
                    <br>
                    <strong>Day 13 : Phu Quoc – Fly to back to Ho Chi Minh (B)</strong></span></span><br>
                    <img align="left" alt="" height="133" src="/userfiles/phuquoc2(1).jpg" width="200">Today enjoy your last moment at Phu Quoc island before getting transferred&nbsp; to the airport for your flight back to Ho Chi Minh.<br>
                    On arrival at Tan Son Nhat airport, a private car will take you to the hotel for check-in. Balance of the day is free time.<br>
                    Spend overnight in Ho Chi Minh.<br>
                    <br>
                    <br>
                    <span style="text-align:justify;"><span style="color:#2ecc71;"><strong>Day 14&nbsp; : Ho Chi </strong></span></span><span style="text-align:justify;"><span style="color:#2ecc71;"><strong>Minh</strong></span></span><span style="text-align:justify;"><span style="color:#2ecc71;"><strong> – Departure (B) </strong></span></span><br>
                    <img align="left" alt="" height="141" src="/userfiles/3.jpg" width="200">Free time until transfer to the airport for your departure flight.<br>
                    Good bye and see you again<br>
                    &nbsp;
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-include margin-bottom-30">
                    <h4 class="h2-highlight">Inclusions</h4>
                    <ul>
                        <ul>
                            <li>&nbsp;Private car transfer as per program&nbsp;&nbsp;&nbsp;</li>
                            <li>&nbsp;Hotel accommodation as specified or similar with daily breakfast</li>
                            <li>&nbsp;English speaking local tour guides</li>
                            <li>&nbsp;Entrance fees</li>
                            <li>&nbsp;Meals as stated in the itinerary (B: Breakfast; L: Lunch; D: Dinner)</li>
                            <li>&nbsp;Services charges and government tax.</li>
                            <li>&nbsp;Exclusive and personalized single agent/single customer service.</li>
                            <li>&nbsp;No extra charge after services confirmation</li>
                            <li>&nbsp;24/7 hotline support guaranteed</li>
                        </ul>
                        <br>
                        <br>
                        &nbsp;
                    </ul>
                </div>
                <div class="col-md-6 col-exclude margin-bottom-30">
                    <h4 class="h2-highlight">Exclusions</h4>
                    <ul>
                        <ul>
                            <li>Internal flight ticket</li>
                            <li>NY Gala dinner&nbsp; ( Depend on each hotel)</li>
                            <li>Personal expenses, other meals, tips and gratuities</li>
                            <li>Travel insurance</li>
                            <li>Beverage</li>
                        </ul>
                    </ul>
                </div>
            </div>
            <div class="margin-bottom-30">
                <h4 class="h2-highlight">Hotels</h4>
                <span style="color: rgb(0, 0, 255);"><strong>Hotels and Resorts can be changed if rooms are not available by the time confirm the tour<br>
                <br>
                3 Stars : </strong></span><br>
                Hanoi &nbsp; &nbsp; &nbsp; : Golden Silk Boutique Hotel<br>
                Halong&nbsp;&nbsp;&nbsp;&nbsp; : Swan Cruise<br>
                Hoi An&nbsp;&nbsp;&nbsp;&nbsp; : Lotus Hotel<br>
                Ho Chi Minh City : Elios Hotel<br>
                Phu Quoc &nbsp; : Tropicana Resort<br>
                <br>
                <span style="background-color: rgb(0, 0, 255);"><span style="color: rgb(0, 0, 255);"><span style="background-color: rgb(255, 255, 255);"><strong>4 Stars :</strong></span></span></span><br>
                Hanoi&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : Silk Path Hotel<br>
                Halong&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : Sealife Cruise<br>
                Hoi An&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : Ancient House Village Resort<br>
                Ho Chi Minh City&nbsp; : Eden Saigon Hotel<br>
                Phu Quoc &nbsp; &nbsp; &nbsp; : The Richis Resort<br>
                <br>
                <span style="color: rgb(0, 0, 255);"><strong>5 Stars :</strong></span><br>
                Hanoi &nbsp; &nbsp; &nbsp;&nbsp; : Apricot Hotel<br>
                Halong&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : Jasmine Cruise<br>
                Hoi An&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : Amanity Resort and Spa<br>
                Ho Chi Minh city&nbsp; : Intercontinental Saigon Hotel<br>
                Phu Quoc &nbsp; &nbsp; : La Veranda Resort and Spa<br>
                &nbsp;
            </div>
            <div class="text-center">
                <a href="https://waytovietnam.com/tour-booking/737" class="book-now large">Book now</a>
            </div>
        </div>
    </div>
    <div class="right-tour-detail">
        <div id="r_ct_tour" class="fix_top">
            <div class="margin-bottom-30  text-center">
                <div class="margin-bottom-15">
                    <a href="https://www.google.com/maps/d/viewer?mid=1Y4m0AFKhOFL4MgFcACNZ0ThzbEyEa3ts&amp;ll=15.874054194911544%2C106.66744295000001&amp;z=6" class="view-map d-block" target="_blank">
                    <i class="fa fa-map-marker fa-fw"></i> View on map
                    </a>
                </div>
                <a href="https://www.youtube.com/channel/UCR5-3a7tn9zvl08kpHVR-dQ" class="view-map youtube d-block" target="_blank">
                <i class="fa fa-youtube-play fa-fw"></i> Watch videos
                </a>
            </div>
            <!--- Guide relate -->
            <div class="widget margin-bottom-30 widget-tour">
                <div class="widget-inner">
                    <h4 class="widget-title-small">Related Guides</h4>
                    <div class="best-right clearfix">
                        <a class="best-right-img" href="https://waytovietnam.com/travel-guides/Vietnam_Destinations/halong-bay.htm">
                        <img src="https://waytovietnam.com/storage/images/indochina_sales.jpg" class="lazy img-best-right loading" alt="null" data-was-processed="true">
                        </a>
                        <div class="right-best">
                            <h4 class="h4-best">
                                <a class="text-black" href="https://waytovietnam.com/travel-guides/Vietnam_Destinations/halong-bay.htm">
                                Halong Bay
                                </a>
                            </h4>
                        </div>
                    </div>
                    <div class="best-right clearfix">
                        <a class="best-right-img" href="https://waytovietnam.com/travel-guides/Places_to_eat_in_Vietnam/Specialities_and_Restaurants_in_Hoi_An.htm">
                        <img src="https://waytovietnam.com/storage/images/KHEl40ANfCAiWJdii4pnDbaHgEo2MPANSGvG0dzo.jpeg" class="lazy img-best-right loading" alt="Hoi An steam rice with Chicken" data-was-processed="true">
                        </a>
                        <div class="right-best">
                            <h4 class="h4-best">
                                <a class="text-black" href="https://waytovietnam.com/travel-guides/Places_to_eat_in_Vietnam/Specialities_and_Restaurants_in_Hoi_An.htm">
                                Specialities and Restaurants in Hoi An
                                </a>
                            </h4>
                        </div>
                    </div>
                    <div class="best-right clearfix">
                        <a class="best-right-img" href="https://waytovietnam.com/travel-guides/Vietnam_Destinations/hanoi-capital-city.htm">
                        <img src="https://waytovietnam.com/storage/images/PkUW8WeXMu4sBk8aJ9ywKfW1A7DzJth8ihbozlOk.jpeg" class="lazy img-best-right loading" alt="Hanoi Old Quarter" data-was-processed="true">
                        </a>
                        <div class="right-best">
                            <h4 class="h4-best">
                                <a class="text-black" href="https://waytovietnam.com/travel-guides/Vietnam_Destinations/hanoi-capital-city.htm">
                                Hanoi Capital City
                                </a>
                            </h4>
                        </div>
                    </div>
                    <div class="best-right clearfix">
                        <a class="best-right-img" href="https://waytovietnam.com/travel-guides/Vietnam_Destinations/hanoi-capital-city.htm">
                        
                        </a>
                        <div class="right-best">
                            <h4 class="h4-best">
                                <a class="text-black" href="https://waytovietnam.com/travel-guides/Embassies_and_travel_agents/Embassies_in_Hanoi.htm">
                                Embassies in Hanoi
                                </a>
                            </h4>
                        </div>
                    </div>
                </div>
            </div>
            <!--- Guide relate -->
        </div>
        <div class="margin-bottom-30">
            <a class="btn btn-success btn-block" href="https://waytovietnam.com/tour-booking/737">Enquire This Tour</a>
            <div style="margin: 10px 0;text-align: center">Or</div>
            <a class="btn btn-warning btn-block" href="/customize-tour-list.htm">Customize This Tour</a>
        </div>
        <div class="widget margin-bottom-30 widget-tour">
            <div class="widget-inner">
                <div class="text-center">
                    <div class="margin-bottom-15">
                        <img data-src="/images/customer-service.png" class="lazy img-support loaded" src="/images/customer-service.png" data-was-processed="true">
                    </div>
                    <p class="margin-bottom-5"><i class="fa fa-envelope text-orange"></i><a href="mailto:sales@waytovietnam.com">sales@waytovietnam.com</a></p>
                    <p class="margin-bottom-5"><i class="fa fa-skype text-orange"></i><a href="skype:call">waytovietnam</a></p>
                    <p><a class="hotline" href="tel:+84.983 034 212"><i class="fa fa-phone text-orange"></i> +84.984873128</a></p>
                </div>
            </div>
        </div>
    </div>
</div>
            </div>
        </div>
    </main>
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
