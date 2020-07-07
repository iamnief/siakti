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
            <p><b>Tanggal Batal</b></p>
            <p><b>Mata Kuliah</b></p>
            <p><b>Dosen Pengajar</b></p>
            <p><b>Kelas</b></p>
          </div>
          <div class="col-4">
            <p>:<?php if(isset($perkuliahan['tgl_batal'])) echo $perkuliahan['tgl_batal'] ?></p>
            <p>:<?php if(isset($perkuliahan['namamk'])) echo $perkuliahan['namamk'] ?></p>
            <p>:<?php if(isset($perkuliahan['dosen'])) echo $perkuliahan['dosen'] ?></p>
            <p>:<?php if(isset($perkuliahan['namaklas'])) echo $perkuliahan['namaklas'] ?></p>
          </div>
          <div class="col-2">
            <p><b>Tanggal Ganti</b></p>
            <p><b>Ruangan</b></p>
            <p><b>Waktu</b></p>
            <p><b>Jumlah Jam</b></p>
          </div>
          <div class="col-4">
            <p>:<?php if(isset($perkuliahan['tgl_pengganti'])) echo $perkuliahan['tgl_pengganti'] ?></p>
            <p>:<?php if(isset($perkuliahan['ruangan_namaruang'])) echo $perkuliahan['ruangan_namaruang'] ?></p>
            <p>:<?php if(isset($perkuliahan['jam_mulai'])) echo $perkuliahan['jam_mulai'] . ' - ' . $perkuliahan['jam_selesai']; ?></p>
            <p>:<?php if(isset($perkuliahan['jml_jam'])) echo $perkuliahan['jml_jam'] ?></p>
          </div>
        </div>
      </div>
      <!-- /.card-header -->
      <div class="table-responsive p-0">
        <!-- form start -->
        <form class="form-horizontal" method="post" action="<?php echo site_url('absensi_kps/verif_kelas_pengganti'); ?>" >
          <div class="card-body text-center">
            <div>
              <p>Masukkan PIN untuk Verifikasi Perkuliahan Ini</p>
            </div>
            <div class="form-group">
              <div>
                <input type="password" class="form-control" name="pin" id="pin" placeholder="PIN">
                <input type="text" class="form-control" name="kd_gantikls" id="kd_gantikls" hidden value="<?php if(isset($perkuliahan['kd_gantikls'])) echo $perkuliahan['kd_gantikls']?>">
                <input type="text" class="form-control" name="jml_jam" id="jml_jam" hidden value="<?php if(isset($perkuliahan['jml_jam'])) echo $perkuliahan['jml_jam']?>">
              </div>
            </div>
            <p><span id="message"></span></p>
            <a id="verif_kelas_pengganti" class="btn btn-yellow">Verifikasi</a>
            <button id="submit_kelas_pengganti" type="submit" class="btn btn-yellow" hidden></button>
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