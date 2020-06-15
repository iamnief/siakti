<!DOCTYPE html>
<html lang="en">

<head>
	<title><?php echo $main['title']; ?></title>
	<?php
	$this->load->view('absensi/head');
	if (isset($main['jshead'])) echo $main['jshead'];
	?>
</head>

<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed">
	<div class="wrapper">

		<!-- Navbar -->
		<nav class="main-header navbar navbar-expand navbar-white navbar-light">
			<?php $this->load->view('absensi/navbar'); ?>
		</nav>

		<!-- Main Sidebar Container -->
		<aside class="main-sidebar sidebar-dark-primary elevation-4">
			<?php $this->load->view('absensi/sidebar', $main); ?>
		</aside>

		<!-- Content Wrapper. Contains page content -->
		<div class="content-wrapper">
			<!-- pages -->
			<?php echo $main['pages']; ?>
			<!-- END pages -->
		</div>
		<!-- /.content-wrapper -->

		<!-- Control Sidebar -->
		<aside class="control-sidebar control-sidebar-dark">
			<!-- Control sidebar content goes here -->
		</aside>
		<!-- /.control-sidebar -->

		<!-- footer -->
		<?php
		$this->load->view('absensi/footer');
		if (isset($main['jsbottom'])) echo $main['jsbottom'];
		?>
		<!-- END footer -->
	</div>
	<!-- ./wrapper -->

	<!-- javascript -->
	<?php $this->load->view('absensi/javascript'); ?>
	<!-- END javascript -->

</body>

</html>