<?php
date_default_timezone_set("Asia/Jakarta");
$hari = date('N');
$tgl = date('d-m-y');
$user = $this->session->get_userdata();
$kodeklas = $user['kelas_kodeklas'];
$url = 'jadwalkuliah/mahasiswa/' . $kodeklas . '/'  . $hari . '/' . $tgl;
$response  = $this->customguzzle->getBasicToken($url, 'application/json');
?>

<!-- Content Header (Page header) -->
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark">Dashboard</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Absensi</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card card-cyan">
          <div class="card-header">
            <span class="float-left">Kelas Hari Ini</span>
            <div class="card-tools">
              <div class="clearfix">
                <span class="float-right">
                  <?php echo date("l, j F Y"); ?></span>
              </div>
            </div>
          </div>
          <!-- /.card-header -->
          <div class="card-body table-responsive p-0">
            <table class="table table-hover text-nowrap">
              <thead>
                <tr>
                  <th>Mata Kuliah</th>
                  <th>Dosen</th>
                  <th>Ruangan</th>
                  <th>Waktu</th>
                </tr>
              </thead>
              <tbody>
                <?php
                if (isset($response['error']) && !$response['error']) {
                  $data_jadwal = json_decode($response['data']);
                  foreach ($data_jadwal as $key => $value) {
                    $value = json_decode(json_encode($value));
                    echo '<tr>';
                    echo '<td>' . $value->namamk . '</td>';
                    echo '<td>' . $value->nama_dosen . '</td>';
                    echo '<td>' . $value->ruangan_namaruang . '</td>';
                    echo '<td>' . $value->jam_mulai . " - " . $value->jam_selesai . '</td>';
                    echo '</tr>';
                  }
                }
                ?>
              </tbody>
            </table>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
    </div>
  </div>
</section>