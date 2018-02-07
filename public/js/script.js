$(document).ready(function () {

    $('.hamburger').click(function () {
        $(this).toggleClass('is-active');
    });

    $('.form--header').validate({
        rules:{
            name:{
                required:true
            },
            telephone:{
                required:true,
                number: true
            }
        },

        message:{
            name:{
                required:false
            },
            telephone:{
                required:false
            }
        }
    });

    $('.form--features').validate({
        rules:{
            name:{
                required:true
            },
            telephone:{
                required:true,
                number: true
            }
        },

        message:{
            name:{
                required:false
            },
            telephone:{
                required:false
            }
        }
    });

    $('h1, h2, h3, h4, h5, p, a, span').hyphenate();

    $('.work-slick').slick({
        slidesToShow: 3,
        centerPadding: 80,
        variableWidth: true,
        appendArrows: $('.work-slick-btn'),
        prevArrow: '<div class="work-slick-prev"><button><img src="./img/svg/Chevron_left.svg" alt="svg"></button></div>',
        nextArrow: '<div class="work-slick-next"><button><img src="./img/svg/Chevron_Right.svg" alt="svg"></button></div>',
        responsive: [
            {
                breakpoint: 1200,
                settings: {
                    slidesToShow: 2,
                    variableWidth: false,
                    centerMode: true
                }
            }, {
                breakpoint: 768,
                settings:{
                    slidesToShow: 1,
                    variableWidth: false,
                    centerMode: true
                }
            }, {
                breakpoint: 320,
                settings:{
                    slidesToShow: 1,
                    variableWidth: false
                }
            }
        ]
    });

    $('.customers-slick').slick({
        infinite: true,
        centerPadding: 0,
        variableWidth: true,
        appendArrows: $('.customers-slick-btn'),
        prevArrow: '<div class="customers-slick-prev"><button><img src="./img/svg/Chevron_left.svg" alt="svg"></button></div>',
        nextArrow: '<div class="customers-slick-next"><button><img src="./img/svg/Chevron_Right.svg" alt="svg"></button></div>',
        responsive:[
            {
                breakpoint: 1200,
                settings:{
                    slidesToShow: 2,
                    variableWidth: false,
                    centerMode: true
                }
            }, {
                breakpoint: 992,
                settings:{
                    slidesToShow: 1,
                    variableWidth: false,
                    centerMode: true
                }
            }, {
                breakpoint: 576,
                settings:{
                    slidesToShow: 1,
                    variableWidth: true
                }
            }
        ]
    });

    $('.price-page--slick-show').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        fade: true,
        draggable: false,
        asNavFor: '.price-page--slick-pagination',
        responsive:[
            {
                breakpoint: 576,
                settings:{
                    arrows: true,
                    appendArrows: $('.price-page--slick-show'),
                    prevArrow: '<div class="price-page-prev"><button></button></div>',
                    nextArrow: '<div class="price-page-next"><button></button></div>'
                }
            }
        ]
    });

    $('.price-page--slick-pagination').slick({
        // slidesToShow: 6,
        variableWidth: true,
        slidesToScroll: 1,
        arrows: false,
        asNavFor: '.price-page--slick-show',
        draggable: false,
        focusOnSelect: true,
        responsive:[
            {
                breakpoint: 1200,
                settings:{
                    arrows: false,
                    variableWidth: true,
                    slidesToShow: 4
                }
            }, {
                breakpoint: 992,
                settings:{
                    arrows: false,
                    variableWidth: true,
                    slidesToShow: 3
                }
            }
        ]
    });

    $(window).resize(function () {
        if (576 > $(this).width()) {
            SlickCustom();
        }
    });

    $(window).width(function () {
        if (576 > $(this).width()) {
            SlickCustom();
        }
    });

    function SlickCustom() {
        var heights = [];

        if (false === $('.slick-list').find('.price-page-next, .price-page-prev').is(":visible")) {
            $('.slick-list').prepend($('.price-page-next, .price-page-prev'));
        }

        $('.customers-slick-block').each(function(indx, element){
            heights.push($(element).outerHeight());
            if ($('.customers-slick-block').length - 1 === indx) {
                getMax(heights);
            }

        });

        function getMax(arr) {
            var arrLen = arr.length,
                maxEl = arr[0];
            for (var i = 0; i < arrLen; i++) {
                if (maxEl < arr[i]) {
                    maxEl = arr[i];
                }
            }
            return $('.customers-slick-block').css({
                'height' : maxEl
            })
        }
    }

    $('#overflou').click(function(){
        $(this).css({'z-index' : '-1'});
    });

    $('iframe').mouseout(function(){
        if(true === device.windows()) {
            $('#overflou').css({'z-index' : '2000'});
        };
    });

    $(document).click(function(event) {
        if(false === device.windows() || true === device.mobile()) {
            if ($(event.target).closest("#overflou").length) return;
            $("#overflou").css({'z-index' : '2000'});
            event.stopPropagation();
        };
    });

});