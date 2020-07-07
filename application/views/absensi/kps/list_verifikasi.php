<!-- Content Header (Page header) -->
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark">Verifikasi</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Absensi</a></li>
          <li class="breadcrumb-item active">Verifikasi Perkuliahan</li>
        </ol>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<section class="content">
  <div class="card card-primary card-outline">
    <div class="card-body">
      <ul class="nav nav-tabs" id="custom-content-below-tab" role="tablist">
        <li class="nav-item">
          <a class="nav-link active" id="content-perkuliahan-tab" data-toggle="pill" href="#content-perkuliahan" role="tab" aria-controls="content-perkuliahan" aria-selected="true">Perkuliahan</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="content-kelas-pengganti-tab" data-toggle="pill" href="#content-kelas-pengganti" role="tab" aria-controls="content-kelas-pengganti" aria-selected="false">Kelas Pengganti</a>
        </li>
      </ul>
      <div class="tab-content" id="custom-content-below-tabContent">
        <!-- TAB DOSEN -->
        <div class="tab-pane fade show active" id="content-perkuliahan" role="tabpanel" aria-labelledby="content-perkuliahan-tab">
          <div class="row">
            <div class="col-12">
              <div class="card-body">
                <!-- <h5>Kelas Pengganti</h5> -->
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.col -->
          </div>
          <div class="row">
            <div class="col-lg-12">
              <div class="kelas-hari-ini">
                <?php
                if (isset($resp_list_perkuliahan) && !$resp_list_perkuliahan['error']) {
                  $resp_data = json_decode($resp_list_perkuliahan['data']);
                  foreach ($resp_data as $key => $value) {
                ?>
                    <div class="mata-kuliah card">
                      <div class="row">
                        <div class="matkul col-8">
                          <p class="nama-matkul"><?php echo $value->namaklas . ' ' . $value->namamk ?></p>
                          <p><?php echo $value->tgl ?></p>
                        </div>
                        <form method="post" class="status col-4" action="<?php echo site_url('absensi_kps/detail_perkuliahan'); ?>">
                          <?php $perkuliahan = json_decode(json_encode($value));
                          foreach ($perkuliahan as $key => $p) {
                          ?>
                            <input type="text" name="<?php echo $key; ?>" value="<?php echo $p; ?>" hidden>
                          <?php
                          }
                          ?>
                          <button type="submit" class="btn btn-yellow btn-sm">Detail</button>
                        </form>
                      </div>
                    </div>
                <?php
                  }
                } ?>
              </div>
            </div>
            <!-- /.col-md-6 -->
          </div>
          <!-- /.row -->
        </div>
        <!-- END TAB DOSEN -->

        <!-- TAB MAHASISWA -->
        <div class="tab-pane fade" id="content-kelas-pengganti" role="tabpanel" aria-labelledby="content-kelas-pengganti-tab">
          <div class="row">
            <div class="col-12">
              <div class="card-body">
                <!-- <h5>Kelas Pengganti</h5> -->
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
          <div class="row">
            <div class="col-lg-12">
              <div class="kelas-hari-ini">
                <?php if (isset($resp_list_kelas_pengganti) && !$resp_list_kelas_pengganti['error']) {
                  $resp_data = json_decode($resp_list_kelas_pengganti['data']);
                  foreach ($resp_data as $key => $value) {
                    # code...
                ?>
                    <div class="mata-kuliah card">
                      <div class="row">
                        <div class="matkul col-8">
                          <p class="nama-matkul"><?php echo $value->namaklas . ' ' . $value->namamk ?></p>
                          <p>Tanggal Batal: <?php echo $value->tgl_pengganti ?></p>
                        </div>
                        <form method="post" class="status col-4" action="<?php echo site_url('absensi_kps/detail_kls_pengganti'); ?>">
                          <?php $kls_pengganti = json_decode(json_encode($value));
                          foreach ($kls_pengganti as $key => $p) {
                          ?>
                            <input type="text" name="<?php echo $key; ?>" value="<?php echo $p; ?>" hidden>
                          <?php
                          }
                          ?>
                          <button type="submit" class="btn btn-yellow btn-sm">Detail</button>
                        </form>
                      </div>
                    </div>
                <?php
                  }
                } ?>
              </div>
            </div>
            <!-- /.col-md-6 -->
          </div>
          <!-- /.row -->
        </div>
        <!-- END TAB MAHASISWA -->
      </div>
      <!-- /.card -->
    </div>
  </div>
</section>