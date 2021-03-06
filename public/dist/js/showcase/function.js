$(document).ready(function () {
    // INIT ISOTOPE
    $('.list-products').isotope({
        itemSelector: '.item-product',

        columnWidth: '.item-sizer',
        percentPosition: true
    });

    $('.showcase-nav')
        .find('a')
        .unbind()
        .on('click', function () {
            let type = $(this).data('type');

            $('.showcase-nav').find('a').removeClass('active');
            $(this).addClass('active');

            if (type == '*') {
                $('.list-products').isotope({
                    filter: '*'
                });
            } else {
                $('.list-products').isotope({
                    filter: '.item-product-' + type
                });
            }
        });

    // INIT LOCOMOTIVE SCROLL
    const scroll = new LocomotiveScroll({
        el: document.querySelector('[data-scroll-container]'),
        smooth: true,
        smoothMobile: true
    });
});
