<?php
$now = date('d-m-Y H:i:s');
?>

<!-- Content Header (Page header) -->
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-6">
        <h1 class="m-0 text-dark">Dashboard</h1>
        <p><?php echo date('l, d F Y'); ?></p>
      </div><!-- /.col -->
      <div class="col-6">
        <ol class="breadcrumb float-right">
          <li class="breadcrumb-item"><a href="#">Absensi</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
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
      <div class="col-lg-6">

        <div class="card">
          <div class="kelas-hari-ini">
            <h3>Kelas Hari Ini</h3>
            <?php
            if (isset($resp_jadwal['error']) && !$resp_jadwal['error']) {
              $data_jadwal = json_decode($resp_jadwal['data']);
              foreach ($data_jadwal as $key => $value) {
                $value = json_decode(json_encode($value));
                echo '<div class="mata-kuliah card">';
                echo '<div class="row">';
                echo '<div class="matkul col-8">';
                echo '<p class="nama-matkul">' . $value->namamk . '</p>';
                echo '<p>' . $value->jam_mulai . " - " . $value->jam_selesai . '</p>';
                echo '<p>' . $value->namaklas . '</p>';
                echo '<p>' . $value->ruangan_namaruang . '</p>';
                echo '</div>';
                echo '<div class="status col-4">';
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
        <!-- /.card -->
      </div>
      <!-- /.col-6 -->
      <div class="col-lg-6">

        <div class="card">
          <div class="kelas-tertunda">
            <h3>Kelas Dibatalkan</h3>
            <?php
            if (isset($resp_kelas_batal['error']) && !$resp_kelas_batal['error']) {
              $data_kelas_batal = json_decode($resp_kelas_batal['data']);
              foreach ($data_kelas_batal as $key => $value) {
                $value = json_decode(json_encode($value));
            ?>
                <div class="mata-kuliah card">
                  <div class="row">
                    <div class="matkul col-8">
                      <p class="nama-matkul"><?php echo $value->namamk; ?></p>
                      <p><?php echo date('d F Y', strtotime($value->tgl_batal)); ?></p>
                      <p><?php echo $value->jml_jam; ?></p>
                      <p><?php echo $value->namaklas; ?></p>
                    </div>
                    <div class="status col-4">
                      <a href=<?php echo site_url("absensi_dosen/kelas_pengganti"); ?> class="btn btn-yellow btn-sm" role="button">Buat Kelas
                        Pengganti</a>
                    </div>
                  </div>
                </div>
            <?php
              }
            } else {
              echo "<h5>Tidak ada Kelas</h5>";
            }
            ?>
          </div>
        </div>
      </div>
      <!-- /.col-6 -->
    </div>
    <!-- /.row -->
  </div>
  <!-- /.container-fluid -->
</div>
<!-- /.content -->