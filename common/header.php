<header class="tzheader">
    <div class="site-w main-header">
        <a class="main-logo transformx" href="/" title="eTravel">
            <img src="/images/logo-w.svg" alt="eTravel">
        </a>
        <?php include 'common/navigation.php';?>
        <div class="search-wrap transformx">
            <form class="search-form" action="/search" method="post">
                <input class="form-control search-text" type="text" name="search" placeholder="Tour, Destination...">
                <button class="button" type="button" name="button">
                    <i class="icon-search"></i>
                </button>
            </form>
        </div>
        <span class="open-menu is-mobile">
            <span></span>
            <span></span>
            <span></span>
        </span>
        <div class="header-background-dummy"></div>
    </div>
</header>
