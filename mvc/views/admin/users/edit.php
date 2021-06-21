
     <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Bảng user</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo URLSUB."admin"?>">Home</a></li>
              <li class="breadcrumb-item"><a href="<?php echo URLSUB."users"?>">Danh sách thành viên</a></li>
              <li class="breadcrumb-item active">Sửa thành viên</li>
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
                <h3 class="card-title">Sửa thành viên</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" method="POST">
                <div class="card-body">
                    <div class="form-group">
                      <label for="exampleInputPassword1">User name</label>
                      <input type="text" class="form-control" id="exampleInputUserName" placeholder="User name" name="username" value="<?php echo $data['user']['useName']; ?> ">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Password</label>
                       <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password" value="<?php echo $data['user']['passWord']; ?> ">
                  </div>
                   <div class="form-group">
                      <label for="exampleInputPassword1">Email</label>
                       <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Email" name="email" value="<?php echo $data['user']['email']; ?> ">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Level</label>
                    <input type="text" class="form-control" id="exampleInputlevel1" placeholder=" Level" name="level" value="<?php echo $data['user']['level']; ?> ">
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary" name="edituser">Sửa thành viên</button>
                </div>
              </form>
            </div>
         
        
      </div>
    </section>
    <!-- /.content -->
  </div>