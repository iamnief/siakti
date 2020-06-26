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
            <div class="row">
              <div class="col-2">
                <p><b>Mata Kuliah</b></p>
                <p><b>Waktu</b></p>
                <p><b>Kelas</b></p>
                <p><b>Status</b></p>
              </div>
              <div class="col-8">
                <p><?php echo $namamk ?></p>
                <p><?php echo $waktu ?></p>
                <p><?php echo $namaklas ?></p>
                <p><?php echo $status ?></p>
              </div>
              <div class="col-2">
                <p></p>
                <!-- <h3>00 : 16 : 35</h3> -->
                <form action="<?php echo site_url('absensi_dosen/akhiri_kelas'); ?>" method="post">
                  <input style="display: none;" name="kd_absendsn" id="kode" value="<?php echo $kd_absendsn ?>">
                  <?php if ($status == 'berlangsung') { ?>
                    <button type="submit" class="btn btn-yellow btn-sm">Akhiri Kelas</button>
                  <?php } ?>
                </form>
              </div>
            </div>
          </div>
          <!-- /.card-header -->
          <div class="card-body table-responsive p-0">
            <table class="table text-nowrap" id="absen_mahasiswa">
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