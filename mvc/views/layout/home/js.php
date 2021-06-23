<script src="<?php echo URL2 ;?>js/vendor/jquery-1.10.2.min.js"></script>
<script src="<?php echo URL2 ;?>js/bootstrap.min.js"></script>
<script src="<?php echo URL2 ;?>js/smoothscroll.js"></script>
<!-- Scroll up js
    ============================================ -->
    <script src="<?php echo URL2 ;?>js/jquery.scrollUp.js"></script>
    <script src="<?php echo URL2 ;?>js/menu.js"></script>
    <!-- new collection section script -->
    <script src="<?php echo URL2 ;?>js/swiper/idangerous.swiper.min.js"></script>
    <script src="<?php echo URL2 ;?>js/swiper/swiper.custom.js"></script>

    <!-- Magnific Popup -->
    <script src="<?php echo URL2 ;?>js/jquery.magnific-popup.min.js"></script>

    <script src="<?php echo URL2 ;?>js/jquery.countdown.min.js"></script>

    <!-- SLIDER REVOLUTION SCRIPTS  -->
    <script type="text/javascript" src="<?php echo URL2; ?>rs-plugin/js/jquery.themepunch.plugins.min.js"></script>
    <script type="text/javascript" src="<?php echo URL2; ?>rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
    <!-- Owl carousel -->
    <script src="<?php echo URL2 ;?>js/owl.carousel.min.js"></script>
    <script src="<?php echo URL2 ;?>js/main.js"></script>
    <script src="<?php echo URL2;?>js/flexslider/jquery.flexslider-min.js"></script>
    <script src="<?php echo URL2;?>js/image-lightbox/imagelightbox.js"></script>
    <script src="https://smtpjs.com/v3/smtp.js"></script>




    <script type="text/javascript">

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

    /* Main Slider */
    $('.tp-banner0').show().revolution({
        dottedOverlay: "none",
        delay: 5000,
        startWithSlide: 0,
        startwidth: 869,
        startheight: 520,
        hideThumbs: 10,
        hideTimerBar: "on",
        thumbWidth: 50,
        thumbHeight: 50,
        thumbAmount: 4,
        navigationType: "bullet",
        navigationArrows: "solo",
        navigationStyle: "round",
        touchenabled: "on",
        onHoverStop: "on",
        swipe_velocity: 0.7,
        swipe_min_touches: 1,
        swipe_max_touches: 1,
        drag_block_vertical: false,
        parallax: "mouse",
        parallaxBgFreeze: "on",
        parallaxLevels: [7, 4, 3, 2, 5, 4, 3, 2, 1, 0],
        keyboardNavigation: "off",
        navigationHAlign: "right",
        navigationVAlign: "bottom",
        navigationHOffset: 30,
        navigationVOffset: 30,
        soloArrowLeftHalign: "left",
        soloArrowLeftValign: "center",
        soloArrowLeftHOffset: 50,
        soloArrowLeftVOffset: 8,
        soloArrowRightHalign: "right",
        soloArrowRightValign: "center",
        soloArrowRightHOffset: 50,
        soloArrowRightVOffset: 8,
        shadow: 0,
        fullWidth: "on",
        fullScreen: "off",
        spinner: "spinner4",
        stopLoop: "on",
        stopAfterLoops: -1,
        stopAtSlide: -1,
        shuffle: "off",
        autoHeight: "off",
        forceFullWidth: "off",
        hideThumbsOnMobile: "off",
        hideNavDelayOnMobile: 1500,
        hideBulletsOnMobile: "off",
        hideArrowsOnMobile: "off",
        hideThumbsUnderResolution: 0,
        hideSliderAtLimit: 0,
        hideCaptionAtLimit: 500,
        hideAllCaptionAtLilmit: 500,
        videoJsPath: "rs-plugin/videojs/",
        fullScreenOffsetContainer: ""
    });



</script>
 <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script type="text/javascript">
        $('a.addCart').click(function(event){
          event.preventDefault();
          var href=$(this).attr("href");
          
          $.ajax({
            url:href,
            type:'GET',
            data:{},
            success:function(res){
              if($.trim(res)=='Thêm thành công'){
                swal(res,"","success");
                 $("#num_cart").load("http://localhost:8080/MVC_DOAN1/ #num_cart");
              }
              else{
                swal(res,"","error");
              }
            }
            });
        });
    </script>
     <script type="text/javascript">
        $('a.updateCartById').click(function(event){
          event.preventDefault();
          var href=$(this).attr("href");
          var stt=$(this).attr("data-id");
          var temp='qty'+stt;
          var qty=$('#'+temp).val();
          var total='total'+stt;
          var product='#product'+stt;
          qty=parseInt(qty);
          console.log(qty);
          $.ajax({
            url:href,
            type:'POST',
            data:{qty:qty},
            success:function(res){   
                if(res.trim()=='Xóa thành công'){
                     swal(res,"","success");
                    $(product).empty();
                }else{
                  swal(res,"","success");
                  $(".order_total").load("http://localhost:8080/MVC_DOAN1/cart/index #total_amount");
                  $(".cart_item_pric").load("http://localhost:8080/MVC_DOAN1/cart/index #"+total);
                 }
            }
            });
        });
        $('a.deleteCartById').click(function(event){
          event.preventDefault();
          var href=$(this).attr("href");
          var stt=$(this).attr("data-id");
           var product='#product'+stt;
          $.ajax({
            url:href,
            type:'GET',
            data:{},
            success:function(res){   
               swal(res,"","success");
               $(product).empty();
                $(".order_total").load("http://localhost:8080/UNGDUNGMANG/cart/index #total_amount");
            }
            });
        });
        $('a.deleteCartAll').click(function(event){
          event.preventDefault();
          var href=$(this).attr("href");
         
          $.ajax({
            url:href,
            type:'GET',
            data:{},
            success:function(res){   
               swal(res,"","success");
               $("#listCart").empty(); 
            }
            });
        });
        
    </script>