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
          <li class="breadcrumb-item active">List Dosen</li>
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
      <div class="col-12">
        <div class="card">
          <!-- /.card-header -->
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
                    <label>
                      Search:
                      <input class="form-control form-control-sm" type="Search" placeholder="" aria-controls="example1">
                    </label>
                  </div>
                </div>
              </div>

            </div>
          </div>
          <div class="card-body">
            <table id="example2" class="table table-bordered table-hover">
              <thead>
                <tr>
                  <th>NIP</th>
                  <th>Nama</th>
                  <th>Username</th>
                  <th>Alamat</th>
                  <th>Action</th>
              </thead>
              <tbody>
                <?php
                  foreach((array)$data as $row){
                ?>
                <tr>
                  <td><?=$row['nip']?></td>
                  <td><?=$row['nama']?></td>
                  <td><?=$row['usr_name']?></td>
                  <td><?=$row['alamat']?></td>
                  <td><a class="btn btn-primary btn-sm" href="<?php $url = 'absensi_admin/detail_dosen?nip='.$row['nip']; echo site_url($url); ?>">
                      <i class="fas fa-folder">
                      </i>
                      Edit
                    </a></td>
                </tr>
                <?php
                  }
                ?>
              </tbody>
            </table>
          </div>
          <!-- /.card-body -->
        </div>
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </div>
  <!-- /.container-fluid -->
</section>
<!-- /.content -->