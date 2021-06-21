<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->


<head>
	<title>Blog Standard | LookCare</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Fav icon -->
	<?php require_once('home/css.php'); ?>
</head>

<body>
<!--[if lt IE 7]>
<p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->

<!-- Start Loading -->

<!-- End Loading  -->

<?php require_once('home/header.php'); ?>
<!-- end header -->

<!-- start main content -->
<main class="main-container ptb-40">

	<!-- Begin Blog -->
	<div class="ld-subpage-content">
		<div class="ld-blog">



			<!-- Blog / Srart
          ================================================== -->
			<section class="blog">
				<div class="container">

					<div class="row">

						<div class="col-md-12">

							<!-- Post Start -->
							<?php foreach ($data['blog'] as $key => $value) {
								# code...
							?>
							<article class="post">

								<div class="main-info pull-left">
									<!-- Date -->
									<div class="date">
										<span class="month">May</span>
										<span class="day">31</span>
									</div>

									<!-- Comments Number -->
									<a href="#" class="commentsnumber">
										<span>14</span> comments
									</a>
								</div>

								<div class="post-content">

									<!-- Thumbnail -->
									<a href="#"><img src="<?php echo URL2;?>img/blog/<?php echo $value['img']; ?>" alt=""></a>

									<!-- Title -->
									<h2><a href="#"><?php echo $value['name']; ?></a></h2>

									<!-- Meta -->
									<div class="meta clearfix">

                                            <span>
                                  <img src="<?php echo URL2;?>img/icons/user.png" alt="author">posted by MinhChien,
                              </span>
                                            <span>
                                  <img src="<?php echo URL2;?>img/icons/ribbon.png" alt="author">
                                </span><span>in <a href="#">Thiết bị</a>, <a href="#">Công Nghệ</a>.</span>

									</div>

									<!-- Content -->
									<p>
										<?php echo $value['content']; ?>
									</p>

									<!-- Read More -->
									<a href="#" class="btn continue">Read More</a>

								</div>

							</article>
							<?php 
								}
							 ?>
							<!-- Post End -->

							<!-- Post Start -->
							
							<!-- Post End -->
						</div>

					</div>
					<!-- /.row -->
					<div class="row">
						<div class="col-md-12">
							<div class="pagination_area pull-right">
								<nav>
									<ul class="pagination">
										<li>
											<a href="#" aria-label="Previous">
												<i class="fa fa-caret-left"></i>
											</a>
										</li>
										<li class="active"><a href="#">1</a></li>
										<li><a href="#">2</a></li>
										<li><a href="#">3</a></li>
										<li>
											<a href="#" aria-label="Next">
												<i class="fa fa-caret-right"></i>
											</a>
										</li>
									</ul>
								</nav>
							</div>
						</div>
					</div>

				</div>

			</section>
			<!-- Blog / End
          ================================================== -->





		</div>
		<!-- /.life-style-blog -->
	</div>

</main>
<!-- end  main content -->

<!-- start footer area -->
<?php require_once('home/footer.php'); ?>
<!-- footer area end -->



<?php require_once('home/js.php'); ?>



</body>


</html>