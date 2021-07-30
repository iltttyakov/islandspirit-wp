$(document).ready(function () {
    $('input').on('change', function () {
        $(this).attr('value', $(this).val());
    });

    if ($('#city__clouds').length) {
        let clouds = document.getElementById('city__clouds');
        let balloon = document.getElementById('city__balloon');
        let lines = document.getElementById('city__lines');
        let dots = document.getElementById('city__dots');

        $(window).on('mousemove', function (e) {
            let x = e.clientX / window.innerWidth;
            let y = e.clientY / window.innerHeight;

            clouds.style.transform = 'translate(-' + x * 20 + 'px, -' + y * 20 + 'px)';
            balloon.style.transform = 'translate(-' + x * 20 + 'px, -' + y * 20 + 'px)';
            lines.style.transform = 'translate(-' + x * 8 + 'px, -' + y * 8 + 'px)';
            dots.style.transform = 'translate(-' + x * 4 + 'px, -' + y * 4 + 'px)';
        });
    }

    $('.map__marker').on('click', function () {
        $('.map__marker').addClass('map__marker--hide');
        $(this).addClass('map__marker--active');

        $('.map__close').removeClass('map__close--hide');
        $('.first__offer').addClass('first__offer--withbg');

        let imgUrl = $(this).data('img');
        $(this).css('background-image', 'url("' + imgUrl + '")')
    });

    $('.map__close').on('click', function () {
        $('.map__marker').removeClass('map__marker--active');
        $('.map__marker').removeClass('map__marker--hide');

        $('.map__marker').css('background-image', '');

        $('.first__offer').removeClass('first__offer--withbg');
    });

    if ($('.header__burger').length) {
        $('.header__burger').on('click', function () {
            $('.header__menu').slideToggle();
        });
    }

    if ($('.share__open').length) {
        $('.share__open').on('click', function () {
            $('.share').toggleClass('share--active');
        });
    }


    var btn = $('.up');

    $(window).scroll(function () {
        if ($(window).scrollTop() > 300) {
            btn.addClass('show');
        } else {
            btn.removeClass('show');
        }
    });

    btn.on('click', function (e) {
        e.preventDefault();
        $('html, body').animate({scrollTop: 0}, '300');
    });


    if ($(".fixed_block").length) {
        var element = $(".fixed_block");
        var height_el = element.offset().top;
        var element_stop = $(".fixed_block_stop");
        var height_el_stop = element_stop.offset().top;

        $(".fixed_block_position").css({
            "width": element.outerWidth(),
            "height": element.outerHeight()
        });

        $(window).scroll(function () {
            if ($(window).scrollTop() > height_el_stop - element.outerHeight() - 20) {
                element.css({
                    "top": element.offset().top,
                    "left": element.offset().left
                }).removeClass("fixed").addClass("absolute");
            } else {
                if ($(window).scrollTop() > height_el) {
                    element.addClass("fixed").removeClass("absolute").attr("style", "");
                } else {
                    element.removeClass("fixed absolute").attr("style", "");
                }
            }
        });
    }


});

