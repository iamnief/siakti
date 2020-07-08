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
    <div class="card card-primary card-outline">
      <div class="card-body">
        <ul class="nav nav-tabs" id="custom-content-below-tab" role="tablist">
          <li class="nav-item">
            <a class="nav-link active" id="custom-content-below-today-tab" data-toggle="pill" href="#custom-content-below-today" role="tab" aria-controls="custom-content-below-today" aria-selected="true">Kelas Hari Ini</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="custom-content-below-cancel-tab" data-toggle="pill" href="#custom-content-below-cancel" role="tab" aria-controls="custom-content-below-cancel" aria-selected="false">Kelas Dibatalkan</a>
          </li>
        </ul>
        <div class="tab-content" id="custom-content-below-tabContent">
          <!-- /today -->
          <div class="tab-pane fade show active" id="custom-content-below-today" role="tabpanel" aria-labelledby="custom-content-below-today-tab">
            <br/>
              <div class="kelas-hari-ini">
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
                            // echo "jdwl:".$kode;
                          } else if (isset($value->kd_gantikls)) {
                            $tipe_kelas = 'pengganti';
                            $kode = $value->kd_gantikls;
                            // echo "gnt:".$kode;
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
                                <input type="text" name="kodejdwl" value="<?php echo $kode; ?>" hidden>
                                <input type="text" name="tipe_kelas" value="<?php echo $tipe_kelas; ?>" hidden>
                                <input type="text" name="jml_jam" value="<?php echo $value->jml_jam; ?>" hidden>
                                <input type="text" name="kodeklas" value="<?php echo $value->kodeklas; ?>" hidden>
                                <button type="submit" class="btn btn-yellow btn-sm">Mulai Kelas</button>
                              </form>
                            <?php
                            }
                            ?>
                            <form action="<?php echo site_url('absensi_dosen/batal_kelas'); ?>" method="post">
                              <input type="text" name="tgl" value="<?php echo $tgl; ?>" hidden>
                              <input type="text" name="kodejdwl" value="<?php echo $kode; ?>" hidden>
                              <input type="text" name="jml_jam" value="<?php echo $value->jml_jam; ?>" hidden>
                              <input type="text" name="tipe_kelas" value="<?php echo $tipe_kelas; ?>" hidden>
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
                              <input type="text" name="status" value="berlangsung" hidden>
                            <?php } else { ?>
                              <p>Kelas sudah berakhir</p>
                              <input type="text" name="status" value="berakhir" hidden>
                            <?php } ?>
                            <input type="text" name="namamk" value="<?php echo $value->namamk; ?>" hidden>
                            <input type="text" name="waktu" value="<?php echo $value->jam_mulai . ' - ' . $value->jam_selesai; ?>" hidden>
                            <input type="text" name="namaklas" value="<?php echo $value->namaklas; ?>" hidden>
                            <input type="text" name="kd_absendsn" value="<?php echo $value->kd_absendsn; ?>" hidden>
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
          <!-- /.today -->
          
          <!-- /cancel -->
          <div class="tab-pane fade" id="custom-content-below-cancel" role="tabpanel" aria-labelledby="custom-content-below-cancel-tab">
            <br/>
              <div class="kelas-hari-ini">
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
                        <?php if($value->status == 'diajukan') {?>
                        <div class="status col-4"><p><?php echo 'Sedang Diproses' ?></p></div>
                          <?php } else {?>
                        <form class="status col-4" action="<?php echo site_url(); ?>absensi_dosen/kelas_pengganti" method="post">
                          <input type="text" name="kd_gantikls" value="<?php echo $value->kd_gantikls; ?>" hidden>
                          <input type="text" name="tgl_batal" value="<?php echo $value->tgl_batal; ?>" hidden>
                          <input type="text" name="jml_jam" value="<?php echo $value->jml_jam; ?>" hidden>
                          <input type="text" name="namamk" value="<?php echo $value->namamk; ?>" hidden>
                          <input type="text" name="namaklas" value="<?php echo $value->namaklas; ?>" hidden>
                          <input type="text" name="kodeklas" value="<?php echo $value->kodeklas; ?>" hidden>
                          <button type="submit" class="btn btn-yellow btn-sm">Buat Pengganti</button>
                        </form>
                        <?php }?>
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
          <!-- /.cancel -->
        </div>
        <!-- /.tab-content -->
      </div>
      <!-- /.card-body -->
    </div>  
    <!-- /.card-primary -->
  </div>
  <!-- /.container-fluid -->
</div>
<!-- /.content -->