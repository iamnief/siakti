<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Daftar PKL</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/AdminLTE/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/AdminLTE/dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body>


<section class="content">
    <div class="container-fluid">
      <div class="row">
        <!-- left column -->
      <div class="col-md-6">
       <!-- general form elements -->
      <div class="card card-primary">
      <div class="card-header">
      <h3 class="card-title">Daftar PKL</h3>
      </div>
            <!-- /.card-header -->
            <!-- form start -->
      <form role="form">
      <div class="card-body">
      <div class="form-group">
      <label for="nama"></label>
      <input type="nama" class="form-control" id="nama" placeholder="Nama Lengkap">
      </div>

      <div class="form-group">
      <label for="nim"></label>
      <input type="nim" class="form-control" id="nim" placeholder="Nomor Induk Mahasiswa">
      </div>

      <div class="form-group">
      <label for="notlp"></label>
      <input type="notlp" class="form-control" id="notlp" placeholder="Nomor Telepon">
      </div>

      <div class="form-group">
      <label for="Email"></label>
      <input type="email" class="form-control" id="email" placeholder="Email">
      </div>

      <div class="form-group">
      <label for="perusahaan"></label>
      <div class="input-group">
      <div class="custom-file">
      <input type="perusahaan" class="form-control" id="perusahaan" placeholder="Nama Perusahaan">
      <div class="input-group-append">
      <span class="input-group-text" id="">Tambah</span>
      </div>
      </div>
      </div>
      </div>
      </div>
              <!-- /.card-body -->

    <div class="card-footer">
        <button type="daftar" class="btn btn-primary">Daftar</button>
      </div>
    </form>
    </div>
    <!-- /.card -->


</body>

 