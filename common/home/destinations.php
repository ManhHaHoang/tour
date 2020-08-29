<?php
$destinations = [
    ["Can Tho", "/vietnam-tour/?location=hanoi", "cantho.jpg"],
    ["Dalat", "/vietnam-tour/?location=hanoi", "dalat.jpg"],
    ["Hanoi", "/vietnam-tour/?location=hanoi", "hanoi.jpg"],
    ["Ho Chi Minh", "/vietnam-tour/?location=hanoi", "ho-chi-minh-city.jpg"],
    ["Hoi An", "/vietnam-tour/?location=hanoi", "hoian.jpg"],
    ["Hue", "/vietnam-tour/?location=hanoi", "hue.jpg"],
    ["Nha Trang", "/vietnam-tour/?location=hanoi", "nhatrang.jpg"],
    ["Phong Nha", "/vietnam-tour/?location=hanoi", "phongnha.jpg"],
    ["Phu Quoc", "/vietnam-tour/?location=hanoi", "phuquoc.jpg"],
    ["Sa Pa", "/vietnam-tour/?location=hanoi", "sapa.jpg"],
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
