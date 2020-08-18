<div class="news-wrapper">
    <div class="component-title component-tabs flex-box">
        <h2 class="component-head">
            Tin tức và sự kiện
        </h2>
    </div>
    <div class="feature-news-list custom-slider">
        <?php for ($i=1; $i < 10; $i++) { if ($i > 10) {
            break;
        } ?>
        <div class="feature-news-item" href="#">
            <a class="feature-image" href="">
                <img src="images/news/s<?= $i?>.jpg" alt="">
            </a>
            <div class="feature-news-box">
                <div class="feature-post">
                    04/8/2020
                </div>
                <h3 class="feature-news-head">
                    <a href="/">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit
                    </a>
                </h3>
                <div class="feature-news-desc">
                    Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </div>
                <a class="feature-news-button" href="/">
                    Chi tiết <i class="icon-arrow"></i>
                </a>
            </div>
        </div>
    <?php } ?>
</div>
</div>
