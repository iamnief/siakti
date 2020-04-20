	<!-- Content Header (Page header) -->
	<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Halaman Input Nilai</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo site_url('main');?>">Dashboard</a></li>
              <li class="breadcrumb-item"><a href="<?php echo site_url('nilai');?>">Nilai</a></li>
              <li class="breadcrumb-item active">Nilai Mahasiswa</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
		<a href="<?php echo site_url('nilai');?>" class="btn btn-primary btn-sm">
			<i class="ion ion-android-arrow-back"></i>
			Kembali
		</a><br><br>
		<div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h5 class="card-title">Proyek Kekhususan - TIK - TI 6A - 2019/2020</h5>

                <div class="card-tools">
				  <a href="#" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#modal-default">
					  <i class="ion ion-ios-gear"></i>
					  Kriteria dan Bobot Penilaian
				  </a>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
				<table class="table table-bordered table-striped" id="example1">
					<thead>
						<tr>
							<th>No.</th>
							<th>Nama Mahasiswa</th>
							<th>Tugas</th>
							<th>UTS</th>
							<th>UAS</th>
							<th>Hasil Akhir</th>
							<th>Nilai Mutu</th>
							<th>Aksi</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>2.</td>
							<td>Muhammad Ridwan Ramadhan</td>
							<td>90</td>
							<td>90</td>
							<td>90</td>
							<td>90</td>
							<td>A</td>
							<td>
								<a href="#" class="btn btn-sm btn-primary">
									<i class="ion ion-paper-airplane"></i>
									Save
								</a>
							</td>
						</tr>
						<tr>
							<td>3.</td>
							<td>Jodi Usnanda Eka Putra</td>
							<td>90</td>
							<td>90</td>
							<td>90</td>
							<td>90</td>
							<td>A</td>
							<td>
								<a href="#" class="btn btn-sm btn-primary">
									<i class="ion ion-paper-airplane"></i>
									Save
								</a>
							</td>
						</tr>
						<tr>
							<td>4.</td>
							<td>Arifah Fariza</td>
							<td>90</td>
							<td>90</td>
							<td>90</td>
							<td>90</td>
							<td>A</td>
							<td>
								<a href="#" class="btn btn-sm btn-primary">
									<i class="ion ion-paper-airplane"></i>
									Save
								</a>
							</td>
						</tr>
						<tr>
							<td>5.</td>
							<td>Nely Febrianita</td>
							<td>90</td>
							<td>90</td>
							<td>90</td>
							<td>90</td>
							<td>A</td>
							<td>
								<a href="#" class="btn btn-sm btn-primary">
									<i class="ion ion-paper-airplane"></i>
									Save
								</a>
							</td>
						</tr>
						<tr>
							<td>1.</td>
							<td>Harun</td>
							<td>90</td>
							<td>90</td>
							<td>90</td>
							<td>90</td>
							<td>A</td>
							<td>
								<a href="#" class="btn btn-sm btn-primary">
									<i class="ion ion-paper-airplane"></i>
									Save
								</a>
							</td>
						</tr>
					</tbody>
				</table>
              </div>
              <!-- ./card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!--/. container-fluid -->
    </section>
	<!-- /.content -->
	
	<div class="modal fade" id="modal-default">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Kriteria dan Bobot Penilaian</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
				<form class="form-horizontal">
					<div class="card-body">
						<div class="form-group row">
							<label for="inputEmail3" class="col-sm-2 col-form-label">Tugas</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" id="inputEmail3" placeholder="Tugas">
							</div>
						</div>
						<div class="form-group row">
							<label for="inputEmail3" class="col-sm-2 col-form-label">UTS</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" id="inputEmail3" placeholder="UTS">
							</div>
						</div>
						<div class="form-group row">
							<label for="inputEmail3" class="col-sm-2 col-form-label">UAS</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" id="inputEmail3" placeholder="UAS">
							</div>
						</div>
						<div class="form-group row">
							<div class="col-sm-4"></div>
							<div class="col-sm-4 align-center">
								<a href="#" class="btn btn-sm btn-primary">
									<i class="ion ion-ios-plus"></i>
									Tambah Kriteria
								</a>
							</div>
							<div class="col-sm-4"></div>
						</div>
					</div>
					<!-- /.card-body -->
				</form>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Save changes</button>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
	</div>
	<!-- /.modal -->
