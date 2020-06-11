<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- <link rel="icon" href="../../../../favicon.ico"> -->

	<title>Login</title>

	<!-- Bootstrap core CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
		integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	<!-- css buatan sendiri -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>/assets/dist/css/login.css">
</head>

<body class="text-center">
	<form class="form-signin" method="POST" action=<?php echo site_url('login/signin'); ?> >
		<img class="mb-4" src="<?php echo base_url(); ?>assets/dist/img/logopnj.png" alt="" width="72" height="72">
		<h1 class="h3 mb-3 font-weight-normal">Login</h1>
		<label for="inputEmail" class="sr-only">Username</label>
		<input name="username" type="text" id="username" class="form-control" placeholder="Username" required autofocus>
		<label for="inputPassword" class="sr-only">Password</label>
		<input name="password" type="password" id="password" class="form-control" placeholder="Password" required>
		<div class="checkbox mb-3">
			<label>
				<input type="checkbox" value="remember-me"> Ingat saya
			</label>
		</div>
		<button class="btn btn-lg btn-primary btn-block" type="submit">Masuk</button>
		<p class="mt-5 mb-3 text-muted">Copyright &copy; 2020 Jurusan TIK. All rights reserved.</p>
	</form>
</body>

</html>
