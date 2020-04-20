	<!-- Content Header (Page header) -->
	<div class="content-header">
	  <div class="container-fluid">
	    <div class="row mb-2">
	      <div class="col-sm-6">
	        <h1 class="m-0 text-dark">Input Capaian Pembelajaran</h1>
	      </div><!-- /.col -->
	      <div class="col-sm-6">
	        <ol class="breadcrumb float-sm-right">
	          <li class="breadcrumb-item"><a href="#">Home</a></li>
	          <li class="breadcrumb-item "><a href="<?php echo site_url('cp') ?>">Modul Capaian Pembelajaran</a></li>
	          <li class="breadcrumb-item active">Input Capaian Pembelajaran</li>
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
	      <!-- column -->
	      <div class="col-md-12">
	        <!-- general form elements -->

	        <!-- Horizontal Form -->
	        <div class="card card-info">
	          <div class="card-header">
	            <h3 class="card-title">Form Input Capaian Pembelajaran</h3>
	          </div>
	          <!-- /.card-header -->
	          <!-- form start -->
	          <form class="form-horizontal">
	            <div class="card-body">
					<div class="form-group row">
						<label for="" class="col-sm-2 col-form-label">Topik Pembelajaran</label>
						<div class="col-sm-10">
						<input type="name" class="form-control" id="nama_kurikulum" placeholder="Masukkan Topik Pembelajaran">
						</div>
					</div>

					<div class="form-group row">
						<label for="" class="col-sm-2 col-form-label">Metode Pembelajaran </label>
						<div class="col-sm-10 row" style="padding-left:13px">
							<select name="jumlahsms_kurikulum" class="custom-select col-md-4" id="jumlahsms_kurikulum">
								<option>Jumlah Semester</option>
								<option>1</option>
								<option>2</option>
								<option>3</option>
								<option>4</option>
								<option>5</option>
								<option>6</option>
								<option>7</option>
								<option>8</option>
							</select>

							<div class="col-md-8 row">
								<label for="" class="col-form-label col-md-4">Prosentase Teori & Praktek</label>
								<input type="name" class="form-control col-md-8" id="nama_kurikulum" placeholder="Masukkan Topik Pembelajaran">
							</div>
							
						</div>
					</div>

					<div class="form-group row">
						<label for="" class="col-sm-2 col-form-label">Capaian Pembelajaran </label>
						<div class="col-sm-10">
							<div class="input-group">
								<textarea class="form-control" id="validationTextarea" placeholder=""></textarea>
							</div>
						</div>
					</div>

					<div class="form-group row">
						<label for="" class="col-sm-2 col-form-label">Deskripsi Materi </label>
						<div class="col-sm-10">
							<div class="input-group">
								<textarea class="form-control" id="validationTextarea" placeholder=""></textarea>
							</div>
						</div>
					</div>

					<div class="form-group row">
						<label for="" class="col-sm-2 col-form-label">Referensi</label>
						<div class="col-sm-10">
							<div class="input-group">
								<textarea class="form-control" id="validationTextarea" placeholder=""></textarea>
							</div>
						</div>
					</div>
                </div>
                
	            <!-- /.card-body -->
	            <div class="card-footer">
                <a href="<?php echo site_url('kurikulum/') ?>" class="btn btn-info" type="submit">Save</a>
                <a href="<?php echo site_url('kurikulum/') ?>" class="btn btn-danger" type="submit">Cancel</a>
	            </div>
	            <!-- /.card-footer -->
	          </form>
	        </div>
	        <!-- /.card -->
	      </div>
	      <!-- /.column -->
	    </div>
	    <!-- /.row -->
	  </div>
	  <!--/. container-fluid -->
	</section>
	<!-- /.content -->