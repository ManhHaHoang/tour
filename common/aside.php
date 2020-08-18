<?php
$sidebarList = [
    ["detail", "s1", "Galaxy A51 và A71 chứng minh vị thế dẫn đầu trong phân khúc với tính năng Chụp Một Chạm tối tân"],
    ["detail", "s2", "Cựu giám đốc Apple: “Sau Mac sẽ đến lượt máy tính Windows cao cấp cũng chuyển sang chip ARM"],
    ["detail", "s3", "LG khai trương LG Premium Showroom nơi trải nghiệm thiết bị điện tử cao cấp"],
    ["detail", "s4", "Máy tính bàn Dell OptiPlex 5070: Cấu hình ngon lành cành đào ẩn trong thiết kế nhỏ gọn, dễ dàng nâng cấp"],
    ["detail", "s5", "Valorant sẽ cấu trúc lại hệ thống rank trong thời gian tới"],
    ["detail", "s6", "Tiết lộ về camera siêu đỉnh của iPhone 2022"],
    ["detail", "s7", "iPhone 11 giảm sâu, lộ diện smartphone màn hình gập của Samsung "],
    ["detail", "s8", "Top 3 dòng máy trạm Dell mạnh mẽ & bán chạy nhất năm 2020"],
    ["detail", "s9", "Tối giản hóa không gian làm việc với HP 200 Pro G4 22 All-in-One PC"],
    ["detail", "s10", "Vì sao nút 'F' và 'J' trên bàn phím lại có đường lằn ngang? Giải đáp từ chuyên gia sẽ giúp hội công sở mở mang tầm mắt!"]
];
$url = $_SERVER['REQUEST_URI'];
$url = ltrim($url, '/');
?>

<aside class="sidebar">
    <div class="sidebar-title">
        <img src="/images/news-icon.svg" alt="">
        Thông tin nổi bật
    </div>
    <ul class="sidebar-list">
        <?php
        foreach ($sidebarList as  $value) { ?>
            <li class="sidebar-item">
                <a class="sidebar-link" href="/<?= $value[0] ?>">
                    <span class="sidebar-image">
                        <img src="/images/news/<?= $value[1] ?>.jpg" alt="">
                    </span>
                    <div class="sidebar-content"><?= $value[2] ?></div>
                </a>
            </li>
        <?php } ?>
    </ul>
</aside>
