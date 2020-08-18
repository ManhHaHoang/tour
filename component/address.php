<?php
$address = [
    ["tan-binh.png", "iCare Center Tân Bình", "216 Hoàng Văn Thụ, Phường 4", "1900 6076 - Bấm phím 1"],
    ["quan-5.png", "iCare Center Quận 5", "151 Hùng Vương, Phường 4", "1900 6076 - Bấm phím 3"],
    ["quan-12.png", "iCare Center Quận 12", "245 Lê Văn Khương, Phường Hiệp Thành", "1900 6076 - Bấm phím 4"],
    ["thu-duc.png", "iCare Center Thủ Đức", "113 Đặng Văn Bi, Phường Trường Thọ", "1900 6076 - Bấm phím 2"]
];
$url = $_SERVER['REQUEST_URI'];
$url = ltrim($url, '/');
?>

<div id="action" class="action-wrapper">
    <div class="site-w component-box-action">
        <div class="address-list">
            <?php
            foreach ($address as $value) { ?>
                <div class="address-item">
                    <a href="/" class="address-link">
                        <span class="address-title">
                            <?= $value[1]?>
                        </span>
                        <span class="address-image">
                            <img src="/images/address/<?= $value[0]?>" alt="">
                        </span>
                        <span class="address-name">
                            <img class="address-icon" src="/images/location.svg"><?= $value[2]?>
                        </span>
                        <span class="address-phone">
                            <img class="address-icon" src="/images/phone.svg"><?= $value[3]?>
                        </span>
                    </a>
                </div>
            <?php } ?>
        </div>
    </div>
</div>
