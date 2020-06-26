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
      <form class="form-horizontal" action="" method="put">
        <div class="card-body">
          <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Mata Kuliah</label>
            <div class="col-sm-10">
              <p><?php echo $namamk ?></p>
            </div>
          </div>
          <div class="form-group row">
            <label for="inputPassword3" class="col-sm-2 col-form-label">Kelas</label>
            <div class="col-sm-10">
              <p><?php echo $namaklas ?></p>
            </div>
          </div>
          <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Minggu ke-</label>
            <div class="col-sm-10">
              <p>2</p>
            </div>
          </div>
          <div class="form-group row">
            <label for="inputPassword3" class="col-sm-2 col-form-label">Jumlah jam</label>
            <div class="col-sm-10">
              <p><?php echo $jml_jam ?> jam perkuliahan</p>
            </div>
          </div>
          <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Tanggal & Waktu</label>
            <div class="col-sm-10">
              <div class="input-group date" id="tanggal_pengganti" data-target-input="nearest">
                <!-- <div class="input-group-append" data-target="#tanggal_pengganti" data-toggle="datetimepicker">
                  <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                </div>
                <input type="text" class="form-control datetimepicker-input" data-target="#tanggal_pengganti"/> -->
                <input type="date" class="form-control" placeholder="dd-mm-yyyy" name="tanggal_pengganti"/>
              </div>
            </div>
          </div>
          <div class="form-group row">
            <label for="inputPassword3" class="col-sm-2 col-form-label">Ruangan</label>
            <div class="col-sm-10">
              <select class="form-control select2" style="width: 100%;">
                <option selected="selected">Alabama</option>
                <option>Alaska</option>
                <option>California</option>
                <option>Delaware</option>
                <option>Tennessee</option>
                <option>Texas</option>
                <option>Washington</option>
              </select>
            </div>
          </div>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
          <button type="submit" class="btn btn-yellow">Submit</button>
          <button type="submit" class="btn btn-danger">Batal</button>
        </div>
        <!-- /.card-footer -->
      </form>
    </div>
    <!-- /.card -->
  </div>
  <!-- /.container-fluid -->
</div>
<!-- /.content -->