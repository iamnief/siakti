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
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-6">

        <div class="card">
          <div class="kelas-hari-ini">
            <h3>Kelas Hari Ini</h3>
            <h5>2 April 2020</h5>
            <?php
            $response = json_decode($this->curl->simple_get($this->API . '/jadwalkuliah/dosen/75/2/4/2020-06-11'));
            if (isset($response->responseCode) && $response->responseCode == '200') {
              $data_jadwal = $response->responseData;
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
                echo '<p>Kelas sudah berakhir</p>';
                echo '<a href="detail_kelas" class="btn btn-yellow btn-sm" role="button">Detail Kehadiran</a>';
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
                  <a href="detail_kelas" class="btn btn-yellow btn-sm" role="button">Lihat Kelas</a>
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
                  <a href="detail_kelas" class="btn btn-yellow btn-sm" role="button">Mulai Kelas</a>
                  <a href="detail_kelas" class="btn btn-danger btn-sm" role="button">Batalkan Kelas</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /.card -->
      </div>
      <!-- /.col-md-6 -->
      <div class="col-lg-6">

        <div class="card">
          <div class="kelas-tertunda">
            <h3>Kelas Tertunda</h3>
            <div class="mata-kuliah card">
              <div class="row">
                <div class="matkul col-8">
                  <p class="nama-matkul">Data Mining</p>
                  <p>28 Februari 2020</p>
                  <p>07.30 - 08.30</p>
                  <p>TI - 6A</p>
                </div>
                <div class="status col-4">
                  <a href="kelas_pengganti.html" class="btn btn-yellow btn-sm" role="button">Buat Kelas
                    Pengganti</a>
                </div>
              </div>
            </div>
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