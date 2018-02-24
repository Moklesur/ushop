( function( $ ) {
    $(document).ready(function() {
        //Back To Top
        if ($('#back-to-top').length) {
            var scrollTrigger = 100, // px
                backToTop = function () {
                    var scrollTop = $(window).scrollTop();
                    if (scrollTop > scrollTrigger) {
                        $('#back-to-top').addClass('show');
                    } else {
                        $('#back-to-top').removeClass('show');
                    }
                };
            backToTop();
            $(window).on('scroll', function () {
                backToTop();
            });
            $('#back-to-top').on('click', function (e) {
                e.preventDefault();
                $('html,body').animate({
                    scrollTop: 0
                }, 700);
            });
        }
        //masonry
        
        if ( $(".category-filter").length ){
            var $container = $('.category-filter .products');
            $container.isotope({
                filter: '*',
                animationOptions: {
                    duration: 750,
                    easing: 'linear',
                    queue: false
                }
            });

            $('.category-filter-wrap a').click(function(){
                $('.category-filter-wrap .current').removeClass('current');
                $(this).addClass('current');

                var selector = $(this).attr('data-filter');
                $container.isotope({
                    filter: selector,
                    animationOptions: {
                        duration: 750,
                        easing: 'linear',
                        queue: false
                    }
                });
                return false;
            });
        }
        //Treading Products
        if ( ( '.treading-products' ).length ){
            //$(".treading-products .products").replaceWith($("<div class=\"products\">" + $(".treading-products .products")[0].innerHTML + "</div>"));
            $(".treading-products .products > li").each(function(){
                $(this).replaceWith($("<div>" + this.innerHTML + "</div>"))
            });
            $( '.treading-products .products' ).each( function() {
                $('.treading-products .products').slick({
                    slidesToShow: 4,
                    slidesToScroll: 1,
                    autoplay: false,
                    centerMode: true,
                    nextArrow: '<i class="ion-ios-arrow-right f-2x"></i>',
                    prevArrow: '<i class="ion-ios-arrow-left f-2x"></i>',
                    autoplaySpeed: 2000,
                    responsive: [
                        {
                            breakpoint: 1024,
                            settings: {
                                slidesToShow: 4,
                                slidesToScroll: 1,
                                infinite: true,
                                dots: true
                            }
                        },
                        {
                            breakpoint: 600,
                            settings: {
                                slidesToShow: 2,
                                slidesToScroll: 1
                            }
                        },
                        {
                            breakpoint: 480,
                            settings: {
                                slidesToShow: 1,
                                slidesToScroll: 1
                            }
                        }
                    ]
                });
            });
        }
        //Single Product Image
        if ( ( '.single-product-images figure' ).length ) {
            $('.single-product-images figure').slick({
                slidesToShow: 1,
                slidesToScroll: 1,
                dots: false,
                nextArrow: '<i class="ion-ios-arrow-right f-2x"></i>',
                prevArrow: '<i class="ion-ios-arrow-left f-2x"></i>',
                fade: true,
                asNavFor: '.single-product-images .product-thumbs'
            });
        }
        if ( ( '.single-product-images .product-thumbs' ).length ){
            $('.single-product-images .product-thumbs').slick({
                slidesToShow: 4,
                slidesToScroll: 1,
                nextArrow: '<i class="ion-ios-arrow-right"></i>',
                prevArrow: '<i class="ion-ios-arrow-left"></i>',
                asNavFor: '.single-product-images figure',
                dots: false,
                focusOnSelect: true
            });
        }
    });
})( jQuery );