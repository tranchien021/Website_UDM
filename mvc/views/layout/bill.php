<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->

<style>
	.btn{
		font-size: 15px;
	}
	.btn.btn-custom-6{
		background-color: #e65c00;
	}

</style>
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
	.btns{
		font-size: 30px;
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
<div class="text-center" style="padding:10px;"> 
		<h3>Thông tin tài khoản </h3>
		<h4>Username : <?php 
		if(isset($_SESSION['username'])){
			echo $_SESSION['username'];
		}
			else{
				echo "Chưa đang nhập";
		}
		 
		 ?></h4>
		<span>Email : <?php echo $_SESSION['email']; ?></span><br>

		<span>Địa chỉ : <input name="address" id="address" type="text" placeholder="Đăk Song, Đăk Nông"></span>
		<?php if(isset($_SESSION['address'])){
				$_SESSION['address']=$_POST['address'];
			} ?>
	</div>
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
										<script>
										array = [];
									</script>
										<?php 
	                              			$stt=0;

	                              		foreach ($data as $key => $value) {
	                             ?>

									<tr class="order_total" >
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
										<td class="product-price-col" id="price<?php echo $value["id"] ?>">
											<span class="product-price-special"><?php echo number_format($value['price']); ?></span>
										</td>
										<td>
											<div class="custom-quantity-input">
												<span name="quanlity[<?php echo $value['id']; ?>]" class="product-price-special"><?php echo $value['quanlity']; ?></span>

											</div>
										</td>
										<td class="product-total-col" id="total<?php echo $value["id"] ?>">
											<span class="product-price-special"> <?php echo number_format($value['price']*$value['quanlity']) ; ?></span>
										</td>
										
										
									</tr>
									<script type="text/javascript">
										array.push({
											id: <?php echo $value["id"] ?>,
											name: "<?php echo $value['name'] ?>",
											price: <?php echo $value['price'] ?>,
											quanlity: <?php if (isset($_SESSION["email"])) {
												echo $value["quanlity"];
											} else {
												echo $value["quanlity"];
											} ?>,
										})
									</script>
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

									
									<div class="col-md-12">

										<table class="table total-table">

											<tbody>
											<tr>
												<td class="total-table-title">Total:</td>
												<td><?php 
                                         $tong=0;
                                            foreach($data as $value)
                                            {
                                                $tong += $value['quanlity']*$value['price'];
                                            }
                                          echo number_format($tong+ 30000) ;
                                          ?></td>
											</tfoot>
										</table>
										<!-- End table -->

										<div class="mt-30"></div>


										<div class="text-right">
											<button  name="pay" type="button" class="btn btn-custom-6 btn-lger min-width-sm btns" id="btn">
                            			Thanh toán
                       	 				</button>
											
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
<script src="https://smtpjs.com/v3/smtp.js"></script>
<script>
	function format(n) {
        return (n).toLocaleString('vi', {
            style: 'currency',
            currency: 'VND'
        })
    }

     var total = 0;
    array.forEach(item => {
        $("#price" + item.id).html(format(item.price));

        $("#total" + item.id).html(format(item.price * item.quanlity));
        total += item.price * item.quanlity;

        $("#total").html(format(total));
    })

    console.log(total);
	 var item = array.map(item => `
        <tbody>
                <tr>
                    <td>${item.name}</td>
                    <td>${item.quanlity}</td>
                    <td>${format(item.price)}</td>
                </tr>
        </tbody>
    `).join('');


    var content = `
    <p> Hoá đơn của bạn gồm  : </p><br>

    <table style="width:500px; text-align:center" cellspacing=”0” cellpadding=”0” width=”640” align=”center” border=”0.5”>
        <thead>
            <tr style="color:#fff; background-color:#e65c00 ">
                <th>Tên sản phẩm</th>
                <th>Số lượng</th>
                <th>Giá</th>
            </tr>
        </thead>` + item + 

        `<tfoot>
            <tr>
                    <th colspan="2">
                        <div class="text-left">
                            <h4 style="color: #e65c00;margin-top: 13px">Tổng tiền cần thanh toán:</h4>
                        </div>
                    </th>
                    <th>
                        <span class="pl-2" style="color: #e65c00; font-size: 18px;" id="total">${format(total+30000)}</span>
                    </th>
            </tr>
        </tfoot>
        </table>
        <br>
        <p>Tiền phí vận chuyển  :  30.000 ₫</p>
		<p>Kiểm tra đơn hàng tại : <?php echo URLSUB.'bill';?></p>

         `;

	$("#btn").click(function(event){
		if($("#address").val().length == 0){
			swal("Vui lòng nhập địa chỉ", "", "warning");
			window.scroll({
				top:0
			})
		}
		else{
			var address=$('#address').val();

			Email.send({
				Host:"smtp.gmail.com",
				Username:"projectfood21@gmail.com",
				Password:"tranminhchien",
				SecureToken:"Generate token here",
				From:"projectfood21@gmail.com",
				To:"<?php echo $_SESSION['email']; ?>",
				Subject: "Hello you have one mail from website by Minh Chien ",
				Body: content
			}).then(function(response){
				if(response=="OK"){
					swal("Vui lòng xác thực qua email ", "", "success");
					 window.setTimeout(function() {
                        window.location.href = "<?php echo URLSUB ?>"+ 'bill';
                    }, 3000);
				}
				else{
					swal("Đã xảy ra lỗi", "", "error");
				}
			});
		}
	})
</script>

</body>


</html>