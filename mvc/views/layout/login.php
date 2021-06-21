<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->


<head>
	<title>Login page | LookCare</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Fav icon -->
	<?php require_once('home/css.php'); ?>
</head>
<style>
	.btn-success{
		color: #fff;
		background-color: #e65c00;
		border-color: #fff;
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
<main class="container">

	<section>

		<div class="signinpanel">

			<div class="row">

				<div class="col-md-6 col-md-offset-1">

					<form method="post" action="#">
						<h4 class="nomargin">Đăng Nhập</h4>
						<p class="mt5 mb20">Đăng Nhập vào tài khoản của bạn</p>

						<input type="text" class="form-control uname" placeholder="Username" name="username" />
						<input type="password" class="form-control pword" placeholder="Password" name="password" />
						<a href="<?php echo URLSUB."register"; ?>"><small>Đăng Ký</small></a>
						<button type="submit" class="btn btn-success btn-block" name="signLogin">Đăng Nhập</button>

					</form>
				</div><!-- col-sm-5 -->

				



			</div><!-- row -->


		</div><!-- signin -->

	</section>
</main>
<!-- end  main content -->

<!-- start footer area -->
<?php require_once('home/footer.php'); ?>
<!-- footer area end -->




<?php require_once('home/js.php'); ?>
</body>


</html>