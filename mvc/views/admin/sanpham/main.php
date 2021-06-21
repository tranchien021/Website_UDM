 <div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Bảng Sản phẩm</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="<?php echo URLSUB."admin"?>">Home</a></li>
            <li class="breadcrumb-item active">Sản phẩm</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
 <!--  <div class="Find ml-5">
    Find : <input class="" id="myInput" type="text" placeholder="Search..">
  </div> -->
  <!-- /.content-header -->

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <button style="margin: 15px;" type="button" class="btn btn-info float-right"><i class="fas fa-plus"></i><a style=" color:#fff;" href="<?php echo URLSUB."products/add"?>">Thêm Sản phẩm</a></button>
      <table class="table table-head-fixed text-nowrap" id="myTable">
        <thead>
          <tr>
            <th>STT</th>
            <th>ID</th>
            <th>Mã sản phẩm</th>
            <th>Image</th>
            <th>Name</th>
            <th>Address</th>
            <th>Date</th>
            <th>Thể Loại</th>
            <th>Giá</th>
            <th>Nội dung</th>
            <th>Function</th>
            
           
          </tr>
        </thead>
        <tbody id="myTable">
          <?php 
          $stt=0;
          foreach ($data['sanpham'] as $key => $value) {
           ?>
           <tr>
            <td><?php echo $stt; ?></td>
            <td><?php echo $value['id']; ?></td>
            <td><?php echo $value['masp']; ?></td>
            <td><?php echo $value['img']; ?></td>
            <td><?php echo $value['name']; ?></td>  
            <td><?php echo $value['address']; ?></td>
            <td><?php echo $value['date']; ?></td>
            <td><?php echo $value['theloai']; ?></td> 
            <td><?php echo $value['price']; ?></td> 
            <td><?php echo $value['content']; ?></td> 
            <td>
              <a href="<?php echo URLSUB."products/delete/${value['id']}"?>"class="btn btn-danger"><i class="fas fa-trash"></i></a>
              <a href="<?php echo URLSUB."products/edit/${value['id']}"?>" class="btn btn-danger" style="background: aqua;border:aqua;"><i class="fas fa-edit"></i></a>
            </td>
          </tr>
          <?php 
          $stt++;
        }
        ?>
      </tbody>
      <tfoot>
        <tr>
            <th>STT</th>
            <th>ID</th>
            <th>Mã sản phẩm</th>
            <th>Image</th>
            <th>Name</th>
            <th>Address</th>
            <th>Date</th>
            <th>Thể Loại</th>
            <th>Giá</th>
            <th>Nội dung</th>
            <th>Function</th>
          </tr>
      </tfoot>
    </table>
  </div><!-- /.container-fluid -->
</section>

