<?php
$listCategorie = [
    ["danh-muc","", "Chương trình khuyến mại"],
    ["danh-muc","", "Hãng sản xuất",
    ["danh-muc", "", "Acer (46)"],
    ["danh-muc", "", "Asus (114)"],
    ["danh-muc", "", "Fujitsu (6)"],
    ["danh-muc", "", "Lenovo (81)"],
    ["danh-muc", "", "Apple (78)"],
    ["danh-muc", "", "Dell (82)"],
    ["danh-muc", "", "LG (8)"],
    ["danh-muc", "", "MSI (33)"],
],
["danh-muc","", "Theo giá tiền"],
["danh-muc","", "Theo cấu hình"],
["danh-muc","", "Kích thước màn hình"],
["danh-muc","", "Máy tính đồng bộ"],
["danh-muc","", "Màn hình máy tính"],
["danh-muc","", "Theo nhu cầu"],
["danh-muc","", "Máy cũ giá rẻ"],
["danh-muc","", "Linh kiện máy tính"],
["danh-muc","", "Dịch vụ sửa chữa"],
];
$listDisplay = [
    ["checked", "all", "Tất cả"],
    ["", "tat-ca", "Tất cả"],
    ["", "khoang-13-inch", "Khoảng 13 inch"],
    ["", "khoang-14-inch", "Khoảng 14 inch"],
    ["", "tren-15-inch", "Trên 15 inch"],
];
$listCPU = [
    ["checked", "all", "Tất cả"],
    ["", "intel-celeron", "Intel Celeron"],
    ["", "intel-pentium", "Intel Pentium"],
    ["", "intel-core-i3", "Intel Core i3"],
    ["", "intel-core-i4", "Intel Core i4"],
    ["", "intel-core-i5", "Intel Core i5"],
    ["", "intel-core-i7", "Intel Core i7"],
    ["", "intel-core-i9", "Intel Core i9"],
    ["", "amd-ryzen-3", "AMD Ryzen 3"],
    ["", "amd-ryzen-5", "AMD Ryzen 5"],
    ["", "amd-ryzen-9", "AMD Ryzen 7"],
];
$listRAM = [
    ["checked", "all", "Tất cả"],
    ["", "ram-4gb", "4 GB"],
    ["", "ram-6gb", "6 GB"],
    ["", "ram-8gb", "8 GB"],
    ["", "ram-16gb", "16 GB"],
    ["", "ram-32gb", "32 GB"],
];
$listGraphicsCard = [
    ["checked", "all", "Tất cả"],
    ["", "nvidia-geforce-series", "NVIDIA GeForce Series"],
    ["", "amd-radeon-series", "AMD Radeon Series"],
    ["", "card-onboard", "Card Onboard"],
];

$listDemand = [
    ["checked", "all", "Tất cả"],
    ["", "gaming-do-hoa", "Gaming - Đồ họa"],
    ["", "may-tinh-van-phong", "Máy tính văn phòng"],
];
$listSpecialFeatures = [
    ["checked", "all", "Tất cả"],
    ["", "ho-tro-cong-nghe-optane", "Hỗ trợ công nghệ Optane"],
    ["", "cpu-intel-10th", "CPU Intel 10th"],
    ["", "su-dung-tam-nen-ips", "Sử dụng tấm nền IPS"],
    ["", "man-hinh-cam-ung", "Màn hình cảm ứng"],
    ["", "windows-ban-quyen", "Windows bản quyền"],
    ["", "mo-khoa-van-tay", "Mở khóa vân tay"],
];


$url = $url = $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
?>
<ul class="list-category">
    <?php
    foreach ($listCategorie as $value) { ?>
        <li class="dropdown-item <?= $url == $value[0] ? 'active' : '' ?>">
            <a id="<?= $value[1] ?>" class="dropdown-link" href="<?= $value[0] ?>">
                <?= $value[2] ?> <i class="icon-arrow"></i>
            </a>
            <ul class="category-submenu" >
                <?php for ($i=0; $i < 3; $i++) { ?>
                    <li class="sub-category">
                        <a href="/collections/speaker" class="dropdown-item inner-title dropdown-submenu">
                            <?= $value[2] ?>
                        </a>
                        <div class="top-menu collapse" id="_n_grand-child-one1">
                            <ul class="top-menu">
                                <li class="category">
                                    <a href="/" class="dropdown-item">Bluetooth Speakers</a>
                                </li>

                                <li class="category">
                                    <a href="/" class="dropdown-item">Bluetooth Speakers</a>
                                </li>

                                <li class="category">
                                    <a href="/" class="dropdown-item">Wearable Devices</a>
                                </li>

                                <li class="category">
                                    <a href="/" class="dropdown-item">Smart watches</a>
                                </li>

                                <li class="category">
                                    <a href="/" class="dropdown-item">Action Camera</a>
                                </li>

                                <li class="category">
                                    <a href="/" class="dropdown-item">Smart Phones</a>
                                </li>
                                <li class="category">
                                    <a href="/" class="dropdown-item">Wearable Devices</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                <?php } ?>
            </ul>
        </li>
    <?php } ?>
</ul>
<div class="left-banner is-desktop">
    <a href="/danh-muc">
        <img src="images/banner/left-banner.png" alt="">
    </a>
</div>
<?php  if ($_SERVER['REQUEST_URI'] == '/danh-muc') { ?>
    <div class="is-mobile">
        Bộ lọc
    </div>
    <div class="list-filter is-desktop">
        <div class="widget">
            <div class="widget-title">
                Màn hình
            </div>
            <div class="widget-body">
                <?php foreach ($listDisplay as $value) { ?>
                    <label class="filter-item-lable" for="<?= $value[1] ?>">
                        <input id="<?= $value[1] ?>" type="checkbox" name="" value="" <?= $value[0] ?>>
                        <small></small>
                        <span><?= $value[2] ?></span>
                    </label>
                <?php } ?>
            </div>
        </div>
        <div class="widget">
            <div class="widget-title">
                CPU
            </div>
            <div class="widget-body">
                <?php foreach ($listCPU as $value) { ?>
                    <label class="filter-item-lable" for="<?= $value[1] ?>">
                        <input id="<?= $value[1] ?>" type="checkbox" name="" value="" <?= $value[0] ?>>
                        <small></small>
                        <span><?= $value[2] ?></span>
                    </label>
                <?php } ?>
            </div>
        </div>
        <div class="widget">
            <div class="widget-title">
                RAM
            </div>
            <div class="widget-body">
                <?php foreach ($listRAM as $value) { ?>
                    <label class="filter-item-lable" for="<?= $value[1] ?>">
                        <input id="<?= $value[1] ?>" type="checkbox" name="" value="" <?= $value[0] ?>>
                        <small></small>
                        <span><?= $value[2] ?></span>
                    </label>
                <?php } ?>
            </div>
        </div>
        <div class="widget">
            <div class="widget-title">
                Card đồ họa
            </div>
            <div class="widget-body">
                <?php foreach ($listGraphicsCard as $value) { ?>
                    <label class="filter-item-lable" for="<?= $value[1] ?>">
                        <input id="<?= $value[1] ?>" type="checkbox" name="" value="" <?= $value[0] ?>>
                        <small></small>
                        <span><?= $value[2] ?></span>
                    </label>
                <?php } ?>
            </div>
        </div>
        <div class="widget">
            <div class="widget-title">
                Tính năng đặc biệt
            </div>
            <div class="widget-body">
                <?php foreach ($listSpecialFeatures as $value) { ?>
                    <label class="filter-item-lable" for="<?= $value[1] ?>">
                        <input id="<?= $value[1] ?>" type="checkbox" name="" value="" <?= $value[0] ?>>
                        <small></small>
                        <span><?= $value[2] ?></span>
                    </label>
                <?php } ?>
            </div>
        </div>
        <div class="widget">
            <div class="widget-title">
                Theo nhu cầu
            </div>
            <div class="widget-body">
                <?php foreach ($listDemand as $value) { ?>
                    <label class="filter-item-lable" for="<?= $value[1] ?>">
                        <input id="<?= $value[1] ?>" type="checkbox" name="" value="" <?= $value[0] ?>>
                        <small></small>
                        <span><?= $value[2] ?></span>
                    </label>
                <?php } ?>
            </div>
        </div>
    </div>

<?php } else { ?>
    <div class="widget is-desktop">
        <div class="widget-title">
            Sản phẩm mới
        </div>
        <div class="widget-body">
            <?php for ($i=1; $i < 4; $i++) { ?>
                <div class="widget-product-item">
                    <a href="chi-tiet-san-pham" class="widget-product-item-image">
                        <img src="images/products/<?= $i ?>.jpg" alt="">
                    </a>
                    <div class="widget-product-body">
                        <a href="chi-tiet-san-pham" class="news-product-item-link">
                            Lorem ipsum dolor sit amet
                        </a>
                        <div class="product-price">
                            <span class="new-price">10.190.000 ₫</span>
                            <span class="old-price">10.690.000 ₫</span>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
<?php } ?>
