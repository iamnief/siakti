	<!-- Content Header (Page header) -->
	<div class="content-header">
	  <div class="container-fluid">
	    <div class="row mb-2">
	      <div class="col-sm-6">
	        <h1 class="m-0 text-dark">Input Mata Kuliah</h1>
	      </div><!-- /.col -->
	      <div class="col-sm-6">
	        <ol class="breadcrumb float-sm-right">
	          <li class="breadcrumb-item"><a href="#">Home</a></li>
	          <li class="breadcrumb-item "><a href="<?php echo site_url('kurikulum') ?>">Modul Kurikulum</a></li>
	          <li class="breadcrumb-item active">Input Kurikulum</li>
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
	            <h3 class="card-title">Form Input Mata Kuliah</h3>
	          </div>
	          <!-- /.card-header -->
	          <!-- form start -->
	          <form class="form-horizontal">
	            <div class="card-body">
	              <div class="form-group row">
	                <label for="" class="col-sm-2 col-form-label">Nama Matkul</label>
	                <div class="col-sm-10">
	                  <input type="name" class="form-control" id="nama_kurikulum" placeholder="Masukkan Nama Kurikulum">
	                </div>
	              </div>

				  <div class="form-group row">
	                <label for="" class="col-sm-2 col-form-label">SKS Matkul</label>
	                <div class="col-sm-5">
	                  <input type="name" class="form-control" id="nama_kurikulum" placeholder="SKS Praktek">
	                </div>
					<div class="col-sm-5">
	                  <input type="name" class="form-control" id="nama_kurikulum" placeholder="SKS Teori">
	                </div>
	              </div>

				  <div class="form-group row">
	                <label for="" class="col-sm-2 col-form-label">Jam Matkul</label>
	                <div class="col-sm-5">
	                  <input type="name" class="form-control" id="nama_kurikulum" placeholder="Jam Praktek">
	                </div>
					<div class="col-sm-5">
	                  <input type="name" class="form-control" id="nama_kurikulum" placeholder="Jam Teori">
	                </div>
	              </div>

                </div>
                
	            <!-- /.card-body -->
	            <div class="card-footer">
                <a href="<?php echo site_url('matkul/') ?>" class="btn btn-info" type="submit">Save</a>
                <a href="<?php echo site_url('matkul/') ?>" class="btn btn-danger" type="submit">Cancel</a>
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