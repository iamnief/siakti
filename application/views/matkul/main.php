	<!-- Content Header (Page header) -->
	<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Modul Mata Kuliah</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v2</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">

        <!-- Main row -->
        <div class="row">

          <!-- Left col -->
          <div class="col-md-2">
            <div class="list-group">
              <a href="#" class="list-group-item list-group-item-action active">Semester 1</a>
              <a href="#" class="list-group-item list-group-item-action">Semester 2</a>
              <a href="#" class="list-group-item list-group-item-action">Semester 3</a>
              <a href="#" class="list-group-item list-group-item-action">Semester 4</a>
              <a href="#" class="list-group-item list-group-item-action">Semester 5</a>
              <a href="#" class="list-group-item list-group-item-action">Semester 6</a>
              <a href="#" class="list-group-item list-group-item-action">Semester 7</a>
              <a href="#" class="list-group-item list-group-item-action">Semester 8</a>
            </div>
          </div>
          <div class="col-md-10">

            <!-- TABLE: LATEST ORDERS -->
            <div class="card">
              <div class="card-header border-transparent">
                <h3 class="card-title">Data Mata Kuliah</h3>

                <div class="card-tools">
                  <a href="<?php echo site_url('matkul/create') ?>" class="btn btn-sm btn-info float-left">Tambah Data</a>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
                <div class="table-responsive">
                  <table class="table m-0">
                    <thead>
                    <tr>
                      <th>No</th>
                      <th>Nama Matkul</th>
                      <th>Jumlah SKS</th>
                      <th>Jumlah Jam</th>
                      <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>1</td>
                        <td>Proyek Kekhususan</td>
                        <td>30</td>
                        <td>20</td>
                        <td>
                            <button class="btn btn-secondary btn-sm">
                              <i class="fas fa-pencil-alt"></i>
                            </button>
                            <a href="<?php echo site_url('cp') ?>" class="btn btn-info btn-sm">
                              <i class="fas fa-eye"></i>
                            </a>
                            <button class="btn btn-danger btn-sm">
                              <i class="fas fa-trash-alt"></i>
                            </button>
                        </td>
                      </tr>
                      <tr>
                        <td>2</td>
                        <td>Database</td>
                        <td>20</td>
                        <td>10</td>
                        <td>
                            <button class="btn btn-secondary btn-sm">
                              <i class="fas fa-pencil-alt"></i>
                            </button>
                            <a href="<?php echo site_url('cp') ?>" class="btn btn-info btn-sm">
                              <i class="fas fa-eye"></i>
                            </a>
                            <button class="btn btn-danger btn-sm">
                              <i class="fas fa-trash-alt"></i>
                            </button>
                        </td>
                      </tr>
                      <tr>
                        <td>3</td>
                        <td>Machine Learning</td>
                        <td>40</td>
                        <td>30</td>
                        <td>
                            <button class="btn btn-secondary btn-sm">
                              <i class="fas fa-pencil-alt"></i>
                            </button>
                            <a href="<?php echo site_url('cp') ?>" class="btn btn-info btn-sm">
                              <i class="fas fa-eye"></i>
                            </a>
                            <button class="btn btn-danger btn-sm">
                              <i class="fas fa-trash-alt"></i>
                            </button>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
                <!-- /.table-responsive -->
              </div>
              <!-- /.card-body -->
              <div class="card-footer clearfix">

              </div>
              <!-- /.card-footer -->
            </div>
            <!-- /.card -->
          </div>
        </div>
        <!-- /.row -->
      </div><!--/. container-fluid -->
    </section>
    <!-- /.content -->
