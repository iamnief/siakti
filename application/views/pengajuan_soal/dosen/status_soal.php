<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"> 
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title><?php echo $main['title']; ?></title>
	<?php $this->load->view('layouts/head') ?>
	<link rel="stylesheet" href="">
</head>
<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
	<div class="wrapper">

		<!-- navbar -->
			<?php $this->load->view('layouts/navbar/navbar_dosen')?>
		<!-- END navbar -->
		
		<!-- sidebar -->
			<?php $this->load->view('layouts/sidebar/sidebar_dosen')?>
		<!-- END sidebar -->

		<!-- Content Wrapper. Contains page content -->
		<div class="content-wrapper">
			<!-- pages -->
			<?php $this->load->view('pages/dosen/status_soal') ?>
			<!-- END pages -->
		</div>
		<!-- /.content-wrapper -->
		
		<!-- Control Sidebar -->
		<aside class="control-sidebar control-sidebar-dark">
			<!-- Control sidebar content goes here -->
		</aside>
		<!-- /.control-sidebar -->

		<!-- footer -->
		<?php $this->load->view('layouts/footer')?>
		<!-- END footer -->

	</div>
	<!-- ./wrapper -->

	<!-- javascript -->
	<?php $this->load->view('layouts/javascript')?>
	<!-- END javascript -->
</body>
</html>