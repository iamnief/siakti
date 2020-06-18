<?php
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
            <!-- tools card -->
            <div class="card-tools">
              <!-- button with a dropdown -->
              <div class="btn-group">
                <button type="button" class="btn btn-success btn-sm dropdown-toggle" data-toggle="dropdown" data-offset="-52">
                  <i class="fas fa-bars"></i></button>
                <div class="dropdown-menu" role="menu">
                  <a href="#" class="dropdown-item">Add new event</a>
                  <a href="#" class="dropdown-item">Clear events</a>
                  <div class="dropdown-divider"></div>
                  <a href="#" class="dropdown-item">View calendar</a>
                </div>
              </div>
              <button type="button" class="btn btn-success btn-sm" data-card-widget="collapse">
                <i class="fas fa-minus"></i>
              </button>
              <button type="button" class="btn btn-success btn-sm" data-card-widget="remove">
                <i class="fas fa-times"></i>
              </button>
            </div>
            <!-- /. tools -->
          </div>
          <!-- /.card-header -->
          <div class="card-body pt-0">
            <!--The calendar -->
            <div id="calendar" style="width: 100%" data-date-format="dd-mm-yyyy"></div>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
      <div class="col-8">
        <div class="card card-cyan">
          <div class="card-header">
            <span class="float-left">Kelas Hari Ini</span>
            <div class="card-tools">
              <div class="clearfix">
                <span class="float-right" id="chosen_date" >
                  <?php echo $tgl ?>
                </span>
              </div>
            </div>
          </div>
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
                if (isset($resp_jadwal['error']) && !$resp_jadwal['error']) {
                  $data_jadwal = json_decode($resp_jadwal['data']);
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
        </div>
      </div>
    </div>
  </div><!-- /.container-fluid -->
</div>