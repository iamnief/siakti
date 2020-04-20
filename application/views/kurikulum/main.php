	<!-- Content Header (Page header) -->
	<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Modul Kurikulum</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Modul Kurikulum</li>
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
          <div class="col-md-12">
              <!-- TABLE: LATEST ORDERS -->
              <div class="card">
                <div class="card-header border-transparent">
                  <h3 class="card-title">Data Kurikulum</h3>
                  <div class="card-tools">
                    <a href="<?php echo site_url('kurikulum/create') ?>" class="btn btn-sm btn-info float-left">Input Kurikulum</a>
                  </div>
                </div>

                <!-- /.card-header -->
                <div class="card-body p-0">
                  <div class="table-responsive">
                    <table class="table m-0">
                      <thead>
                      <tr>
                        <th>No</th>
                        <th>Nama Kurikulum</th>
                        <th>Program Studi</th>
                        <th>Mulai Berlaku</th>
                        
                        <th>Action</th>
                      </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>1</td>
                          <td>Kurikulum 2013</td>
                          <td>Teknik Informatika</td>
                          <td>
                            2015 - Sekarang
                          </td>
                          <td>
                              <button class="btn btn-secondary btn-sm">
                                <i class="fas fa-pencil-alt"></i>
                              </button>
                              <a href="<?php echo site_url('matkul') ?>" class="btn btn-info btn-sm">
                                <i class="fas fa-eye"></i>
                              </a>
                              <button class="btn btn-danger btn-sm">
                                <i class="fas fa-trash-alt"></i>
                              </button>
                          </td>
                        </tr>
                        <tr>
                          <td>2</td>
                          <td>Kurikulum 2010</td>
                          <td>Teknik Multimedia</td>
                          <td>
                            2010 - 2013
                          </td>
                          <td>
                              <button class="btn btn-secondary btn-sm">
                                <i class="fas fa-pencil-alt"></i>
                              </button>
                              <a href="<?php echo site_url('matkul') ?>" class="btn btn-info btn-sm">
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
              <!-- /.card-footer -->
            </div>
            <!-- /.card -->
          </div>
        </div>
        <!-- /.row -->
      </div><!--/. container-fluid -->
    </section>
    <!-- /.content -->
