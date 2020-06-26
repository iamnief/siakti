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
            ?>
                <div class="mata-kuliah card">
                  <div class="row">
                    <div class="matkul col-8">
                      <p class="nama-matkul"><?php echo $value->namamk ?></p>
                      <p><?php echo $value->jam_mulai . " - " . $value->jam_selesai ?></p>
                      <p><?php echo $value->namaklas ?></p>
                      <p><?php echo $value->ruangan_namaruang ?></p>
                    </div>
                    <?php
                    // echo "<div class='status col-4'>";
                    $time = $tgl . " " . $value->jam_mulai;
                    if ($value->kd_absendsn == null) {
                      $kode = '';
                      $tipe_kelas = '';
                      if (isset($value->kodejdwl)) {
                        $tipe_kelas = 'normal';
                        $kode = $value->kodejdwl;
                      } else if (isset($value->kd_gantikls)) {
                        $tipe_kelas = 'pengganti';
                        $kode = $value->kd_gantikls;
                      }
                    ?>
                      <div class="status col-4">
                        <?php
                        if ($now <= $time) {
                        ?>
                          <!-- Membatalkan Kelas -->
                          <button class="btn btn-secondary btn-sm" role="button" disabled="">Mulai Kelas</button>
                        <?php
                        } else {
                        ?>
                          <!-- Memulai Kelas -->
                          <form action="<?php echo site_url('absensi_dosen/mulai_kelas'); ?>" method="post">
                            <input type="text" name="kodejdwl" value="<?php echo $kode; ?>" style="display: none;">
                            <input type="text" name="tipe_kelas" value="<?php echo $tipe_kelas; ?>" style="display: none;">
                            <input type="text" name="kodeklas" value="<?php echo $value->kodeklas; ?>" style="display: none;">
                            <button type="submit" class="btn btn-yellow btn-sm">Mulai Kelas</button>
                          </form>
                        <?php
                        }
                        ?>
                        <form action="<?php echo site_url('absensi_dosen/batal_kelas'); ?>" method="post">
                          <input type="text" name="tgl" value="<?php echo $tgl; ?>" style="display: none;">
                          <input type="text" name="kodejdwl" value="<?php echo $kode; ?>" style="display: none;">
                          <input type="text" name="jml_jam" value="<?php echo $value->jml_jam; ?>" style="display: none;">
                          <input type="text" name="tipe_kelas" value="<?php echo $tipe_kelas; ?>" style="display: none;">
                          <button type="submit" class="btn btn-danger btn-sm">Batal Kelas</button>
                        </form>
                      </div>
                    <?php
                    } else {
                    ?>
                      <!-- Melihat Detail Kelas -->
                      <form class="status col-4" action="<?php echo site_url('absensi_dosen/detail_kelas'); ?>" method="post">
                        <?php
                        if ($value->abs_jam_keluar == null && $value->abs_jam_msk != null) {
                        ?>
                          <p>Kelas sedang berlangsung</p>
                          <input type="text" name="status" value="berlangsung" style="display: none;">
                        <?php } else { ?>
                          <p>Kelas sudah berakhir</p>
                          <input type="text" name="status" value="berakhir" style="display: none;">
                        <?php } ?>
                        <input type="text" name="namamk" value="<?php echo $value->namamk; ?>" style="display: none;">
                        <input type="text" name="waktu" value="<?php echo $value->jam_mulai . ' - ' . $value->jam_selesai; ?>" style="display: none;">
                        <input type="text" name="namaklas" value="<?php echo $value->namaklas; ?>" style="display: none;">
                        <input type="text" name="kd_absendsn" value="<?php echo $value->kd_absendsn; ?>" style="display: none;">
                        <button type="submit" class="btn btn-yellow btn-sm">Detail Kehadiran</button>
                      </form>
                    <?php
                    }
                    ?>
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
        <!-- /.card -->
      </div>
      <!-- /.col-6 -->
      <div class="col-lg-6">

        <div class="card">
          <div class="kelas-hari-ini">
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
                      <p><?php echo $value->jml_jam; ?> jam kuliah</p>
                      <p><?php echo $value->namaklas; ?></p>
                    </div>
                    <form class="status col-4" action="<?php echo site_url(); ?>absensi_dosen/kelas_pengganti" method="post">
                      <input type="text" name="kd_gantikls" value="<?php echo $value->kd_gantikls; ?>" style="display: none;">
                      <input type="text" name="tgl_batal" value="<?php echo $value->tgl_batal; ?>" style="display: none;">
                      <input type="text" name="jml_jam" value="<?php echo $value->jml_jam; ?>" style="display: none;">
                      <input type="text" name="namamk" value="<?php echo $value->namamk; ?>" style="display: none;">
                      <input type="text" name="namaklas" value="<?php echo $value->namaklas; ?>" style="display: none;">
                      <button type="submit" class="btn btn-yellow btn-sm">Buat Pengganti</button>
                    </form>
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