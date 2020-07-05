<!-- Content Header (Page header) -->
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark">Absensi Dosen & Mahasiswa</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="index.html">Absensi</a></li>
          <li class="breadcrumb-item active">Absensi Dosen & Mahasiswa</li>
        </ol>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<section class="content">
  <div class="card card-primary card-outline">
    <div class="card-body">
      <ul class="nav nav-tabs" id="custom-content-below-tab" role="tablist">
        <li class="nav-item">
          <a class="nav-link active" id="custom-content-below-home-tab" data-toggle="pill" href="#custom-content-below-home" role="tab" aria-controls="custom-content-below-home" aria-selected="true">Dosen</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="custom-content-below-profile-tab" data-toggle="pill" href="#custom-content-below-profile" role="tab" aria-controls="custom-content-below-profile" aria-selected="false">Mahasiswa</a>
        </li>
      </ul>
      <div class="tab-content" id="custom-content-below-tabContent">
        <!-- TAB DOSEN -->
        <div class="tab-pane fade show active" id="custom-content-below-home" role="tabpanel" aria-labelledby="custom-content-below-home-tab">
          <div class="row">
            <div class="col-12">
              <div class="card-body">
                <div id="example1_wrapper" class="dataTablles_wrapper dt-bootstrap4">
                  <div class="row">
                    <div class="col-sm-12 col-md-6">
                      <div id="example1_lenght" class="dataTablles_lenght">
                        <label>Show
                          <select class="custom-select custom-select-sm form-control form-control-sm" name="example1_lenght" aria-controls="example1">
                            <option value="10">10</option>
                            <option value="15">15</option>
                          </select>
                          entries
                        </label>
                      </div>
                    </div>
                    <div class="col-sm-12 col-md-6">
                      <div id="example1_filter" class="dataTablles_filter">
                        <label>Date:</label>
                        <div class="input-group date" id="reservationdate" data-target-input="nearest">
                          <input type="text" class="form-control datetimepicker-input" data-target="#reservationdate" />
                          <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                    <tr>
                      <th>NIK</th>
                      <th>Nama</th>
                      <th>Mata Kuliah</th>
                      <th>Status</th>
                  </thead>
                  <tbody>
                    <tr>
                      <td>Misc</td>
                      <td>Lynx</td>
                      <td>Text only</td>
                      <td>-</td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->

            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
        </div>
        <!-- END TAB DOSEN -->

        <!-- TAB MAHASISWA -->
        <div class="tab-pane fade" id="custom-content-below-profile" role="tabpanel" aria-labelledby="custom-content-below-profile-tab">
          <div class="row">
            <div class="col-12">
              <div class="card-body">
                <div id="example1_wrapper" class="dataTablles_wrapper dt-bootstrap4">
                  <div class="row">
                    <div class="col-sm-12 col-md-6">
                      <div id="example1_lenght" class="dataTablles_lenght">
                        <label>Show
                          <select class="custom-select custom-select-sm form-control form-control-sm" name="example1_lenght" aria-controls="example1">
                            <option value="10">10</option>
                            <option value="15">15</option>
                          </select>
                          entries
                        </label>
                      </div>
                    </div>
                    <div class="col-sm-12 col-md-6">
                      <div id="example1_filter" class="dataTablles_filter">
                        <label>Date:</label>
                        <div class="input-group date" id="reservationdate" data-target-input="nearest">
                          <input type="text" class="form-control datetimepicker-input" data-target="#reservationdate" />
                          <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                    <tr>
                      <th>NIM</th>
                      <th>Nama</th>
                      <th>Kelas</th>
                      <th>Status</th>
                  </thead>
                  <tbody>
                    <tr>
                      <td>Misc</td>
                      <td>Lynx</td>
                      <td>Text only</td>
                      <td>-</td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
        </div>
        <!-- END TAB MAHASISWA -->
      </div>
      <!-- /.card -->
    </div>
</section>