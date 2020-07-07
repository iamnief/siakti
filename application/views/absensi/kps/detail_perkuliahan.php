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
            <p>:<?php if (isset($perkuliahan['namamk'])) echo $perkuliahan['namamk'] ?></p>
            <p>:<?php if (isset($perkuliahan['dosen'])) echo $perkuliahan['dosen'] ?></p>
            <p>:<?php if (isset($perkuliahan['namaklas'])) echo $perkuliahan['namaklas'] ?></p>
          </div>
          <div class="col-2">
            <p><b>Tanggal</b></p>
            <p><b>SAP</b></p>
            <p><b>Materi</b></p>
          </div>
          <div class="col-4">
            <p>:<?php if (isset($perkuliahan['tgl'])) echo $perkuliahan['tgl'] ?></p>
            <p>:<?php if (isset($perkuliahan['materi'])) echo $perkuliahan['materi'] ?></p>
            <p>:<?php if (isset($perkuliahan['materi'])) echo $perkuliahan['materi'] ?></p>
          </div>
        </div>
      </div>
      <!-- /.card-header -->
      <div class="table-responsive p-0">
        <!-- form start -->
        <form class="form-horizontal" method="post" action="<?php echo site_url('absensi_kps/verif_perkuliahan'); ?>">
          <div class="card-body text-center">
            <div>
              <p>Catatan</p>
            </div>
            <div class="form-group">
              <!-- <label for="note_kps">Catatan</label> -->
              <textarea name="note_kps" id="note_kps" cols="40" rows="5" maxlength="200" placeholder="Max 200 karakter"></textarea>
            </div>
            <div>
              <p>Masukkan PIN untuk Verifikasi</p>
            </div>
            <div class="form-group">
              <input type="password" class="form-control" name="pin" id="pin" placeholder="PIN">
              <input type="text" class="form-control" name="kd_absendsn" hidden id="kd_absendsn" value="<?php if (isset($perkuliahan['kd_absendsn'])) echo $perkuliahan['kd_absendsn'] ?>">
            </div>
            <p><span id="message"></span></p>
            <a id="verif_perkuliahan" class="btn btn-yellow">Verifikasi</a>
            <button id="submit_perkuliahan" type="submit" class="btn btn-yellow" hidden></button>
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