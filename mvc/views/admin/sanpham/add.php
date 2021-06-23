
     <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Bảng sản phẩm  </h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo URLSUB."admin"?>">Home</a></li>
              <li class="breadcrumb-item"><a href="<?php echo URLSUB."products"?>">Danh sách thành viên</a></li>
              <li class="breadcrumb-item active">Thêm sản phẩm</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
       
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Thêm sản phẩm</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              

              <form action="" method="POST" enctype="multipart/form-data"  >
                <table style="margin: 50px 100px;">
                  <tr>
                    <td>Mã sản phẩm</td>
                    <td><input type="text" class="form-control" id="exampleInputUserName" placeholder="Mã sản phẩm" name="masp"></td>
                  </tr>
                  <tr>
                    <td>Image</td>
                    <td><input type="file" class="form-control" id="exampleInputUserName" placeholder="Image" name="images"> </td>
                  </tr>
                  <tr>
                    <td>Name</td>
                    <td> <input type="text" class="form-control" id="exampleInputlevel1" placeholder="Name" name="name"> </td>
                  
                  </tr>
                  <tr>
                    <td>Address</td>
                    <td> <input type="text" class="form-control" id="exampleInputUserName" placeholder="Address" name="address"></td>
                  </tr>
                  <tr>
                    <td>Date</td>
                    <td><input type="text" class="form-control" id="exampleInputUserName" placeholder="Date" name="date"></td>
                  </tr>
                  <tr>
                    <td>Thể loại</td>
                    <td><input type="text" class="form-control" id="exampleInputUserName" placeholder="Tình trạng" name="category"></td>
                  </tr>
                   <tr>
                    <td>Giá Sản Phẩm</td>
                    <td><input type="text" class="form-control" id="exampleInputUserName" placeholder="Giá sản phẩm" name="price"></td>
                  </tr>
                   <tr>
                    <td>Nội Dung </td>
                    <td><input type="text" class="form-control" id="exampleInputUserName" placeholder="Nội Dung" name="content"></td>
                  </tr>
                </table>

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary" name="addproduct">Thêm sản phẩm </button>
                </div>
              </form>



            </div>
         
        
      </div>
    </section>
    <!-- /.content -->
  </div>