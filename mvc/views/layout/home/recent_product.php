 <style>
     .product-listing figure figcaption, .featured-products figure figcaption{
        background-color: #e65c00;
     }
     .button-add-to-cart:hover {
    color: #ffffff;
    background: #e65c00;
}.lookbook-product > a {
    background-color: #e65c00; 
}
.owl-theme .owl-controls .owl-page.active span, .owl-theme .owl-controls.clickable .owl-page:hover span{
        background: #323a45;
}

 </style>
  <section id="recent-product">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <section class="related-products">



                        <!-- Block heading two -->
                        <div class="block-heading-two">
                            <h3><span>Giới thiệu sản phẩm</span></h3>
                        </div>

                        <div class="related-products-wrapper">

                            <div class="related-products-carousel">

                                <div class="product-control-nav">
                                    <a class="prev"><i class="fa fa-angle-left"></i></a>
                                    <a class="next"><i class="fa fa-angle-right"></i></a>
                                </div>


                                <div class="row product-listing">
                                    <div id="product-carousel" class="product-listing">
                                       <?php 
                                       $stt=0;
                                       foreach ($data['sanpham_gioithieu'] as $key1 => $value1) {
                                        ?>
                                        <div class="product  item first ">

                                            <article>


                                                <figure>
                                                    <a href="#">
                                                        <img src="<?php echo URL2;?>img/product/<?php echo $value1['img'] ?>" class="img-responsive" alt="T_2_front">
                                                    </a>
                                                    <figcaption><span class="amount"> <?php echo number_format($value1['price']);?> ₫</span></figcaption>
                                                </figure>

                                                <h4 class="title"><a href="#"><?php echo $value1['name'] ?></a></h4>


                                                <a href="<?php echo URLSUB.'cart/store/'.$value1['id']; ?>" class="button-add-to-cart addCart">Add to cart</a>
                                            </article>

                                        </div>
                                        <?php 
                                        $stt++;
                                    }
                                    ?>

            
                                           


                                           
                                        </div>

                                    </div>
                                </div>

                            </div>

                        </section>
                    </div>
                </div>
            </div>
        </section>

        <!-- Recent items Ends -->


        <div class="bt-block-home-parallax" style="background-image: url(<?php echo URL2;?>img/resource/1.jpg);">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="lookbook-product">
                            <h2><a href="#" title="">Bộ sưu tập Công Nghệ 2021 </a></h2>
                            <ul class="simple-cat-style">
                                <li><a href="#" title="">Iphone</a></li>
                                <li><a href="#" title="">SamSung & RealMe </a></li>
                                <li><a href="#" title="">OPPO</a></li>
                            </ul>
                            <a href="<?php echo URLSUB.'blog'; ?>" title="">read more</a>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- /.bt-block-home-parallax -->

        <!-- Start Our Clients -->

        <section id="Clients" class="light-wrapper">
            <div class="container inner">
                <div class="row">
                    <div class="Last-items-shop col-md-3 col-sm-6">

                        <!-- Block heading two -->
                        <div class="block-heading-two block-heading-three">
                            <h3><span>Đặc Biệt</span></h3>
                        </div>
                    <!--<div class="Top-Title-SideBar">
                        <h3>Special Offer</h3>
                    </div>-->
                    <div class="Last-post">
                        <ul class="shop-res-items">
                            <?php 
                                foreach ($data['top3_dacbiet'] as $key => $value) {
                                    # code...
                                
                             ?>
                            <li>
                                <a href="#"><img src="<?php echo URL2;?>img/product/<?php echo $value['img']; ?>" alt=""></a>
                                <h6><a href="#"><?php echo $value['name']; ?></a></h6>
                                <span class="sale-date"> <?php echo number_format($value['price']) ?> ₫</span>
                            </li>
                            <?php 
                                }
                             ?>
                          
                        </ul>
                    </div>
                </div>
                <div class="Last-items-shop col-md-3 col-sm-6">
                    <!-- Block heading two -->
                    <div class="block-heading-two block-heading-three">
                        <h3><span>Best Giảm Giá</span></h3>
                    </div>
                    <!--<div class="Top-Title-SideBar">
                        <h3>Best Sellers</h3>
                    </div>-->
                    <div class="Last-post">
                        <ul class="shop-res-items">
                            <?php 
                                foreach ($data['top3_giamgia'] as $key1 => $value1) {
                                    # code...
                                
                             ?>
                            <li>
                                <a href="#"><img src="<?php echo URL2;?>img/product/<?php echo $value1['img']; ?>" alt=""></a>
                                <h6><a href="#"><?php echo$value1['name']; ?></a></h6>
                                <span class="sale-date"> <?php echo number_format($value1['price']) ; ?> ₫</span>
                            </li>
                            <?php 
                                    }
                             ?>
                           
                        </ul>
                    </div>
                </div>
                <div class="Last-items-shop col-md-3 col-sm-6">
                    <!-- Block heading two -->
                    <div class="block-heading-two block-heading-three">
                        <h3><span>Nổi Bật</span></h3>
                    </div>
                    <!--<div class="Top-Title-SideBar">
                        <h3>Featured</h3>
                    </div>-->
                    <div class="Last-post">
                        <ul class="shop-res-items">
                            <?php 
                                foreach ($data['top3_noibat'] as $key2 => $value2) {
                                    # code...
                                
                             ?>
                            <li>
                                <a href="#"><img src="<?php echo URL2;?>img/product/<?php echo $value2['img']; ?>" alt=""></a>
                                <h6><a href="#"><?php echo $value2['name']; ?></a></h6>
                                <span class="sale-date"> <?php echo number_format($value2['price']); ?> ₫</span>
                            </li>
                            <?php 
                                    }
                             ?>
                           
                           
                        </ul>
                    </div>
                </div>
                <div class="Last-items-shop col-md-3 col-sm-6">
                    <!-- Block heading two -->
                    <div class="block-heading-two block-heading-three">
                        <h3><span>Top Số Lượng </span></h3>
                    </div>
                    <!--<div class="Top-Title-SideBar">
                        <h3>Sales</h3>
                    </div>-->
                    <div class="Last-post">
                        <ul class="shop-res-items">
                            <?php 
                                foreach ($data['top3_gia'] as $key3 => $value3) {
                                    # code...
                                
                             ?>
                            <li>
                                <a href="#"><img src="<?php echo URL2;?>img/product/<?php echo $value3['img'] ?>" alt=""></a>
                                <h6><a href="#"><?php echo $value3['name'] ?></a></h6>
                                <span class="sale-date"><?php echo number_format( $value3['price']) ; ?> ₫ </span>
                            </li>
                             <?php 
                                    }
                             ?>
                           
                           
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </section>