<?php
$tourList = [
    ["Hanoi Hue Hoi An Da Nang Ho Chi Minh", "/tour?name=Hanoi-Hue-Hoi-An-Da Nang-Ho Chi Minh", "sunset-da-nang-vietnam.jpg", "7", "6", ""],

    ["Vietnam Laos Cambodia", "/tour?name=Vietnam-Laos-Cambodia", "laos-eratour.vn.jpg", "16", "15"],

    ["Hanoi Ha Long Hanoi", "/tour?name=Hanoi-Ha-Long-Hanoi", "ha-long-bay.jpg", "4", "3"],

    ["Sai Gon Cu Chi Mekong Delta", "/tour?name=Sai Gon-Cu-Chi-Mekong-Delta", "cho-noi-cai-be.jpg", "4", "3"],

    ["Hanoi-Ninh Binh-Ha Long-Nha Trang", "/tour?name=Hanoi-Ninh Binh-Ha-Long-Nha-Trang", "the-boat.jpg", "10", "9"],

    ["Vietnam And The Paradise Beach In Phu Quoc Island", "/tour?name=Vietnam-And-The-Paradise-Beach-In-Phu-Quoc-sland", "Phu-Quoc-island.jpg", "15", "14"],

    ["Cooking Tour from the north to center of Vietnam", "/tour?name=Cooking-Tour-from-the-north-to-center-of-Vietnam", "hoi-an-cooking-class.jpg", "8", "7"],

    ["Sapa Trekking: Valleys, Villages, Mountains and Clouds", "/tour?name=Sapa-Trekking-Valleys-Villages-Mountains-and-Clouds", "sapa.jpg", "4", "3"],

    ["Handicraft Villages – Carving, Pottery, Silk & Lacquer Ware", "/tour?name=Handicraft-Villages-Carving-Pottery-Silk-and-Lacquer-Ware", "gom.jpg", "1", "0"],

    ["Explore and Relax: Ho Chi Minh City-Mui Ne", "/tour?name=Explore-and-Relax-Ho-Chi-Minh-City-Mui-Ne", "mui-ne-beach.jpg", "7", "6"],

]
?>
<div class="list-tour">
    <?php
    $i = 1;
    foreach ($tourList as $value) { ?>
        <div class="tour-item">
            <a class="tour-image" href="<?= $value[1]?>">
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
            </a>
            <div class="tour-info">
                <div class="tour-by-destination-title">
                    <a href="<?= $value[1]?>">
                        <?= $value[0]?>
                    </a>
                </div>
                <div class="tour-description">
                    Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </div>
                <div class="tour-price">
                    <div class="new-price">
                        Form <span>$1,121</span>
                    </div>
                    <a href="<?= $value[1]?>" class="tour-view">
                        Detail
                    </a>
                </div>
            </div>
        </div>
        <?php if ($i > 8) {
            break;
        }
        $i++;
    } ?>
</div>
<div class="pagination-box">
    <ul class="pagination">
        <li class="ative">
            <a href="#">1</a>
        </li>
        <li class="ative">
            <a href="#">2</a>
        </li>
        <li class="ative">
            <a href="#">3</a>
        </li>
        <li class="ative">
            <a href="#">4</a>
        </li>
    </ul>
</div>
