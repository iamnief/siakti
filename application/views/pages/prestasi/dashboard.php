	<!-- Content Header (Page header) -->
	<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Dashboard Modul Prestasi</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
							<li class="breadcrumb-item"><a href="<?php echo base_url(); ?>">Home</a></li>
              <li class="breadcrumb-item active">Modul Prestasi</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
		<div class="container-fluid">
      <div class="card px-3 pt-3 pb-n2" style="background-color: #008797;">
				<div class="card" style="background-color: rgba(188, 225, 229, 1);">
					<div class="card-title pl-3 pt-3">
						<h2>Daftar Prestasi Mahasiswa TI-6A</h2>
					</div>
					<div class="card-body">
						<div class="row">
							<div class="col-md-12">
								<?php for($i=0; $i<5; $i+=1){ ?>
									<div class="form-row mb-2 justify-content-center">
										<div class="col-md-7">
											<input type="text" class="form-control" placeholder="Mahasiswa <?php echo $i; ?>" name="mhs" id="" disabled>
										</div>
										<div class="col-md-2">
											<a href="#" class="btn btn-primary btn-block">Periksa</a>
										</div>
									</div>
								<?php } ?>
								<?php for($i=0; $i<2; $i+=1){ ?>
									<div class="form-row mb-2 justify-content-center">
										<div class="col-md-7">
											<input type="text" class="form-control" placeholder="Mahasiswa <?php echo $i; ?>" name="mhs" id="" disabled>
										</div>
										<div class="col-md-2">
											<a href="#" class="btn btn-success btn-block">Diterima</a>
										</div>
									</div>
								<?php } ?>
								<?php for($i=0; $i<3; $i+=1){ ?>
									<div class="form-row mb-2 justify-content-center">
										<div class="col-md-7">
											<input type="text" class="form-control" placeholder="Mahasiswa <?php echo $i; ?>" name="mhs" id="" disabled>
										</div>
										<div class="col-md-2">
											<a href="#" class="btn btn-danger btn-block">Ditolak</a>
										</div>
									</div>
								<?php } ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div><!--/. container-fluid -->
    </section>
    <!-- /.content -->
