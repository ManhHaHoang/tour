<div class="list-tour">
    <?php for ($i=1; $i < 9; $i++) {  ?>
    <div class="tour-item">
        <a class="tour-image" href="/tour?name=">
            <img src="/images/tour/<?= $i ?>.jpg" alt="">
        </a>
        <div class="tour-info">
            <a href="/tour?name=Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore" class="tour-title">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
            </a>
            <div class="tour-description">
                Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </div>
            <div class="tour-price">
                <div class="new-price">
                    Form <span>$1,121</span>
                </div>
                <a href="/tour?name=" class="tour-view">
                    Detail
                </a>
            </div>
        </div>
    </div>
    <?php } ?>
</div>
