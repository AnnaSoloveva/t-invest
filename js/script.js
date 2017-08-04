jQuery(document).ready(function(){
    var layout = new Swiper('.layout-slider .swiper-container', {
        nextButton: '.layout-slider .swiper-button-next',
        prevButton: '.layout-slider .swiper-button-prev',
        spaceBetween: 30,
        slidesPerView: 3,
        loop: true,
        breakpoints:{
            767:{
                slidesPerView:1,
                spaceBetween: 60
            }
        }
    });
    var house = new Swiper('.house-slider .swiper-container', {
        nextButton: '.house-slider .swiper-button-next',
        prevButton: '.house-slider .swiper-button-prev',
        spaceBetween: 30,
        slidesPerView: 3,
        loop: true,
        breakpoints:{
            767:{
                slidesPerView:1,
                spaceBetween: 60
            }
        }
    });
    var stage = new Swiper('.stage-slider .swiper-container', {
        nextButton: '.stage-slider .swiper-button-next',
        prevButton: '.stage-slider .swiper-button-prev',
        spaceBetween: 30,
        slidesPerView: 3,
        loop: true,
        breakpoints:{
            767:{
                slidesPerView:1,
                spaceBetween: 60
            }
        }
    });
    $('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
        console.log('click');
        house.update();
        layout.update();
    });
    var mousewheel = 1;
    if (navigator.userAgent.indexOf('Firefox') > -1) {
        mousewheel = 15;
    }

    var scroll = new Swiper('.description-scroll.swiper-container', {
        scrollbar: '.description-scroll .swiper-scrollbar',
        direction: 'vertical',
        slidesPerView: 'auto',
        scrollbarHide: false,
        mousewheelControl: true,
        freeMode: true,
        mousewheelSensitivity: mousewheel,
        scrollbarDraggable: true
    });
    /*Объекты*/
    $('#collapseObject ul li a').bind("mouseenter", function(){
        $(".object-list div").removeClass("hover");
        var idObject = $(this).attr("data-id-object");
        $(".object-list div[data-id-object=" + idObject + "]").addClass("hover");
    })
    $(".object-list .object-item").bind("mouseenter", function(){
        $(".object-list div").removeClass("hover");
        var idObject = $(this).attr("data-id-object");
        $(".object-list div[data-id-object=" + idObject + "]").addClass("hover");
    })
    $(".house-slider .swiper-slide").bind("mouseenter", function(){
        $(".object-list div").removeClass("hover");
        var idObject = $(this).attr("data-id-object");
        $(".object-list div[data-id-object=" + idObject + "]").addClass("hover");
    })
    $(".layout-slider .swiper-slide").bind("mouseenter", function(){
        $(".float").removeClass("active");
        var float = $(this).attr("data-float");
        $(".float[data-float=" + float + "]").addClass("active");
    })
    $(".layout-slider .swiper-slide").bind("mouseleave", function(){
        $(".float").removeClass("active");
    })
    /*lightgallery*/
    $(".house-slider").lightGallery({
        //hash: false,
        thumbnail: false,
        download: true,
        selector: 'a[href$=".png"], a[href$=".jpg"], a[href$=".gif"], a[href$=".jpeg"]'
    });
    $(".stage-slider").lightGallery({
        //hash: false,
        thumbnail: false,
        download: true,
        selector: 'a[href$=".png"], a[href$=".jpg"], a[href$=".gif"], a[href$=".jpeg"]'
    });
    $(".layout-slider").lightGallery({
        //hash: false,
        thumbnail: false,
        download: true,
        selector: 'a[href$=".png"], a[href$=".jpg"], a[href$=".gif"], a[href$=".jpeg"]'
    });
    /*таблицы*/
    $('input[type=tel]').mask("+7(999) 999-99-99");
    $('.content table').stacktable();

})
