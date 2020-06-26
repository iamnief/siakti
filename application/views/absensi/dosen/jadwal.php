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
      </div>
      <!-- /.col-md-6 -->
    </div>
    <!-- /.row -->
  </div>
  <!-- /.container-fluid -->
</div>
<!-- /.content -->