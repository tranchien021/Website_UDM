<!DOCTYPE html>
<html>
<head>
  <link rel = "icon" href ="https://www.flaticon.com/svg/vstatic/svg/3075/3075977.svg?token=exp=1619435154~hmac=c7f0f23ccb394094e4cb11550346f434" 
        type = "image/x-icon">
  <?php 
    require_once('home/meta.php');
     require_once('home/css.php');
   ?>
  <!-- Font Awesome -->
  
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  <?php 
  require_once('home/navbar.php');
  require_once('home/sidebar.php');
   ?>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  

  <!-- Content Wrapper. Contains page content -->
 
  <!-- /.content-wrapper -->
 <?php 
 require_once($data['main'].'.php');
 require_once('home/footer.php');
  ?>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<?php 
  require_once('home/js.php');
 ?>
</body>
</html>
