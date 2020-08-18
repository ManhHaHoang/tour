<?php
$packages = [
    ["", "/tour?name=Adventure Tours", "adventure-tours.png", "Adventure Tours"],
    ["", "/tour?name=Beach Tours", "beach-tour.png", "Beach Tours"],
    ["", "/tour?name=Classic Tours", "classic-tour.png", "Classic Tours"],
    ["", "/tour?name=Countryside Tours", "countryside-tour.png", "Countryside Tours"],
    ["", "/tour?name=Culinary Tours", "culinary-tours.png", "Culinary Tours"],
    ["", "/tour?name=Luxury Tours", "luxury-tour.png", "Luxury Tours"],
]
?>
<div class="list-packages">
    <?php foreach ($packages as $value) { ?>
        <div class="packages-item">
            <a class="packages-link" href="<?= $value[1]?>">
                <img src="/images/packages/<?= $value[2]?>" alt="">
                <div class="package-info">
                    <span class="package-location">
                        <?php if ($value[0] != '') { ?>
                            <?= $value[0] ?>
                        <?php } elseif (key_exists('name', $_GET) && $_GET['name'] == true) { ?>
                            <?= $_GET['name'] ?>
                        <?php } else { } ?>
                    </span>
                    <div class="package-name">
                        <?=  $value[3]?>
                    </div>
                </div>
            </a>
        </div>
    <?php }?>
</div>
