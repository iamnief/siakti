<?php
$now = date('d-m-Y H:i:s');
// echo json_encode($resp_jadwal);
?>

<!-- Content Header (Page header) -->
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark">Jadwal Perkuliahan</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Absensi</a></li>
          <li class="breadcrumb-item active">Jadwal Perkuliahan</li>
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
      <div class="col-lg-4">

        <!-- Calendar -->
        <div class="card bg-gradient-success">
          <div class="card-header border-0">
            <h3 class="card-title">
              <i class="far fa-calendar-alt"></i>
              Calendar
            </h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body pt-0">
            <!--The calendar -->
            <div id="calendar" style="width: 100%"></div>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->

      </div>
      <!-- /.col-md-8 -->
      <div class="col-lg-8">
        <div class="card">
          <div class="kelas-hari-ini">
            <h3>Jadwal <?php echo $tgl ?></h3>
            <?php
            if (isset($resp_jadwal['error']) && !$resp_jadwal['error']) {
              $data_jadwal = json_decode($resp_jadwal['data']);
              foreach ($data_jadwal as $key => $value) {
                $value = json_decode(json_encode($value));
                echo '<div class="mata-kuliah card">';
                echo '<div class="row">';
                echo '<div class="matkul col-9">';
                echo '<p class="nama-matkul">' . $value->namamk . '</p>';
                echo '<p>' . $value->jam_mulai . " - " . $value->jam_selesai . '</p>';
                echo '<p>' . $value->namaklas . '</p>';
                echo '<p>' . $value->ruangan_namaruang . '</p>';
                echo '</div>';
                echo '<div class="status col-3">';
                $time = $tgl . " " . $value->jam_mulai;
                if ($value->kd_absendsn == null) {
                  if ($now <= $time) {
                    echo '<a class="btn btn-secondary btn-sm" role="button" disabled="">Mulai Kelas</a>';
                    echo '<a href=' . site_url('absensi_dosen/batal_kelas')
                      . ' class="btn btn-danger btn-sm" role="button">Batal Kelas</a>';
                  } else {
                    $data_absen = array(
                      'jam_msk' => $now,
                      'staff_nip' => $user['nip']
                    );
                    if (isset($value->kodejdwl)) $data_absen['jadwal_kul_kodejdwl'] = $value->kodejdwl;
                    else if (isset($value->kd_gantikls)) $data_absen['kls_pengganti_kd_gantikls'] = $value->kd_gantikls;

                    echo '<a href=' . site_url('absensi_dosen/mulai_kelas')
                      . ' class="btn btn-yellow btn-sm" role="button">Mulai Kelas</a>';
                  }
                } else if ($value->abs_jam_keluar == null && $value->abs_jam_msk != null) {
                  echo '<p>Kelas sedang berlangsung</p>';
                  echo '<a href=' . site_url('absensi_dosen/detail_kelas')
                    . ' class="btn btn-yellow btn-sm" role="button">Detail Kehadiran</a>';
                } else {
                  echo '<p>Kelas sudah berakhir</p>';
                  echo '<a href=' . site_url('absensi_dosen/detail_kelas')
                    . ' class="btn btn-yellow btn-sm" role="button">Detail Kehadiran</a>';
                }
                echo '</div>';
                echo '</div>';
                echo '</div>';
              }
            } else {
              echo "<h5>Tidak ada Kelas</h5>";
            }
            ?>
          </div>
        </div>
      </div>
      <!-- /.col-md-6 -->
    </div>
    <!-- /.row -->
  </div>
  <!-- /.container-fluid -->
</div>
<!-- /.content -->