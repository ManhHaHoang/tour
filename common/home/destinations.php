<?php
$destinations = [
    ["Cambodia", "/destination?location=cambodia", "cambodia.png"],
    ["Can Tho", "/destination?location=can-tho", "cantho.png"],
    ["Hoi An", "/destination?location=hoi-an", "hoian.png"],
    ["Laos", "/destination?location=laos", "laos.png"],
    ["Myanmar", "/destination?location=myanmar", "myanmar.png"],
    ["Thailand", "/destination?location=thailand", "thailand.png"],
    ["Vietnam", "/destination?location=vietnam", "vietnam.png"],
]
?>
<div class="destinations-slide">
    <div class="destinations-wrapper">
        <?php foreach ($destinations as $value) { ?>
            <div class="destinations-item">
                <a class="destinations-link" href="<?= $value[1]?>&name=<?= $value[0]?>">
                    <img src="/images/slide/<?= $value[2]?>" alt="">
                    <span class="destinations-title"><?= $value[0]?></span>
                </a>
            </div>
        <?php }?>
    </div>
</div>
