<?php
$destinations = [
    ["Can Tho", "/vietnam-tours?city=Can Tho", "cantho.jpg"],
    ["Da Lat", "/vietnam-tours?city=Da Dat", "dalat.jpg"],
    ["Hanoi", "/vietnam-tours?city=hanoi", "hanoi.jpg"],
    ["Ho Chi Minh", "/vietnam-tours?city=Ho Chi Minh", "ho-chi-minh-city.jpg"],
    ["Hoi An", "/vietnam-tours?city=Hoi An", "hoian.jpg"],
    ["Hue", "/vietnam-tours?city=Hue", "hue.jpg"],
    ["Nha Trang", "/vietnam-tours?city=Nha Trang", "nhatrang.jpg"],
    ["Phong Nha", "/vietnam-tours?city=Phong Nha", "phongnha.jpg"],
    ["Phu Quoc", "/vietnam-tours?city=Phu Quoc", "phuquoc.jpg"],
    ["Sa Pa", "/vietnam-tours?city=Sa Pa", "sapa.jpg"],
]
?>

<div class="destinations-slide">
    <div class="destinations-wrapper">
        <?php foreach ($destinations as $value) { ?>
            <div class="destinations-item">
                <a class="destinations-link" href="<?= $value[1]?>">
                    <img src="/images/slide/<?= $value[2]?>" alt="">
                    <span class="destinations-title"><?= $value[0]?></span>
                </a>
            </div>
        <?php }?>
    </div>
</div>
