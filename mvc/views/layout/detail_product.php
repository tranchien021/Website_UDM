<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Single Product | LookCare</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Fav icon -->
    <?php require_once('home/css.php')?>
</head>

<body>
<!--[if lt IE 7]>
<p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->



<?php require_once('home/header.php') ?>
<!-- end header -->


<!-- start main content -->
<main class="main-container">
<section class="product_content_area pt-40">
    <!-- start of page content -->

    <div class="lookcare-product-single container">

        <div class="row">

            <div class="main col-xs-12" role="main">

                <div class=" product">

                    <div class="row">

                        <div class="col-md-5 col-sm-6 summary-before ">

                            <div class="product-slider product-shop">
                                <span class="onsale">Sale!</span>
                                <ul class="slides">
                                    <li data-thumb="<?php echo URL2; ?>img/temp-images/hoodie_7_front-140x140.jpg">
                                        <a href="<?php echo URL2 ;?>img/temp-images/hoodie_7_front.jpg" data-imagelightbox="gallery" class="hoodie_7_front">
                                            <img src="<?php echo URL2 ?>img/product/<?php echo $data['detail_product']['img']; ?>" class="attachment-shop_single" alt="image">
                                        </a>
                                    </li>
                                    

                                </ul>
                            </div>
                        </div>

                        <div class="col-sm-6 col-md-7 product-review entry-summary">

                            <h1 class="product_title"><?php echo $data['detail_product']['name']; ?></h1>

                            <div class="woocommerce-product-rating">
                                <div class="star-rating" title="Rated 4.00 out of 5">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-o"></i>
                                </div>
                                <a href="#reviews" class="woocommerce-review-link">(<span class="count">3</span> customer reviews)</a>
                            </div>

                            <div>
                                <p class="price"><del><span class="amount"><?php echo number_format($data['detail_product']['price'] + 500000);  ?> ₫</span></del>
                                    <ins><span class="amount">&nbsp<?php echo $data['detail_product']['price'] ?> ₫</span></ins></p>
                            </div>

                            <p><?php echo $data['detail_product']['content']; ?></p>


                            <form class="variations_form cart" method="post">
                                <div class="quantity">
                                    <input type="number" step="1" name="quantity" value="1" title="Qty" class="input-text qty text" size="4" min="1">
                                </div>

                                <button type="submit" class="cart-button"><a href="<?php echo URLSUB.'cart/store/'.$data['detail_product']['id'] ; ?> ">Add to cart</a></button>

                            </form>

                            <div class="product_meta">



                                


                                <span class="posted_in">Thể Loại: <a href="#" rel="tag">Smart Phone</a>, <a href="#">Iphone</a>.</span>


                            </div>

                            <div class="share-social-icons">

                                <a href="#" target="_blank" title="Share on Facebook">
                                    <i class="fa fa-facebook"></i>
                                </a>
                                <a href="#" target="_blank" title="Share on Twitter">
                                    <i class="fa fa-twitter"></i>
                                </a>
                                <a href="#" target="_blank" title="Pin on Pinterest">
                                    <i class="fa fa-pinterest"></i>
                                </a>
                                <a href="#" target="_blank" title="Share on Google+">
                                    <i class="fa fa-google-plus"></i>
                                </a>
                            </div>

                        </div>
                        <!-- .summary -->

                    </div>

                    <div class="wrapper-description">

                        <ul class="tabs-nav clearfix">
                            <li class="active">Miêu tả</li>
                            
                        </ul>
                        <div class="tabs-container product-comments">

                            <div class="tab-content">
                                <section class="related-products">

                                    <h2>Miêu tả sản phẩm</h2>

                                    <p>
                                       <?php echo $data['detail_product']['content']; ?>
                                    </p>

                                   

                                </section>
                            </div>



                           

                        </div>

                    </div>





                </div>
                <!-- #product-293 -->



            </div>
            <!-- end of main -->

        </div>
        <!-- end of .row -->

    </div>

    <!-- end of page content -->
</section>

<!-- service area -->
    <section class="block gray no-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="content-box no-margin go-simple">
                        <div class="mini-service-sec">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="mini-service">
                                        <i  class="fa fa-paper-plane"></i>
                                        <div class="mini-service-info">
                                            <h3>Worldwide Delivery</h3>
                                            <p>unc tincidunt, on cursusau gmetus, lorem Hore</p>
                                        </div>
                                    </div><!-- Mini Service -->
                                </div>
                                <div class="col-md-3">
                                    <div class="mini-service">
                                        <i  class="fa  fa-newspaper-o"></i>
                                        <div class="mini-service-info">
                                            <h3>Worldwide Delivery</h3>
                                            <p>unc tincidunt, on cursusa ugmetus, lorem Hore</p>
                                        </div>
                                    </div><!-- Mini Service -->
                                </div>
                                <div class="col-md-3">
                                    <div class="mini-service">
                                        <i  class="fa fa-medkit"></i>
                                        <div class="mini-service-info">
                                            <h3>Friendly Stuff</h3>
                                            <p>unc tincidunt, on cursusau gmetus, lorem Hore</p>
                                        </div>
                                    </div><!-- Mini Service -->
                                </div>
                                <div class="col-md-3">
                                    <div class="mini-service">
                                        <i  class="fa  fa-newspaper-o"></i>
                                        <div class="mini-service-info">
                                            <h3>24/h Support</h3>
                                            <p>unc tincidunt, on cursusa ugmetus, lorem Hore</p>
                                        </div>
                                    </div><!-- Mini Service -->
                                </div>
                            </div>
                        </div><!-- Mini Service Sec -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="clearfix"></div>
<!-- end service area -->
</main>
<!-- end main content -->

<!--  -->
<?php require_once('home/footer.php') ?>
<!-- footer area end -->


<!-- All Script -->

<!-- Scroll up js
============================================ -->



<?php require_once('home/js.php') ?>






<script type="text/javascript">
    /*-----------------------------------------------------------------------------------*/
    /* Flex Slider
     /*-----------------------------------------------------------------------------------*/
    if (jQuery().flexslider) {

        // Product Page Flex Slider
        $('.product-slider').flexslider({
            animation: "slide",
            animationLoop: false,
            slideshow: false,
            prevText: '<i class="fa fa-angle-left"></i>',
            nextText: '<i class="fa fa-angle-right"></i>',
            animationSpeed: 250,
            controlNav: "thumbnails"
        });

    }


    /*-----------------------------------------------------------------------------------*/
    /* Product Carousel
     /*-----------------------------------------------------------------------------------*/
    if (jQuery().owlCarousel) {
        var productCarousel = $("#product-carousel");
        productCarousel.owlCarousel({
            loop: true,
            dots: false,
            responsive: {
                0: {
                    items: 1
                },
                480: {
                    items: 2
                },
                900: {
                    items: 3
                },
                1100: {
                    items: 4
                }
            }
        });

        // Custom Navigation Events
        $(".product-control-nav .next").on("click", function() {
            productCarousel.trigger('next.owl.carousel');
        });

        $(".product-control-nav .prev").on("click", function() {
            productCarousel.trigger('prev.owl.carousel');
        });
    }



    /*-----------------------------------------------------------------------------------*/
    /* Tabs
     /*-----------------------------------------------------------------------------------*/
    $(function() {
        var $tabsNav = $('.tabs-nav'),
                $tabsNavLis = $tabsNav.children('li');

        $tabsNav.each(function() {
            var $this = $(this);
            $this.next().children('.tab-content').stop(true, true).hide()
                    .first().show();
            $this.children('li').first().addClass('active').stop(true, true).show();
        });

        $tabsNavLis.on('click', function(e) {
            var $this = $(this);
            $this.siblings().removeClass('active').end()
                    .addClass('active');
            var idx = $this.parent().children().index($this);
            $this.parent().next().children('.tab-content').stop(true, true).hide().eq(idx).fadeIn();
            e.preventDefault();
        });

    });


    /*-----------------------------------------------------------------------------------*/
    /*  Tabs Widget
     /*-----------------------------------------------------------------------------------*/
    $('.footer .tabbed .tabs li:first-child, .tabbed .tabs li:first-child').addClass('current');
    $('.footer .block:first, .tabbed .block:first').addClass('current');


    $('.tabbed .tabs li').on("click", function() {
        var $this = $(this);
        var tabNumber = $this.index();

        /* remove current class from other tabs and assign to this one */
        $this.siblings('li').removeClass('current');
        $this.addClass('current');

        /* remove current class from current block and assign to related one */
        $this.parent('ul').siblings('.block').removeClass('current');
        $this.closest('.tabbed').children('.block:eq(' + tabNumber + ')').addClass('current');
    });



    /*-----------------------------------------------------------------------------------*/
    /*  Image Lightbox
     /*  http://osvaldas.info/image-lightbox-responsive-touch-friendly
     /*-----------------------------------------------------------------------------------*/
    if (jQuery().imageLightbox) {

        // ACTIVITY INDICATOR

        var activityIndicatorOn = function() {
                    $('<div id="imagelightbox-loading"><div></div></div>').appendTo('body');
                },
                activityIndicatorOff = function() {
                    $('#imagelightbox-loading').remove();
                },


        // OVERLAY

                overlayOn = function() {
                    $('<div id="imagelightbox-overlay"></div>').appendTo('body');
                },
                overlayOff = function() {
                    $('#imagelightbox-overlay').remove();
                },


        // CLOSE BUTTON

                closeButtonOn = function(instance) {
                    $('<button type="button" id="imagelightbox-close" title="Close"></button>').appendTo('body').on('click touchend', function() {
                        $(this).remove();
                        instance.quitImageLightbox();
                        return false;
                    });
                },
                closeButtonOff = function() {
                    $('#imagelightbox-close').remove();
                },

        // ARROWS

                arrowsOn = function(instance, selector) {
                    var $arrows = $('<button type="button" class="imagelightbox-arrow imagelightbox-arrow-left"></button><button type="button" class="imagelightbox-arrow imagelightbox-arrow-right"></button>');

                    $arrows.appendTo('body');

                    $arrows.on('click touchend', function(e) {
                        e.preventDefault();

                        var $this = $(this),
                                $target = $(selector + '[href="' + $('#imagelightbox').attr('src') + '"]'),
                                index = $target.index(selector);

                        if ($this.hasClass('imagelightbox-arrow-left')) {
                            index = index - 1;
                            if (!$(selector).eq(index).length)
                                index = $(selector).length;
                        } else {
                            index = index + 1;
                            if (!$(selector).eq(index).length)
                                index = 0;
                        }

                        instance.switchImageLightbox(index);
                        return false;
                    });
                },
                arrowsOff = function() {
                    $('.imagelightbox-arrow').remove();
                };

        // Lightbox for individual image
        var lightboxInstance = $('a[data-imagelightbox="lightbox"]').imageLightbox({
            onStart: function() {
                overlayOn();
                closeButtonOn(lightboxInstance);
            },
            onEnd: function() {
                closeButtonOff();
                overlayOff();
                activityIndicatorOff();
            },
            onLoadStart: function() {
                activityIndicatorOn();
            },
            onLoadEnd: function() {
                activityIndicatorOff();
            }
        });

        // Lightbox for product gallery
        var gallerySelector = 'a[data-imagelightbox="gallery"]';
        var galleryInstance = $(gallerySelector).imageLightbox({
            quitOnDocClick: false,
            onStart: function() {
                overlayOn();
                closeButtonOn(galleryInstance);
                arrowsOn(galleryInstance, gallerySelector);
            },
            onEnd: function() {
                overlayOff();
                closeButtonOff();
                arrowsOff();
                activityIndicatorOff();
            },
            onLoadStart: function() {
                activityIndicatorOn();
            },
            onLoadEnd: function() {
                activityIndicatorOff();
                $('.imagelightbox-arrow').css('display', 'block');
            }
        });

    }



</script>



</body>


</html>