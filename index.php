<?php include 'common/head.php';?>
<title>myTravel - Vietnam Travel Agency</title>
<link rel="stylesheet" href="/assets/css/home.css?v=<?=$ver?>">
<link rel="stylesheet" href="/assets/css/slide.css?v=<?=$ver?>">
<link rel="stylesheet" href="/assets/css/responsive.css?v=<?=$ver?>">
</head>
<body id="main-body">
    <?php include 'common/header.php'; ?>
    <?php include 'common/home/banner.php'; ?>
    <?php include 'common/home/destinations.php'; ?>
    <?php include 'common/home/about.php'; ?>
    <?php include 'common/home/collection.php'; ?>
    <?php include 'common/home/companions.php'; ?>
    <?php include 'common/home/destinations.php'; ?>
    <?php include 'common/footer.php'; ?>
    <script type="text/javascript">

        $(document).ready(function() {
            $('.destinations-wrapper').slick({
                slidesToShow: 5,
                slidesToScroll: 2,
                autoplay: !1,
                dots: !1,
                autoplaySpeed: 1000,
                speed: 1000,
                variableWidth: true,
                responsive: [
                    {
                        breakpoint: 760,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1,
                            variableWidth: false
                        }
                    }
                ]
            });

            $('.companions-slide').slick({
                slidesToShow: 1,
                slidesToScroll: 1,
                arrows: true,
                fade: !1,
                asNavFor: '.slider-nav',
                autoplay: !1,
                autoplaySpeed: 2000,
                fade: true,
                responsive: [
                    {
                        breakpoint: 760,
                        settings: {
                            fade: false,
                            autoplay: 1,
                        }
                    }
                ]
            });

            $('.slider-nav').slick({
                slidesToShow: 3,
                slidesToScroll: 1,
                asNavFor: '.companions-slide',
                focusOnSelect: true,
                arrows: !1,
            });
        });
    </script>
</body>
</html>
