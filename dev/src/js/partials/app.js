$(document).ready(function(){

    "use strict";

    var header = $('.header');
    var windowsize = $(window).width();

    $(window).resize(function() {
        windowsize = $(window).width();
    });


    /**
     * Header search on click
     */

    // $('.header-search-btn').on('click', function () {
    //     var search = $(this).closest('.header-search');
    //     console.log(search);
    //     if(search.hasClass('active')) {
    //         search.removeClass('active');
    //     } else {
    //         search.addClass('active');
    //     }
    // });

    $('.header-search-btn').on('click', function () {
        var search = $(this).closest('.header-search');
        if(search.hasClass('active')) {
            search.removeClass('active');
        } else {
            search.addClass('active');
        }
    });
    $('.header-search-btn').click(function () {
        $( ".search-from-dropdown").toggleClass("active-form");
        if ( $(".search-from-dropdown .form").find('.input').focus() );
    });
    /**
     * Header hamburgers click
     */

    $('.hamburger').on('click', function () {
        var hamb = $(this);
        var hamb_2 = $('.hamburger-2');
        var menu = $('.header-nav');
        var menu_2 = $('.header-right');
        if(hamb.hasClass('active')) {
            hamb.removeClass('active');
        } else {
            hamb.addClass('active');
        }
        if(menu.hasClass('active')) {
            menu.removeClass('active');
        } else {
            menu.addClass('active');
        }
        if(menu_2.hasClass('active')) {
            menu_2.removeClass('active');
        }
        if(hamb_2.hasClass('active')) {
            hamb_2.removeClass('active');
        }
    });

    $('.hamburger-2').on('click', function () {
        var hamb_2 = $(this);
        var hamb = $('.hamburger');
        var menu_2 = $('.header-right');
        var menu = $('.header-nav');
        if(hamb_2.hasClass('active')) {
            hamb_2.removeClass('active');
        } else {
            hamb_2.addClass('active');
        }
        if(menu_2.hasClass('active')) {
            menu_2.removeClass('active');
        } else {
            menu_2.addClass('active');
        }
        if(menu.hasClass('active')) {
            menu.removeClass('active');
        }
        if(hamb.hasClass('active')) {
            hamb.removeClass('active');
        }
    });


    /**
     * Header change height on scroll
     */

    $(window).scroll(function () {
        var scroll = $(window).scrollTop();
        if(scroll>1 && windowsize>=992){
            header.addClass('scrolled');
        } else {
            header.removeClass('scrolled');
        }
    });


    /**
     * Isotope
     */
    var $grid = $('.mas-grid').masonry({
        itemSelector: '.grid-item'
    });


    /**
     * Back to top btn
     */
    if ($('#to-top').length) {
        var scrollTrigger = 500, // px
            backToTop = function () {
                var scrollTop = $(window).scrollTop();
                if (scrollTop > scrollTrigger) {
                    $('#to-top').addClass('active');
                } else {
                    $('#to-top').removeClass('active');
                }
            };
        backToTop();
        $(window).on('scroll', function () {
            backToTop();
        });
        $('#to-top').on('click', function (e) {
            e.preventDefault();
            $('html,body').animate({
                scrollTop: 0
            }, 700);
        });
    }

    /**
     * Swiper init
     */
    var Swiper_1 = new Swiper ('.swiper-container', {
        loop: true,
        grabCursor: true,
        slidesPerView: 3,
        spaceBetween: 80,
        breakpoints: {
            1599: {
                spaceBetween: 40
            },
            991: {
                slidesPerView: 2
            },
            767: {
                slidesPerView: 1,
                spaceBetween: 15
            }
        }
    })

    /**
     * Wow js
     */
    new WOW().init();



});

