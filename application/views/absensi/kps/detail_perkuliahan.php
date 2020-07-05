<!-- Content Header (Page header) -->
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark">Verifikasi Perkuliahan Detail</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="index.html">Absensi</a></li>
          <li class="breadcrumb-item"><a href="verif_perkuliahan.html">Verifikasi Perkuliahan</a></li>
          <li class="breadcrumb-item active">Detail</li>
        </ol>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<div class="content">
  <div class="container-fluid">
    <div class="card">
      <div class="card-header">
        <div class="row">
          <div class="col-2">
            <p><b>Mata Kuliah</b></p>
            <p><b>Dosen Pengajar</b></p>
            <p><b>Kelas</b></p>
          </div>
          <div class="col-4">
            <p>:Data Mining</p>
            <p>:Euis</p>
            <p>:TI - 6A</p>
          </div>
          <div class="col-2">
            <p><b>Tanggal</b></p>
            <p><b>SAP</b></p>
            <p><b>Materi</b></p>
          </div>
          <div class="col-4">
            <p>:14 Januari 2020</p>
            <p>:Pengenalan</p>
            <p>:Pengenalan</p>
          </div>
        </div>
      </div>
      <!-- /.card-header -->
      <div class="table-responsive p-0">
        <!-- form start -->
        <form class="form-horizontal">
          <div class="card-body text-center">
            <div>
              <p>Masukkan PIN untuk Verifikasi Perkuliahan Ini</p>
            </div>
            <div class="form-group">
              <div>
                <input type="password" class="form-control" name="pin" id="pin" placeholder="PIN">
                <input type="text" class="form-control" name="kd_absendsn" id="kd_absendsn" hidden>
              </div>
            </div>
            <button type="submit" class="btn btn-yellow">Selesai</button>
          </div>
          <!-- /.card-body -->
        </form>
      </div>
      <!-- /.table-responsive -->
    </div>
    <!-- /.card -->
  </div>
  <!-- /.container-fluid -->
</div>
<!-- /.content -->