<style>
    .header-1 .navi{
        background-color:#e65c00;
        border-bottom: 1.5px solid #000;
    }
    .search-box button, .shopping-cart, #scrollUp, .label-pro-sale, .zigzag-bottom, h2.deals-title, .divider, .new_pro, .sale, .cart-button a i:hover, .form-group input[type="button"]:hover, .product-buttons li button:hover, a.chekout, a.coupon:hover, a.quote:hover,  a.btn.btn-custom-6:hover, a.close-button i:hover, .contact-form input[type="submit"]:hover, .btn-radius:hover, .accordion-widget-minus, .leave-comments button:hover, .leave-comments button:focus, .venas-post-share i:hover, button.btn-cart:hover, .cart-icon a i:hover, .seller-curosel .owl-next i:hover, .seller-curosel .owl-prev i:hover, .latest-blog .owl-prev i:hover, .latest-blog .owl-next i:hover, .checkout-area .c-btn:hover, .login-btn:hover, .login-reister-area .c-btn:hover, .form-action input[type="submit"]:hover, .button.style-1:hover, .button.style-9:hover, #compare-total:hover, .rel-button a i:hover, .related-products .owl-next i:hover, .related-products .owl-prev i:hover, .brand-curosel .owl-prev i:hover, .brand-curosel .owl-next i:hover  {
    background-color:#e65c00;
}
.top-bar{
    background-color:#e65c00;
    color: #000;
}
.color{
    color: #fff !important;
}
.top-bar a{
    color:#fff;
}
.btn.btn-color:hover, .btn.btn-color:focus, .btn.btn-color.active, .btn.btn-color:active {
    background: #e65c00;
    color: #ffffff;
    border: 1px solid #05AED5;
}
.header-1 .navi .navy ul > li.has-sub > a:after{
    color:#fff;
}
.header-1 .navi .navy #menu-button{
     background: #e65c00;
}
.header-1 .logo h1 a i{
    color: #e65c00;
}
.header-1 .navy > ul > li > a{
    padding: 12px 20px;
}
</style>
<header>
    <!-- Top bar starts -->
    <div class="top-bar">
        <div class="container">

            <!-- Contact starts -->
            <div class="tb-contact pull-left">
                <!-- Email -->
                <i class="fa fa-envelope color"></i> &nbsp; <a href="mailto:contact@domain.com">tranchien021@gmail.com</a>
                &nbsp;&nbsp;
                <!-- Phone -->
                <i class="fa fa-phone color"> <a href="">0349-521-656</a></i> 
                &nbsp;&nbsp;
                <i class="fa fa-user color "><a href="<?php echo URLSUB.'logout'; ?>">
                    &nbsp;&nbsp;<?php
                    if(isset($_SESSION['username'])){
                        echo $_SESSION['username'];
                    }
                    else{
                        echo "";
                    }
                 ?>
                </a></i>
            </div>
            <!-- Contact ends -->

            <!-- Shopping kart starts -->
            <div class="tb-shopping-cart pull-right">
                <!-- Link with badge -->
                <a href="#" class="btn btn-white btn-xs b-dropdown"><i class="fa fa-shopping-cart"></i> <i class="fa fa-angle-down color"></i> <span class="badge badge-color" id="num_cart"><?php 
                            if(isset($_SESSION['cart'])){
                                echo count($_SESSION['cart']);
                            }
                            else{
                                echo "0";
                            }
                           ?></span></a>
                <!-- Dropdown content with item details -->
                <div class="b-dropdown-block">
                    <!-- Heading -->
                    <h4><i class="fa fa-shopping-cart color"></i> Sản Phẩm </h4>
                    
                    <a href="<?php echo URLSUB.'cart';?>" class="btn btn-white btn-sm">View Cart</a> &nbsp; <a href="<?php echo URLSUB.'bill' ?>" class="btn btn-color btn-sm">Checkout</a>
                </div>
            </div>
            <!-- Shopping kart ends -->

            <!-- Langauge starts -->
           
            <!-- Language ends -->

            <!-- Search section for responsive design -->
            <div class="tb-search pull-left">
                <a href="#" class="b-dropdown"><i class="fa fa-search square-2 rounded-1 bg-color white"></i></a>
                <div class="b-dropdown-block">
                    <form action="<?php echo URLSUB.'search';?>" method="POST">
                        <!-- Input Group -->
                        <div class="input-group">
                            <input name="name_search" type="text" class="form-control" placeholder="Tìm kiếm sản phẩm">
                            <span class="input-group-btn">
                                <button name="search" type="submit" class="btn btn-color" type="button">Tìm kiếm</button>
                            </span>
                        </div>
                    </form>
                </div>
            </div>
            <!-- Search section ends -->

            <!-- Social media starts -->
            <div class="tb-social pull-right">
                <div class="brand-bg text-right">
                    <!-- Brand Icons -->
                    <a href="https://www.facebook.com/tran.minhchien.10/" class="facebook"><i class="fa fa-facebook square-2 rounded-1"></i></a>
                    <a href="<?php echo URLSUB.'login'; ?>" class="google-plus"><i class="fa fa-user square-2 rounded-1"></i></a>

                </div>
            </div>
            <!-- Social media ends -->

            <div class="clearfix"></div>
        </div>
    </div>

    <!-- Top bar ends -->

    <!-- Header One Starts -->
    <div class="header-1">

        <!-- Container -->
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-4">
                    <!-- Logo section -->
                    <div class="logo">
                        <h1><a href="<?php echo URLSUB; ?>"><i class="fa fa-phone"></i> Phone Smart</a></h1>
                    </div>
                </div>
                <div class="col-md-6 col-md-offset-2 col-sm-5 col-sm-offset-3 hidden-xs">
                    <!-- Search Form -->
                    <div class="header-search">
                        <form action="<?php echo URLSUB.'search';?>" method="POST">
                            <!-- Input Group -->
                            <div class="input-group">
                                <input name="name_search" type="text" class="form-control" placeholder="Sản phẩm tìm kiếm">
                                <span class="input-group-btn">
                                    <button name="search" type="submit" class="btn btn-color" type="button">Tìm Kiếm</button>
                                </span>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- Navigation starts -->

        <div class="navi">
            <div class="container">
                <div class="navy">
                    <ul>
                        <!-- Main menu -->
                        <li><a href="<?php echo URLSUB ?>">Home</a>
                            <!-- Submenu -->
                        </li>


                        <li><a href="#">Thể Loại</a>
                            <ul>
                                <li><a href="<?php echo URLSUB.'Detail_Category/1' ?>">Iphone</a>
                                   
                                </li>
                                <li><a href="<?php echo URLSUB.'Detail_Category/2' ?>">SamSung</a>
                                    
                                </li>
                                <li><a href="<?php echo URLSUB.'Detail_Category/3' ?>">Nokia</a>
                                   
                                </li>
                                 <li><a href="<?php echo URLSUB.'Detail_Category/4' ?>">RealMi</a>
                                   
                                </li>
                                 <li><a href="<?php echo URLSUB.'Detail_Category/5' ?>">XiaoMe</a>

                                <li><a href="<?php echo URLSUB.'Detail_Category/6' ?>">Lumia</a>
                                   
                                </li>
                                <li><a href="<?php echo URLSUB.'Detail_Category/7' ?>">VSmart</a>
                                    
                                </li>
                                <li><a href="<?php echo URLSUB.'Detail_Category/8' ?>">Huawei</a>
                                   
                                </li>
                                 <li><a href="<?php echo URLSUB.'Detail_Category/9' ?>">ViVo</a>
                                   
                                </li>
                                 
                                   
                                
                            </ul>
                        </li>

                        <li><a href="<?php echo URLSUB.'blog'; ?>">Blog</a>
                        
                        </li>

                        <li><a href="#">Pages</a>
                            <ul>
                                <li><a href="<?php echo URLSUB.'shop' ?>"><span>Shop</span></a></li>
                               
                                <li><a href="<?php echo URLSUB.'cart'; ?>"><span>Giở Hàng</span></a></li>
                                <li><a href="<?php echo URLSUB.'bill'; ?>"><span>Checkout</span></a></li>
                                
                                <li><a href="<?php echo URLSUB.'login' ?>"><span>Đăng Nhập</span></a></li>
                                <li><a href="<?php echo URLSUB.'register'; ?>"><span>Đăng Ký</span></a></li>
                                
                            </ul>
                        </li>

                       
                        <li><a href="<?php echo URLSUB.'contact'; ?>">Liên Hệ</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Navigation ends -->

    </div>

    <!-- Header one ends -->

</header>