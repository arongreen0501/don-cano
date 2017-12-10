jQuery(document).ready(function($) {
    // lazyload();

    $('.fader').addClass('fade');

    $('.owl-carousel').owlCarousel({
        // loop: true,
        items: 1,
        pagination: false,
        lazyLoad: true,
        // autoplay: true,
        dots: true,
        nav: true,
        navElement: 'a',
        navText: ['<span class="arrow"></span>', '<span class="arrow"></span>']
    });

    $('.menu-item-has-children').on('click', function(e) {
        if (
            !$(this)
                .children('.sub-menu')
                .hasClass('active')
        ) {
            $('.menu-item .active')
                .not(this)
                .removeClass('active');
            e.stopPropagation();
            $(this)
                .children('.sub-menu')
                .addClass('active');
        } else {
            $(this)
                .children('.sub-menu')
                .removeClass('active');
        }
    });

    $(document).on('click', function(e) {
        if ($(e.target).is('.active') === false) {
            $('.active').removeClass('active');
        }
    });

    var limit = 0.5;
    var scrollLimit = 0;

    $(window)
        .resize(function() {
            scrollLimit = $(window).height() * limit;
        })
        .scroll(function() {
            var scroll = $(window).scrollTop();

            if (scroll >= scrollLimit) {
                $('.header').addClass('sticky');
            } else {
                $('.header').removeClass('sticky');
            }
        })
        .trigger('resize')
        .trigger('scroll');

    $('.nav_icon').on('click', function(e) {
        e.preventDefault();
        e.stopPropagation();
        if (!$(this).hasClass('change_color')) {
            $(this).toggleClass('change_color');
        } else if ($(this).hasClass('open')) {
            $(this).removeClass('change_color');
        }
        $(this).toggleClass('open');
        $('html').toggleClass('disable_scroll');
        $(this)
            .siblings('.header')
            .toggleClass('mobile_active');
    });

    $(window).scroll(function() {
        var scroll = $(window).scrollTop();
        var w = $(window).width();
        var burger = $('.nav_icon');
        var heroHeight = $('.hero, .carousel').height();

        if (w <= 840 && scroll >= heroHeight && !burger.hasClass('open')) {
            burger.addClass('change_color');
        } else {
            burger.removeClass('change_color');
        }
    });

    $('.convert_sizes').on('click', function(e) {
        e.preventDefault();

        if ($(this).text() === 'Inches'){
            $(this).text('CM');
        } else {
            $(this).text('Inches');
        }

        $('.table td:not(:first-child)').each(function() {
            $(this).toggleClass('inches');

            var value = parseInt($(this).text());
            if ($(this).hasClass('inches')) {
                value = value * 0.3937;
                $(this)
                    .empty()
                    .append(Math.round(value * 10) / 10);
            } else {
                value = value / 0.3937;
                $(this)
                    .empty()
                    .append(Math.round(value));
            }
        });
    });
});
