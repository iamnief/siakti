<!-- Content Header (Page header) -->
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark">Buat Kelas Pengganti</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Absensi</a></li>
          <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
          <li class="breadcrumb-item active">Buat Kelas Pengganti</li>
        </ol>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<div class="content">
  <div class="container-fluid">
    <div class="card card-info">
      <!-- form start -->
      <form class="form-horizontal" action="ganti_kelas" method="post">
        <input type="text" id="kodeklas" name="kodeklas" value="<?php echo $kodeklas; ?>" hidden>
        <input type="text" id="kd_gantikls" name="kd_gantikls" value="<?php echo $kd_gantikls; ?>">
        <div class="card-body">
          <div class="form-group row">
            <label class="col-sm-2">Mata Kuliah</label>
            <div class="col-sm-10">
              <p>: <?php echo $namamk ?></p>
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-2">Kelas</label>
            <div class="col-sm-10">
              <p>: <?php echo $namaklas ?></p>
            </div>
          </div>
          <!-- <div class="form-group row">
            <label class="col-sm-2">Minggu ke-</label>
            <div class="col-sm-10">
              <p>:2</p>
            </div>
          </div> -->
          <div class="form-group row">
            <label class="col-sm-2">Jumlah jam</label>
            <div class="col-sm-10">
              <p>: <span id="jml_jam"><?php echo $jml_jam; ?></span> jam perkuliahan</p>
            </div>
          </div>
          <div class="form-group row">
            <label for="tanggal_pengganti" class="col-sm-2 col-form-label">Tanggal</label>
            <div class="col-sm-10">
              <input name="tanggal_pengganti" id="tanggal_pengganti" type="date" class="form-control" />
            </div>
          </div>
          <div class="form-group row">
            <label for="namaruang" class="col-sm-2 col-form-label">Ruangan</label>
            <div class="col-sm-10">
              <select class="form-control select2" style="width: 100%;" id="namaruang" name="namaruang">
                <?php if (isset($resp_ruangan['error']) && !$resp_ruangan['error']) {
                  $ruangan = json_decode($resp_ruangan['data']);
                  foreach ($ruangan as $key => $value) {
                    # code...
                ?>
                    <option><?php echo $value->namaruang; ?></option>
                <?php
                  }
                } ?>
              </select>
            </div>
          </div>
          <a onclick="getJam()" class="btn btn-yellow">Pilih Jam</a>
          <div class="form-group row"></div>
          <div class="form-group row">
            <label for="jam_ke" class="col-sm-2">Jam pelajaran</label>
            <div class="col-sm-10" id="field_jam">
              <p>Pilih Tanggal dan Ruangan terlebih dahulu</p>
            </div>
          </div>
          <div class="form-group row">
            <p id="message" style="color:red;" ></p>
          </div>
          <button id="submit_kelas" type="submit" class="btn btn-yellow" hidden></button>
          <a class="btn btn-yellow" onclick="submitKls()">Submit</a>
          <a class="btn btn-danger">Batal</a>
        </div>
      </form>
    </div>
    <!-- /.card -->
  </div>
  <!-- /.container-fluid -->
</div>
<!-- /.content -->