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
    <title> Shop | LookCare</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Fav icon -->
    <?php require_once('home/css.php') ?>
</head>

<body>
<!--[if lt IE 7]>
<p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->


<!-- Start Loading -->

<!-- End Loading  -->

<!-- start header -->
<?php require_once('home/header.php'); ?>
<!-- end header -->

<!-- start main content -->
<main class="main-container">
<!-- shopping cart content -->
<section class="shopping-cart-area ">
    <!-- Begin cart -->
    <div class="ld-subpage-content">

        <div class="ld-cart">

            <!-- Begin cart section -->
            <section id="popular-product" class="ecommerce">
        <div class="container">
            <!-- Shopping items content -->
            <div class="shopping-content">

                <!-- Block heading two -->
                <div class="block-heading-two">
                    <h3><span>Thể Loại Sản Phẩm</span></h3>
                </div>

                <div class="row">
                    <?php 
                    $stt=0;
                    foreach ($data['shop'] as $key => $value) {
                ?>
                    <div class="col-md-3 col-sm-6">
                        <!-- Shopping items -->
                        <div class="shopping-item">
                            <!-- Image -->
                            <a href="<?php echo URLSUB.'detail_product/'.$value['id']; ?>"><img class="img-responsive" src="<?php echo URL2; ?>img/product/<?php echo $value['img']; ?>" alt="" /></a>
                            <!-- Shopping item name / Heading -->
                            <h4><a href="single-product.html"><?php echo $value['name']; ?></a><span class="color pull-right"><?php echo $value['price']; ?></span></h4>
                            <div class="clearfix"></div>
                            <!-- Buy now button -->
                            <div class="visible-xs">
                                <a class="btn btn-color btn-sm" href="#">Buy Now</a>
                            </div>
                            <!-- Shopping item hover block & link -->
                            <div class="item-hover bg-color hidden-xs">
                                <a class="addCart" href="<?php echo URLSUB.'cart/store/'.$value['id']; ?>">Add to cart</a>
                            </div>
                        </div>
                    </div>
                    <?php 
                    $stt++;
                    }
                ?>
                    
                </div>
                <!-- Pagination -->
               <!--  <div class="shopping-pagination pull-right">
                    <ul class="pagination">
                        <li class="disabled"><a href="#">&laquo;</a></li>
                        <li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                        <li><a href="#">&raquo;</a></li>
                    </ul>
                </div> -->
                <!-- Pagination end-->
            </div>
        </div>
    </section>
            <!-- /.ld-cart-section -->

        </div>
        <!-- /.ld-cart -->
    </div>
    <!-- /.ld-subpage-content -->
    <!-- End Cart -->
</section>
<!-- end shopping cart content -->

</main>

<!-- start footer area -->
<?php require_once('home/footer.php'); ?>
<!-- footer area end -->


<!-- All Script -->
<?php require_once('home/js.php'); ?>
</body>


</html>