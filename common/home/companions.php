<?php
$companions = [
    ["The Myst Dong Khoi", "Ho Chi Minh", "#", "Featuring classic contemporary interiors and designs, The Myst Dong Khoi offers a sophisticated accommodations in the heart of District 1 in Ho Chi Minh City. ", "hochiminh.jpg"],

    ["Ana Villas Dalat Resort & Spa", "Da Lat", "#", "Ana Villas Dalat Resort & Spa offers original French colonial villas ideally nestled on the slopes of Dalat city’s rural highlands. It features an outdoor pool, on-site restaurant and spa center. ", "dalat.jpg"],

    ["InterContinental Danang Sun Peninsula Resort", "Da Nang", "#", "Boasting several fine dining options like the acclaimed La Maison 1888, InterContinental Danang Sun Peninsula Resort provides a luxurious retreat with private beach, a large outdoor swimming pool and... ", "danang.jpg"],

    ["Pullman Vung Tau", "Vung Tau", "#", "Located in Vung Tau, a 5-minute walk from Back Beach, Pullman Vung Tau provides accommodations with a restaurant, free private parking, an outdoor swimming pool and a fitness center. ", "vungtau.jpg"],

    ["Vinpearl Hotel Can Tho", "Can Tho", "#", "Offering a welcoming outdoor pool, the white building of Vinpearl Can Tho Hotel is located just 1.5 mi from Ninh Kieu Pier. ", "cantho.jpg"],

    ["DTX HOTEL NHA TRANG", "Nha Trang", "#", "Located in Nha Trang, a 2-minute walk from Nha Trang Beach, DTX HOTEL NHA TRANG has accommodations with a restaurant, free private parking, an outdoor swimming pool and a fitness center.", "nhatrang.jpg"],
]
?>
<div class="mytravel-Companions">
    <div class="site-w">
        <h2 class="collection-title">
            <strong>myTravel</strong> Companions
        </h2>
        <div class="collection-desc">
            We enjoy connections with the best companies in Southeast Asia, such as hotels, cruise lines, local attraction operators, and more. Our expert advisers use their personal connections and firsthand expertise to craft bespoke trips that bring unique experiences & special value to your clients.
        </div>
        <div class="companions-pack">
            <div class="companions-slide">
                <?php foreach ($companions as $value) { ?>
                    <div class="companions-item">
                        <div class="flex-box">
                            <div class="companions-desc">
                                <div class="companions-title"><?=$value[0]?></div>
                                <div class="companions-located"><?=$value[1]?></div>
                                <div class="companions-txt"><?=$value[3]?></div>
                                <a class="companions-link" href="<?=$value[2]?>">View More</a>
                            </div>
                            <div class="large-image">
                                <img src="/images/hotel/<?=$value[4]?>" alt="">
                            </div>
                        </div>
                    </div>
                <?php }?>
            </div>
            <div class="slider-nav flex-box">
                <?php foreach ($companions as $value) { ?>
                    <div class="slider-nav-item">
                        <img src="images/hotel/<?=$value[4]?>" draggable="false">
                        <div class="companions-large-located"><?=$value[1]?></div>
                    </div>
                <?php }?>
            </div>
        </div>
    </div>
</div>
