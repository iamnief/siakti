<!-- Content Header (Page header) -->
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark">Dosen</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="index.html">Admin</a></li>
          <li class="breadcrumb-item"><a href="list_dosen.html">List Dosen</a></li>
          <li class="breadcrumb-item active">Detail List Dosen</li>
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
          <a class="nav-link active" id="custom-content-below-home-tab" data-toggle="pill" href="#custom-content-below-home" role="tab" aria-controls="custom-content-below-home" aria-selected="true">Profil</a>
        </li>
        <!-- <li class="nav-item">
          <a class="nav-link" id="custom-content-below-profile-tab" data-toggle="pill" href="#custom-content-below-profile" role="tab" aria-controls="custom-content-below-profile" aria-selected="false">Absensi</a>
        </li> -->
      </ul>
      <div class="tab-content" id="custom-content-below-tabContent">
        <div class="tab-pane fade show active" id="custom-content-below-home" role="tabpanel" aria-labelledby="custom-content-below-home-tab">
          <form class="form-horizontal" action="submit_dosen" method="POST">
            <div class="form-group">
              <label>NIP</label>
              <input type="text" class="form-control" id="nip" name="nip" value="<?= $data['nip'] ?>">
            </div>
            <div class="form-group">
              <label>Nama</label>
              <input type="text" class="form-control" id="nama" name="nama" value="<?= $data['nama'] ?>">
            </div>
            <div class="form-group">
              <label>Username</label>
              <input type="text" class="form-control" id="usr_name" name="usr_name" value="<?= $data['usr_name'] ?>">
            </div>
            <div class="form-group">
              <label>Alamat</label>
              <textarea class="form-control" rows="3" id="alamat" name="alamat"><?= $data['alamat'] ?></textarea>
            </div>
            <div class="form-group">
              <label>Kelurahan</label>
              <input type="text" class="form-control" id="kel_staff" name="kel_staff" value="<?= $data['kel_staff'] ?>">
            </div>
            <div class="form-group">
              <label>Kecamatan</label>
              <input type="text" class="form-control" id="kec_staff" name="kec_staff" value="<?= $data['kec_staff'] ?>">
            </div>
            <div class="form-group">
              <label>Kota</label>
              <input type="text" class="form-control" id="kota_staff" name="kota_staff" value="<?= $data['kota_staff'] ?>">
            </div>
            <div class="form-group">
              <label>Nomor Telepon</label>
              <input type="text" class="form-control" id="tlp_staff" name="tlp_staff" value="<?= $data['tlp_staff'] ?>">
            </div>
            <div class="form-group">
              <label>Alamat E-mail</label>
              <input type="E-mail" class="form-control" id="email_staff" name="email_staff" value="<?= $data['email_staff'] ?>">
            </div>
            <div class="form-group">
              <label>Program Studi</label>
              <select class="custom-select custom-select-md form-control form-control-md" name="prodi_prodi_id" id="prodi_prodi_id">
                <?php
                  foreach($dataProdi as $rowProdi){
                    if($data['prodi_prodi_id'] == $rowProdi['prodi_id']){
                      echo "<option value=$rowProdi[prodi_id] selected>$rowProdi[namaprod]</option>";
                    }
                    else{
                      echo "<option value=$rowProdi[prodi_id]>$rowProdi[namaprod]</option>";
                    }
                ?>
                <?php
                  }
                ?>
              </select>
            </div>

            <input type="hidden" class="form-control" id="password" name="password" value="<?= $data['password'] ?>">
            <input type="hidden" class="form-control" id="pin" name="pin" value="<?= $data['pin'] ?>">
            <div class="col-sm-offset-2 col-sm-10">
              <button type="submit" class="btn btn-default">Save</button>
            </div>
          </form>
        </div>
        <div class="tab-pane fade" id="custom-content-below-profile" role="tabpanel" aria-labelledby="custom-content-below-profile-tab">
          <div class="row">
            <div class="col-12">
              <div class="card-body">
                <div id="example1_wrapper" class="dataTablles_wrapper dt-bootstrap4">
                  <div class="row">
                    <div class="col-6">
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
                    <div class="col-6">
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
                      <th>Tanggal</th>
                      <th>Mata Kuliah</th>
                      <th>Status</th>
                      <th>Lampiran</th>
                      <th>Action</th>
                  </thead>
                  <tbody>
                    <tr>
                      <td>Misc</td>
                      <td>Lynx</td>
                      <td>Text only</td>
                      <td>
                        <div class="input-group">
                          <div class="custom-file">
                            <input type="file" class="custom-file-input" id="exampleInputFile">
                            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                          </div>
                          <div class="input-group-append">
                            <span class="input-group-text" id="">Upload</span>
                          </div>
                        </div>
                      </td>
                      <td><a class="btn btn-info btn-sm" data-toggle="modal" data-target="#myModal">
                          <i class="fas fa-pencil-alt">
                          </i>
                          Edit
                        </a></td>
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
      </div>
      <!-- /.card -->
    </div>

</section>
<!-- /.content -->
</div>
</section>