<style>
    .ecommerce .shopping-item{
        border: 1px solid #adad85;
    }
    .color{
        color:#ff8080 !important;
    }
</style>
  <section id="popular-product" class="ecommerce">
        <div class="container">
            <!-- Shopping items content -->
            <div class="shopping-content">

                <!-- Block heading two -->
                <div class="block-heading-two">
                    <h3><span>Sản Phẩm Nổi Bật</span></h3>
                </div>

                <div class="row">
                    <?php 
                    $stt=0;
                    foreach ($data['sanpham_noibat'] as $key => $value) {
                ?>
                    <div class="col-md-3 col-sm-6">
                        <!-- Shopping items -->
                        <div class="shopping-item">
                            <!-- Image -->
                            <a href="<?php echo URLSUB.'detail_product/'.$value['id']; ?>"><img class="img-responsive" src="<?php echo URL2; ?>img/product/<?php echo $value['img']; ?>" alt="" /></a>
                            <!-- Shopping item name / Heading -->
                            <h4><a href="single-product.html"><?php echo $value['name']; ?></a><span class="color pull-right"><?php echo number_format($value['price']); ?> ₫</span></h4>
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