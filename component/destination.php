<?php
$packages = [
    ["Hanoi - Hue - Hoi An - Da Nang - Ho Chi Minh", "/tour?name=Hanoi - Hue - Hoi An - Da Nang - Ho Chi Minh", "sunset-da-nang-vietnam.jpg", "7", "6", ""],

    ["Vietnam - Laos - Cambodia", "/tour?name=Vietnam - Laos - Cambodia", "laos-eratour.vn.jpg", "16", "15"],

    ["Hanoi - Ha Long - Hanoi", "/tour?name=Hanoi - Ha Long - Hanoi", "ha-long-bay.jpg", "4", "3"],

    ["Sai Gon - Cu Chi - Mekong Delta", "/tour?name=Sai Gon - Cu Chi - Mekong Delta", "cho-noi-cai-be.jpg", "4", "3"],

    ["Hanoi - Ninh Binh - Ha Long - Nha Trang", "/tour?Hanoi - Ninh Binh - Ha Long - Nha Trang", "the-boat.jpg", "10", "9"],

    ["Vietnam And The Paradise Beach In Phu Quoc Island", "/tour?name=Vietnam And The Paradise Beach In Phu Quoc Island", "Phu-Quoc-island.jpg", "15", "14"],

    ["Cooking Tour from the north to center of Vietnam", "/tour?name=Cooking Tour from the north to center of Vietnam", "hoi-an-cooking-class.jpg", "8", "7"],

    ["Sapa Trekking: Valleys, Villages, Mountains and Clouds", "/tour?name=Sapa Trekking: Valleys, Villages, Mountains and Clouds", "sapa.jpg", "4", "3"],

    ["Handicraft Villages – Carving, Pottery, Silk & Lacquer Ware", "/tour?name=Handicraft Villages – Carving, Pottery, Silk & Lacquer Ware", "gom.jpg", "1", "0"],

    ["Explore and Relax: Ho Chi Minh City - Mui Ne", "/tour?name=Explore and Relax: Ho Chi Minh City - Mui Ne", "mui-ne-beach.jpg", "7", "6"],

]
?>
<div class="list-tour-by-destination">

    <?php
    $i = 1;
    foreach ($packages as $value) { ?>
        <div class="tour-by-destination-item">
            <a class="tour-by-destination-link" href="<?= $value[1]?>">
                <span class="tour-by-destination-images">
                    <img src="/images/destination/<?= $value[2]?>" alt="">
                    <div class="tour-by-destination-time">
                        <?php if ($value[3] > 0) { ?>
                            <span>
                                <img src="/images/sun.svg" alt=""> <?= $value[3]?> days
                            </span>
                        <?php } ?>
                        <?php if ($value[4] > 0) { ?>
                            <span>
                                <img src="/images/moon.svg" alt=""> <?= $value[4]?> night
                            </span>
                        <?php } ?>
                    </div>
                </span>
                <div class="tour-by-destination-info">
                    <div class="tour-by-destination-title">
                        <?= $value[0]?>
                    </div>
                </div>
            </a>
        </div>
        <?php if ($i > 8) {
            break;
        }
        $i++;
    } ?>

</div>
