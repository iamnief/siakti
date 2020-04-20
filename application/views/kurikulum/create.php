	<!-- Content Header (Page header) -->
	<div class="content-header">
	  <div class="container-fluid">
	    <div class="row mb-2">
	      <div class="col-sm-6">
	        <h1 class="m-0 text-dark">Input Kurikulum</h1>
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
	            <h3 class="card-title">Form Input Kurikulum</h3>
	          </div>
	          <!-- /.card-header -->
	          <!-- form start -->
	          <form class="form-horizontal">
	            <div class="card-body">
	              <div class="form-group row">
	                <label for="" class="col-sm-2 col-form-label">Nama Kurikulum</label>
	                <div class="col-sm-10">
	                  <input type="name" class="form-control" id="nama_kurikulum" placeholder="Masukkan Nama Kurikulum">
	                </div>
	              </div>

	              <div class="form-group row">
	                <label for="" class="col-sm-2 col-form-label">Program Studi</label>
	                <div class="col-sm-10">
	                  <select name="prodi_kurikulum" class="form-control" id="prodi_kurikulum">
	                    <option>Pilih Program Studi</option>
	                    <option>Teknik Informatika</option>
	                    <option>Teknik Multimedia Digital</option>
	                    <option>Teknik Multimedia Jaringan</option>
	                    <option>TKJ</option>
	                  </select>
	                </div>
	              </div>

	              <div class="form-group row">
	                <label for="" class="col-sm-2 col-form-label">Tanggal berlaku</label>
	                <div class="col-sm-10">
	                  <div class="input-group">
	                    <div class="input-group-prepend">
	                      <span class="input-group-text">
	                        <i class="far fa-calendar-alt"></i>
	                      </span>
	                    </div>
	                    <input type="text" class="form-control float-right" id="reservation">
	                  </div>
	                </div>
                </div>
                
                <div class="form-group row">
	                <label for="" class="col-sm-2 col-form-label">Tanggal berakhir</label>
	                <div class="col-sm-10">
	                  <div class="input-group">
	                    <div class="input-group-prepend">
	                      <span class="input-group-text">
	                        <i class="far fa-calendar-alt"></i>
	                      </span>
	                    </div>
	                    <input type="text" class="form-control float-right" id="reservation">
	                  </div>
	                </div>
	              </div>

	              <div class="form-group row">
	                <label for="" class="col-sm-2 col-form-label">Jumlah Semester</label>
	                <div class="col-sm-10">
	                  <select name="jumlahsms_kurikulum" class="custom-select" id="jumlahsms_kurikulum">
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
	                  
	                </div>
	              </div>
	              
	              <div class="form-group row">
	                <label for="" class="col-sm-2 col-form-label">Detail Kurikulum</label>
	                <div class="col-sm-10">
	                  <textarea name="detail_kurikulum" id="detail_kurikulum" class="form-control" rows="3" placeholder="Detail ..."></textarea>
	                </div>
                </div>
                
                <div class="form-group row">
	                <label for="" class="col-sm-2 col-form-label">File Kurikulum</label>
	                <div class="col-sm-10">
	                  <div class="input-group">
	                    <div class="custom-file">
	                      <input type="file" class="file_kurikulum" id="exampleInputFile">
	                      <label class="custom-file-label" for="exampleInputFile">Choose file</label>
	                    </div>
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