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
	<title>Shopping Cart | LookCare</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Fav icon -->
	<?php require_once('home/css.php') ?>
</head>
<style>
	.btn-success{
		color: #fff;
		background-color: #e65c00;
		border-color: #fff;
	}
	.btn.btn-custom-6{
		background-color: #323a45;
	}

</style>

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
	<form role="form" method="POST" >
		<div class="ld-subpage-content">

			<div class="ld-cart">

				<!-- Begin cart section -->
				<section class="ld-cart-section ptb-50">

					<div class="container">

						<div class="row">

							<div class="col-md-12">

								<!-- Begin table -->
								<table class="table cart-table">
									<thead>
									<tr>
										<th class="table-title">Product Name</th>
										<th class="table-title">Number</th>
										<th class="table-title">Unit Price</th>
										<th class="table-title">Quantity</th>
										<th class="table-title">SubTotal</th>
										<th>

											<span class="close-button disabled"></span></th>
									</tr>
									</thead>


									<tbody >
										<?php 
	                              			$stt=0;

	                              		foreach ($data as $key => $value) {
	                             ?>

									<tr class="" id="<?php echo 'product'.$stt; ?>" >
										<td class="product-name-col">
											<figure>
												<a href="#"><img class="img-responsive" src="<?php echo URL2 ;?>img/product/<?php echo $value['img']; ?>". alt="White linen sheer dress"></a>
											</figure>
											<h2 class="product-name"><a href="#"><?php echo $value['name'];  ?></a></h2>

											<ul>
												<li>Color: White</li>
												<li>Size: SM</li>
											</ul>
										</td>
										<td class="product-code"><?php echo $stt ?></td>
										<td class="product-price-col">
											<span class="product-price-special"><?php echo number_format($value['price']); ?></span>
										</td>
										<td>
											<div class="custom-quantity-input">
												<input  type="text" value="<?php echo $value['quanlity']; ?>" name="quanlity[<?php echo $value['id']; ?>]" id ="<?php echo 'qty'.$stt; ?>" >
											</div>
										</td>
										<td class="product-total-col">
											<span class="product-price-special"> <?php echo number_format($value['price']*$value['quanlity']) ; ?></span>
										</td>
										<td>
											<a href="<?php echo URLSUB.'cart/delete/'.$value['id'];  ?>" class="deleteCartById close-button" data-id="<?php echo $stt; ?>" ><i class="fa fa-times"></i></a>
										</td>
									</tr>
									 <?php 
	                               $stt++;
	                                }
	                            ?>
									<!-- End tr -->

									
									</tbody>
								</table>
								<!-- End table -->

								<div class="mt-30"></div>

								<div class="row">

									<div class="col-md-8">

										<!-- Begin tab container -->
										<div class="tab-container left clearfix">

											<ul class="nav nav-tabs" role="tablist">

												<li class="active"><a href="#shipping" data-toggle="tab">Phiếu giảm giá</a></li>
												
												
											</ul>


											<!-- Begin tab content -->
											<div class="tab-content">

												<div class="tab-pane fade in active" id="shipping">

													<form action="#" class="clearfix">

													<p class="ship-desc">Nhập mã code :</p>
													<hr>

													<div class="ship-row clearfix">

														<span class="ship-label col-3">Code Giảm giá<i>*</i></span>

														<div class="col-3-2x">
															<input type="text" class="form-control" placeholder="Code">
														</div>

													</div>
													<!-- /.ship-row -->

													<div class="xs-margin"></div>

													<p>Code sử dụng trong nhiều mục đích giảm giá, miễn phí vận chuyển , hoàn tiền ảo (Đang cập nhật ...)</p>
														<!-- /.ship-row -->
													</form>
												</div>
												<!-- /.tab-pane -->

												
												<!-- /.tab-pane -->

												
												<!-- /.tab-pane -->
											</div>
											<!-- /.tab-content -->
										</div>
										<!-- /.tab-container -->



										<div class="mt-30"></div>
										<a href="<?php echo URLSUB ?>" class="btn btn-custom-6 btn-lger min-width-lg">Continue Shopping</a>
										
										<button type="submit" class="btn btn-custom-6 btn-lger min-width-lg " name="updateCart">Update</a></button>
									</div>

									<div class="mt-30 visible-sm visible-xs clearfix"></div>

									<div class="col-md-4">

										<table class="table total-table">

											<tbody>
											<tr>
												<td class="total-table-title">Subtotal:</td>
												<td><?php 
                                         $tong=0;
                                            foreach($data as $value)
                                            {
                                                $tong += $value['quanlity']*$value['price'];
                                            }
                                          echo number_format($tong);
                                          ?></td>
											</tr>
											<tr>
												<td class="total-table-title">Shipping:</td>
												<td>30,000</td>
											</tr>
											<tr>
												<td class="total-table-title">TAX (0%):</td>
												<td>0.00</td>
											</tr>
											</tbody>

											<tfoot>
											<tr>
												<td>Total:</td>
												<td><?php echo number_format($tong+30000) ?></td>
											</tr>
											</tfoot>
										</table>
										<!-- End table -->

										<div class="mt-30"></div>

										<div class="text-right"><a href="<?php echo URLSUB.'bill'; ?>" class="btn btn-custom-6 btn-lger min-width-sm">Checkout</a>
										</div>

									</div>
									<!-- /.col-md-4 -->
								</div>
								<!-- /.row -->
							</div>
						</div>
					</div>

				</section>
				<!-- /.ld-cart-section -->

			</div>
		<!-- /.ld-cart -->
		</div>
	</form>
	
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