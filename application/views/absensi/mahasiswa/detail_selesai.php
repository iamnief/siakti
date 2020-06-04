<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Absensi Mahasiswa Jurusan TIK</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <link rel="stylesheet" href="styles/main.css">

</head>

<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
      </ul>


      <!-- Right navbar links -->
      <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-user fa-fw"></i> Ilham Hanif - 4617010000
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown"
            style="left: inherit; right: 0px;">
            <a class="dropdown-item" href="#">
              <i class="fas fa-cogs"></i> Settings
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">
              <i class="fas fa-sign-out-alt"></i> Logout
            </a>
          </div>

        </li>
      </ul>
    </nav>

    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="index3.html" class="brand-link">
        <img src="dist/img/logopnj.png" alt="Logo" class="brand-image">
        <span class="brand-text font-weight-light">Sistem Informasi TIK</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
          </div>
          <div class="info">
            <a href="#" class="d-block">Ilham Hanif</a>
          </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
            <li class="nav-item has-treeview menu-open">
              <a href="#" class="nav-link active">
                <i class="nav-icon fas fa-copy"></i>
                <p>
                  Absensi
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="index.html" class="nav-link">
                    <i class="nav-icon fas fa-tachometer-alt"></i>
                    <p>Dashboard</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link active">
                    <i class="nav-icon far fa-calendar-alt"></i>
                    <p>Jadwal Perkuliahan</p>
                  </a>
                </li>
              </ul>
            </li>
          </ul>
        </nav>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0 text-dark">Detail Kehadiran</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Absensi</a></li>
                <li class="breadcrumb-item"><a href="jadwal.html">Jadwal Perkuliahan</a></li>
                <li class="breadcrumb-item active">Detail Kehadiran</li>
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->

      <!-- Main content -->
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <table class="table table-borderless table-sm">
                    <tbody>
                      <tr>
                        <td scope="row" style="width: 15%;">Mata Kuliah</td>
                        <td>Data Mining</td>
                      </tr>
                      <tr>
                        <td scope="row">Waktu</td>
                        <td>07.30 - 08.30</td>
                      </tr>
                      <tr>
                        <td scope="row">Kelas</td>
                        <td>TI - 6A</td>
                      </tr>
                      <tr>
                        <td scope="row">Status/td>
                        <td>Sudah berakhir</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
                <!-- /.card-header -->
                <div class="card-body table-responsive p-0">
                  <table class="table text-nowrap">
                    <thead>
                      <tr>
                        <th class="w-50">Nama</th>
                        <th class="w-25">NIM</th>
                        <th class="w-25">Keterangan</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>Rizka Aulia</td>
                        <td>4617010039</td>
                        <td>Hadir</td>
                      </tr>
                      <tr>
                        <td>Rizka Aulia</td>
                        <td>4617010039</td>
                        <td>Tidak Hadir</td>
                      </tr>
                      <tr>
                        <td>Rizka Aulia</td>
                        <td>4617010039</td>
                        <td>Terlambat</td>
                      </tr>
                      <tr>
                        <td>Rizka Aulia</td>
                        <td>4617010039</td>
                        <td>Hadir</td>
                      </tr>
                      <tr>
                        <td>Rizka Aulia</td>
                        <td>4617010039</td>
                        <td>Hadir</td>
                      </tr>
                      <tr>
                        <td>Rizka Aulia</td>
                        <td>4617010039</td>
                        <td>Hadir</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>
          </div>
          <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
      </div>
      <!-- /.content -->

    </div>

    <!-- /.content-wrapper -->
    <footer class="main-footer">
      <strong>Copyright &copy; 2020 <a href="http://adminlte.io">Jurusan TIK</a>.</strong>
      All rights reserved.
      <div class="float-right d-none d-sm-inline-block">
        <!-- <b>Version</b> 3.0.4 -->
      </div>
    </footer>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
  </div>
  <!-- ./wrapper -->

  <!-- jQuery -->
  <script src="plugins/jquery/jquery.min.js"></script>
  <!-- jQuery UI 1.11.4 -->
  <script src="plugins/jquery-ui/jquery-ui.min.js"></script>
  <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
  <script>
    $.widget.bridge('uibutton', $.ui.button)

  </script>
  <!-- Bootstrap 4 -->
  <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- ChartJS -->
  <script src="plugins/chart.js/Chart.min.js"></script>
  <!-- Sparkline -->
  <script src="plugins/sparklines/sparkline.js"></script>
  <!-- JQVMap -->
  <script src="plugins/jqvmap/jquery.vmap.min.js"></script>
  <script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
  <!-- jQuery Knob Chart -->
  <script src="plugins/jquery-knob/jquery.knob.min.js"></script>
  <!-- daterangepicker -->
  <script src="plugins/moment/moment.min.js"></script>
  <script src="plugins/daterangepicker/daterangepicker.js"></script>
  <!-- Tempusdominus Bootstrap 4 -->
  <script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
  <!-- Summernote -->
  <script src="plugins/summernote/summernote-bs4.min.js"></script>
  <!-- overlayScrollbars -->
  <script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
  <!-- AdminLTE App -->
  <script src="dist/js/adminlte.js"></script>
  <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
  <script src="dist/js/pages/dashboard.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="dist/js/demo.js"></script>

  <script type="text/javascript">
    // The Calender
    $('#calendar').datetimepicker({
      format: 'L',
      inline: true
    })

  </script>

</body>

</html>
