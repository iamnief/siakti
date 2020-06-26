<!-- Content Header (Page header) -->
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark">Akhiri Kelas</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Absensi</a></li>
          <li class="breadcrumb-item"><a href="jadwal.html">Jadwal Perkuliahan</a></li>
          <li class="breadcrumb-item"><a href="detail_berlangsung.html">Detail Kehadiran</a></li>
          <li class="breadcrumb-item active">Akhiri Kelas</li>
        </ol>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<div class="content">
  <div class="container-fluid">
    <div class="card card-info" id="form_verif">
      <!-- form start -->
      <form class="form-horizontal" method="">
        <div class="card-body">
          <div class="form-group">
            <input style="display: none;" name="kd_absendsn" id="kode" value="<?php echo $kd_absendsn ?>">
            <p>Silakan lakukan validasi untuk mengakhiri kelas</p>
          </div>
          <div class="form-group">
            <label for="materi" class="col-form-label">Materi</label>
            <input type="text" class="form-control" id="materi" name="materi" placeholder="Materi" required>
          </div>
          <div class="form-group">
            <label for="nim_mhs" class="col-form-label">NIM Mahasiswa</label>
            <input type="text" class="form-control" id="nim_mhs" name="nim_mhs" placeholder="NIM" required>
          </div>
          <div class="form-group">
            <label for="pin_mhs" class="col-form-label">PIN Mahasiswa</label>
            <input type="password" class="form-control" id="pin_mhs" name="pin_mhs" placeholder="PIN" required>
          </div>
          <div id="message"></div>
          <div class="form-group">
            <!-- <button type="submit" class="btn btn-yellow" onclick="onClickSelesai">Selesai</button> -->
            <a class="btn btn-yellow" onclick="onClickSelesai()">Selesai</a>
          </div>
        </div>
        <!-- /.card-body -->
        <!-- /.card-footer -->
      </form>
    </div>
    <!-- /.card -->
  </div>
  <!-- /.container-fluid -->
</div>
<!-- /.content -->