import $ from 'jquery';

$(function () {
    $('header .header__nav-control').on('click', function () {
        if ($(this).hasClass('header__nav-control--close')) {
            $('header #header__nav').removeClass('header__nav--open');
            $(this).removeClass('header__nav-control--close');
            $('body').removeClass('overflow-hidden--sp');
        } else {
            $(this).addClass('header__nav-control--close');
            $('header #header__nav').addClass('header__nav--open');
            $('body').addClass('overflow-hidden--sp');
        }
    });
});
