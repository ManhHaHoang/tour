<div class="trending-wrapper">
    <div class="component-title component-tabs flex-box">
        <h2 class="component-head">
            Xu hướng hôm nay
        </h2>
        <ul id="products-tab" class="products-tab flex-box">
            <li class="products-tab-item flex-box active" data-href="#new-arrivals" >
                Sản phẩm HOT
            </li>
            <li class="products-tab-item " data-href="#latest">
                Mới nhất
            </li>
            <li class="products-tab-item " data-href="#best-sellers">
                Bán chạy
            </li>
        </ul>
    </div>
    <div id="new-arrivals" class="trending-list active product-slider">
        <?php for ($i=1; $i < 11; $i++) { if ($i > 12) {
            break;
        } ?>
            <div class="trending-item product-item">
                <a class="trending-images product-images" href="chi-tiet-san-pham">
                    <img src="images/products/<?= rand(1, 20) ?>.jpg" alt="" alt="">
                </a>
                <div class="trending-info product-info">
                    <h3 class="trending-title product-title">
                        <a class="trending-link product-link" href="chi-tiet-san-pham">
                            Laptop dolor sit amet, consectetur adipisicing elit
                        </a>
                    </h3>
                    <div class="trending-price product-price">
                        <span class="new-price">10.190.000 ₫</span>
                        <span class="old-price">10.690.000 ₫</span>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
    <div id="latest" class="trending-list product-slider">
        <?php for ($i=1; $i < 11; $i++) { if ($i > 12) {
            break;
        } ?>
            <div class="trending-item product-item">
                <a class="trending-images product-images" href="chi-tiet-san-pham">
                    <img src="images/products/<?= rand(1, 20) ?>.jpg" alt="" alt="">
                </a>
                <div class="trending-info product-info">
                    <h3 class="trending-title product-title">
                        <a class="trending-link product-link" href="chi-tiet-san-pham">
                            Laptop dolor sit amet, consectetur adipisicing elit
                        </a>
                    </h3>
                    <div class="trending-price product-price">
                        <span class="new-price">16.190.000 ₫</span>
                        <span class="old-price">10.990.000 ₫</span>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
    <div id="best-sellers" class="trending-list product-slider">
        <?php for ($i=1; $i < 11; $i++) { if ($i > 12) {
            break;
        } ?>
            <div class="trending-item product-item">
                <a class="trending-images product-images" href="chi-tiet-san-pham">
                    <img src="images/products/<?= rand(1, 20) ?>.jpg" alt="" alt="">
                </a>
                <div class="trending-info product-info">
                    <h3 class="trending-title product-title">
                        <a class="trending-link product-link" href="chi-tiet-san-pham">
                            Laptop dolor sit amet, consectetur adipisicing elit
                        </a>
                    </h3>
                    <div class="trending-price product-price">
                        <span class="new-price">9.190.000 ₫</span>
                        <span class="old-price">9.690.000 ₫</span>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
</div>
