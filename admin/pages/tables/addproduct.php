<?php
session_start();
include ('../../../conn.php');
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminQS Shop | Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="../../bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/AdminLTE.min.css">
  <link rel="stylesheet" href="../../dist/css/style.css">

  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="../../dist/css/skins/_all-skins.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="../../plugins/iCheck/flat/blue.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="../../plugins/morris/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="../../plugins/jvectormap/jquery-jvectormap-1.2.2.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="../../plugins/datepicker/datepicker3.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="../../plugins/daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="../../plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
  <?php include ('../headerAdmin.php') ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        ADD CATEGORY
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Tables</a></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
     <form role="form" method="POST" enctype="multipart/form-data">
        <div class="box-body">
          <div class="form-group">
            <label for="exampleInputName">Tên</label>
            <input type="text" class="form-control" id="exampleInputName" name="name" placeholder="Tên sản phẩm">
          </div>
          <div class="form-group">
            <label for="exampleInputPrice">Giá</label>
            <input type="text" class="form-control" id="exampleInputPrice" name="price" placeholder="Giá sản phẩm">
          </div>
          <div class="form-group">
            <label for="exampleInputHDH">Hệ Điều Hành</label>
            <input type="text" class="form-control" id="exampleInputHDH" name="hdh" placeholder="Hệ điều hành">
          </div>
          <div class="form-group">
            <label for="exampleInputCPU">CPU</label>
            <input type="text" class="form-control" id="exampleInputCPU" name="cpu" placeholder="Cấu hình CPU">
          </div>
          <div class="form-group">
            <label for="exampleInputRam">Ram</label>
            <input type="text" class="form-control" id="exampleInputRam" name="ram" placeholder="Ram">
          </div>
          <div class="form-group">
            <label for="exampleInputRom">Rom</label>
            <input type="text" class="form-control" id="exampleInputRom" name="rom" placeholder="Rom">
          </div>
          <div class="form-group">
            <label for="exampleInputCamera">Camera</label>
            <input type="text" class="form-control" id="exampleInputCamera" name="camera" placeholder="Camera trước">
          </div>
          <div class="form-group">
            <label for="exampleInputSelfice">Selfice</label>
            <input type="text" class="form-control" id="exampleInputSelfice" name="selfice" placeholder="Camera sau">
          </div>
          <div class="form-group">
            <label for="exampleInputPin">Pin</label>
            <input type="text" class="form-control" id="exampleInputPin" name="pin" placeholder="Dung lượng pin">
          </div>
          <div class="form-group">
            <label for="exampleInputSim">Sim</label>
              <select name="type_sim" >
                <option select="select">Chọn sim</option>
                <option value="2">2 Sim</option>
                <option value="1">1 Sim</option>
            </select>
          </div>
          <div class="form-group">
            <label for="exampleInputSP">Loại sản phẩm</label>
            <select name="type_sp" >
                <option select="select">Chọn sản phẩm</option>
                <option value="2">Bán chạy</option>
                <option value="1">Khuyến mãi</option>
                <option value="0">Sản phẩm mới</option>
            </select>
          </div>
          <div class="form-group">
            <label for="exampleInputImage">Hình ảnh sản phẩm</label>
            <input type="file" class="form-control" id="exampleInputImage" name="uploadFilee" placeholder="Hình sản phẩm">
          </div>
          <div class="form-group">
            <label for="exampleInputPromotion">Khuyến mãi</label>
            <input type="text" class="form-control" id="exampleInputPromotion" name="promotion" placeholder="Khuyến mãi">
          </div>
          <div class="form-group">
            <label for="exampleInputScreen">Màn hình</label>
            <input type="text" class="form-control" id="exampleInputScreen" placeholder="Màn hình" name="screen">
          </div>
          <div class="form-group">
            <label for="exampleInputDes">Mô tả</label>
            <textarea name="description" placeholder="Mô tả sản phẩm"></textarea>
          </div>
          <div class="form-group">
            <label for="exampleInputColor">Màu</label>
            <input type="text" class="form-control" id="exampleInputColor" name="mau" placeholder="Màu">
          </div>
        </div>
        <!-- /.box-body -->

        <div class="box-footer">
          <button type="submit" class="btn btn-primary" name="submit">ADD</button>
        </div>
      </form>
      <?php 
        if(!isset($_POST['submit'])){

        }
        else {
            $name = $_POST['name'];
            $price = $_POST['price'];
            $hdh = $_POST['hdh'];            
            $cpu = $_POST['cpu'];
            $ram = $_POST['ram'];
            $rom = $_POST['rom'];
            $camera = $_POST['camera'];
            $selfice = $_POST['selfice'];
            $pin = $_POST['pin'];
            $type_sim = $_POST['type_sim'];
            $type_sp = $_POST['type_sp'];
            $promotion = $_POST['promotion'];
            $screen = $_POST['screen'];
            $description = $_POST['description'];
            $mau = $_POST['mau'];
            

            if($_FILES['uploadFilee']['name'] != NULL){ // Đã chọn file
              //Kiểm tra định dạng tệp tin
                if($_FILES['uploadFilee']['type'] == "image/jpeg" || $_FILES['uploadFilee']['type'] == "image/png" || $_FILES['uploadFilee']['type'] == "image/gif"){
                  //Tiếp tục kiểm tra dung lượng
                      $maxFileSize = 10 * 1000 * 1000; //MB
                      if($_FILES['uploadFilee']['size'] > ($maxFileSize * 1000 * 1000)){
                          echo 'Tập tin không được vượt quá: '.$maxFileSize.' MB';
                      }   else {
                          //Hợp lệ tiếp tục xử lý Upload
                          $path = '../../../images/'; //Lưu trữ tập tin vào thư mục: images
                          $tmp_name = $_FILES['uploadFilee']['tmp_name'];
                          $hinh = $_FILES['uploadFilee']['name'];
                          $type = $_FILES['uploadFilee']['type'];
                          $size = $_FILES['uploadFilee']['size'];
                          //Upload file
                          move_uploaded_file($tmp_name,$path.$hinh);

                      }
                  }
                  else
                  {
                      echo 'Tập tin phải là hình ảnh';
                  }
            } else
            {
              echo 'Vui lòng chọn tập tin';
            }
            $addmember = mysql_query("INSERT INTO `product` (`id`, `name`, `price`, `hdh`, `cpu`, `ram`, `rom`, `camera`, `selfile`, `pin`, `sim`, `type`, `images`, `promotion`, `screen`, `describe`, `color`) VALUES (NULL, '$name', '$price', '$hdh', '$cpu', '$ram', '$rom', '$camera', '$selfice', '$pin', '$type_sim', '$type_sp', '$hinh', '$promotion', '$screen', '$description', 'mau')");
            var_dump($addmember);?>
    <META http-equiv="refresh" content="0;URL=http://localhost/nam4/admin/pages/tables/data.php">

      <?php
        }
      ?>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Create the tabs -->
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
      <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
      <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
      <!-- Home tab content -->
      <div class="tab-pane" id="control-sidebar-home-tab">
        <h3 class="control-sidebar-heading">Recent Activity</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-birthday-cake bg-red"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>

                <p>Will be 23 on April 24th</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-user bg-yellow"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Frodo Updated His Profile</h4>

                <p>New phone +1(800)555-1234</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-envelope-o bg-light-blue"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Nora Joined Mailing List</h4>

                <p>nora@example.com</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-file-code-o bg-green"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Cron Job 254 Executed</h4>

                <p>Execution time 5 seconds</p>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

        <h3 class="control-sidebar-heading">Tasks Progress</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Custom Template Design
                <span class="label label-danger pull-right">70%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Update Resume
                <span class="label label-success pull-right">95%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-success" style="width: 95%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Laravel Integration
                <span class="label label-warning pull-right">50%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-warning" style="width: 50%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Back End Framework
                <span class="label label-primary pull-right">68%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-primary" style="width: 68%"></div>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

      </div>
      <!-- /.tab-pane -->
      <!-- Stats tab content -->
      <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
      <!-- /.tab-pane -->
      <!-- Settings tab content -->
      <div class="tab-pane" id="control-sidebar-settings-tab">
        <form method="post">
          <h3 class="control-sidebar-heading">General Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Report panel usage
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Some information about this general settings option
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Allow mail redirect
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Other sets of options are available
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Expose author name in posts
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Allow the user to show his name in blog posts
            </p>
          </div>
          <!-- /.form-group -->

          <h3 class="control-sidebar-heading">Chat Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Show me as online
              <input type="checkbox" class="pull-right" checked>
            </label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Turn off notifications
              <input type="checkbox" class="pull-right">
            </label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Delete chat history
              <a href="javascript:void(0)" class="text-red pull-right"><i class="fa fa-trash-o"></i></a>
            </label>
          </div>
          <!-- /.form-group -->
        </form>
      </div>
      <!-- /.tab-pane -->
    </div>
  </aside>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 2.2.3 -->
<script src="../../plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="../../bootstrap/js/bootstrap.min.js"></script>
<!-- DataTables -->
<script src="../../plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../../plugins/datatables/dataTables.bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="../../plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="../../plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
<!-- page script -->
<script>
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false
    });
  });
</script>
</body>
</html>
