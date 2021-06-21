
     <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Bảng Product</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo URLSUB."admin"?>">Home</a></li>
              <li class="breadcrumb-item"><a href="<?php echo URLSUB."products"?>">Danh sách sản phẩm</a></li>
              <li class="breadcrumb-item active">Sửa sản phẩm</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container text-center">
       
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Sửa sản phẩm</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
             

              
              <form action="" method="POST" enctype="multipart/form-data"  >
                <table style="margin: 50px 100px;">
                  <tr>
                    <td>Mã sản phẩm</td>
                    <td><input type="text" class="form-control" id="exampleInputUserName" placeholder="Mã sản phẩm" name="masp" value="<?php echo $data['sanpham']['masp']; ?> "></td>
                  </tr>
                  <tr>
                    <td>Image</td>
                    <td><input type="file" class="form-control" id="exampleInputUserName" placeholder="Image" name="images" value="<?php echo $data['sanpham']['img']; ?> "> </td>
                  
                  </tr>
                  <tr>
                    <td>Name</td>
                    <td><input type="text" class="form-control" id="exampleInputlevel1" placeholder=" name" name="name" value="<?php echo $data['sanpham']['name']; ?> "> </td>
                  
                  </tr>
                  <tr>
                    <td>Address</td>
                    <td> <input type="text" class="form-control" id="exampleInputUserName" placeholder="Adress" name="address" value="<?php echo $data['sanpham']['address']; ?> "></td>
                  </tr>
                  <tr>
                    <td>Date</td>
                    <td><input type="text" class="form-control" id="exampleInputUserName" placeholder="Date" name="date"  value="<?php echo $data['sanpham']['date']; ?> "></td>
                  </tr>
                  <tr>
                    <td>Thể Loại</td>
                    <td><input type="text" class="form-control" id="exampleInputUserName" placeholder="Tình trạng" name="category"  value="<?php echo $data['sanpham']['theloai']; ?> "></td>
                  </tr>
                  <tr>
                    <td>Giá Sản Phẩm</td>
                    <td><input type="text" class="form-control" id="exampleInputUserName" placeholder="Giá sản phẩm" name="price" value="<?php echo $data['sanpham']['price']; ?> "></td>
                  </tr>
                   <tr>
                    <td>Nội Dung </td>
                    <td><input type="text" class="form-control" id="exampleInputUserName" placeholder="Nội Dung" name="content" value="<?php echo $data['sanpham']['content']; ?> "></td>
                  </tr>
                </table>

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary" name="editproduct">Sửa sản phẩm</button>
                </div>
              </form>
            </div>
         
        
      </div>
    </section>
    <!-- /.content -->
  </div>