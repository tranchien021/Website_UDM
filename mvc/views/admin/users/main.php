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
              <li class="breadcrumb-item active">Thành viên</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <button style="margin:15px;" type="button" class="btn btn-info float-right"><i class="fas fa-plus"></i><a style=" color:#fff" href="<?php echo URLSUB."users/add"?>">Thêm Thành Viên</a></button>
        <table class="table table-head-fixed text-nowrap"  id="myTable">
                  <thead>
                    <tr>
                      <th>STT</th>
                      <th>ID</th>
                      <th>User name</th>
                      <th>Password</th>
                      <th>Email</th>
                      <th>Level</th>
                      <th>Function</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php 
                    $stt=0;
                    foreach ($data['user'] as $key => $value) {
                     ?>
                    <tr>
                      <td><?php echo $stt; ?></td>
                      <td><?php echo $value['id']; ?></td>
                      <td><?php echo $value['useName']; ?></td>
                      <td><?php echo $value['passWord']; ?></td>
                      <td><?php echo $value['email']; ?></td>
                      <td><?php echo $value['level']; ?></td>  
                      <td>
                        <a href="<?php echo URLSUB."users/delete/${value['id']}"?>"class="btn btn-danger"><i class="fas fa-trash"></i></a>
                       <a href="<?php echo URLSUB."users/edit/${value['id']}"?>" class="btn btn-danger" style="background: aqua;border:aqua;"><i class="fas fa-edit"></i></a>
                      </td>
                    </tr>
                  <?php 
                    $stt++;
                      }
                   ?>
                  </tbody>
                </table>
      </div><!-- /.container-fluid -->
    </section>
 
    <!-- /.content -->
  </div>

