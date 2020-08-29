$(document).ready(function() {

    // var lastScrollTop = 0;
    // $(window).scroll(function(event){
    //     var st = $(this).scrollTop();
    //     if (st > lastScrollTop){
    //         $('.tzheader').addClass('header-hide header-background');
    //         $('.tzheader').removeClass('header-show header-background');
    //     } else {
    //         $('.tzheader').addClass('header-show header-background');
    //         $('.tzheader').removeClass('header-hide header-background');
    //     }
    //     lastScrollTop = st;
    // });



    if (screen.width < 960) {
        // mobile
        $('.dropdown-link').click(function(e) {
            $(this).next().slideToggle();
            e.preventDefault();
        });
        $('#top-category').click(function(e) {
            e.preventDefault();
            $('.list-category').slideToggle();
        });
        $('.open-menu, .header-background-dummy').click(function(e) {
            e.preventDefault();
            $('body').toggleClass('menu-active');
        });


    }
    else {
        $('.search-item').click(function() {
            $('.search-text').focus();
            $('.search-wrap').toggleClass('show-search');

        });
    }
});
