<?php
date_default_timezone_set("Asia/Jakarta");
$now = date('H:i:s');
$hari = date('N');
$tgl = date('d-m-Y');
$tanggal = date('l, d F Y');
$dosen = $this->session->get_userdata();
$nip_dosen = $dosen['nip'];
$url = 'jadwalkuliah/dosen/' . $nip_dosen . '/' . $hari . '/' . $tgl;
// echo $url;
$response  = $this->customguzzle->getBasicToken($url, 'application/json');
?>

<!-- Content Header (Page header) -->
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-6">
        <h1 class="m-0 text-dark">Dashboard</h1>
        <p><?php echo $tanggal ?></p>
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
            if (isset($response['error']) && !$response['error']) {
              $data_jadwal = json_decode($response['data']);
              foreach ($data_jadwal as $key => $value) {
                $value = json_decode(json_encode($value));
                $data_absen = array(
                  'kd_absendsn' => $nip_dosen . '1' . $value->namaklas . $value->kodejdwl,
                  'jam_msk' => $now,
                  'staff_nip' => $nip_dosen,
                  'pertemuanke' => '1',
                  'jadwal_kul_kodejdwl' => $value->kodejdwl
                );
                echo '<div class="mata-kuliah card">';
                echo '<div class="row">';
                echo '<div class="matkul col-8">';
                echo '<p class="nama-matkul">' . $value->namamk . '</p>';
                echo '<p>' . $value->jam_mulai . " - " . $value->jam_selesai . '</p>';
                echo '<p>' . $value->namaklas . '</p>';
                echo '<p>' . $value->ruangan_namaruang . '</p>';
                echo '</div>';
                echo '<div class="status col-4">';
                echo '<p>Kelas sudah berakhir</p>';
                // echo '<a href=' . site_url('absensi_dosen/detail_kelas') . ' class="btn btn-yellow btn-sm" role="button">Mulai Kelas</a>';
                echo '<a href=' . site_url('absensi_dosen/detail_kelas') . ' class="btn btn-yellow btn-sm" role="button">Detail Kehadiran</a>';
                echo '</div>';
                echo '</div>';
                echo '</div>';
              }
            }
            ?>
            <div class="mata-kuliah card">
              <div class="row">
                <div class="matkul col-8">
                  <p class="nama-matkul">Data Mining</p>
                  <p>07.30 - 08.30</p>
                  <p>TI - 6A</p>
                </div>
                <div class="status col-4">
                  <p>Kelas sedang berlangsung</p>
                  <a href=<?php echo site_url("absensi_dosen/detail_kelas"); ?> class="btn btn-yellow btn-sm" role="button">Lihat Kelas</a>
                </div>
              </div>
            </div>
            <div class="mata-kuliah card">
              <div class="row">
                <div class="matkul col-8">
                  <p class="nama-matkul">Data Mining</p>
                  <p>07.30 - 08.30</p>
                  <p>TI - 6A</p>
                </div>
                <div class="status col-4">
                  <a href=<?php echo site_url("absensi_dosen/detail_kelas"); ?> class="btn btn-yellow btn-sm" role="button">Mulai Kelas</a>
                  <a href=<?php echo site_url("absensi_dosen/detail_kelas"); ?> class="btn btn-danger btn-sm" role="button">Batalkan Kelas</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /.card -->
      </div>
      <!-- /.col-6 -->
      <div class="col-lg-6">

        <div class="card">
          <div class="kelas-tertunda">
            <h3>Kelas Dibatalkan</h3>
            <div class="mata-kuliah card">
              <div class="row">
                <div class="matkul col-8">
                  <p class="nama-matkul">Data Mining</p>
                  <p>28 Februari 2020</p>
                  <p>07.30 - 08.30</p>
                  <p>TI - 6A</p>
                </div>
                <div class="status col-4">
                  <a href=<?php echo site_url("absensi_dosen/kelas_pengganti"); ?> class="btn btn-yellow btn-sm" role="button">Buat Kelas
                    Pengganti</a>
                </div>
              </div>
            </div>
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