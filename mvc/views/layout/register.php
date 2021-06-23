<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->


<head>
  <title>Sign Up page | LookCare</title>
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

    <div class="signuppanel">

      <div class="row">

       
        <div class="col-md-8">

          <form method="post" action="#">

            <h3 class="nomargin">Đăng Ký </h3>
            <p class="mt5 mb20">Bạn có tài khoản ? <a href="<?php echo URLSUB.'login'; ?>"><strong>Đăng Nhập</strong></a></p>

           <!--  <label class="control-label">Name</label>
            <div class="row mb10">
              <div class="col-sm-6">
                <input type="text" class="form-control" placeholder="Firstname" />
              </div>
              <div class="col-sm-6">
                <input type="text" class="form-control" placeholder="Lastname" />
              </div>
            </div> -->

            <div class="mb10">
              <label class="control-label"  for="username">Username</label>
              <input  id="username" name="username" type="text" class="form-control" />
            </div>

            <div class="mb10">
              <label class="control-label" for="password" >Password</label>
              <input id="password" name="password" type="password" class="form-control" />
            </div>

            <div class="mb10">
              <label class="control-label" for="password_confirm">Retype Password</label>
              <input id="password_confirm" name="password_confirm" type="password" class="form-control" />
            </div>

           
            <div class="mb10">
              <label class="control-label"  for="email">Email Address</label>
              <input id="email" name="email" type="text" class="form-control" />
            </div>

           
            <br />

            <button class="btn btn-success btn-block"  name="register">Đăng Ký </button>
          </form>
        </div><!-- col-sm-6 -->

      </div><!-- row -->



    </div><!-- signuppanel -->

  </section>
</main>
<?php require_once('home/footer.php'); ?>
<!-- footer area end -->




<?php require_once('home/js.php'); ?>
</body>


</html>