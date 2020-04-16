<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>TelyuPharmacy | Sign Up</title>
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<!-- External CSS -->
	<link rel="stylesheet" href="<?= base_url('assets/css/SignUp.css') ?>">
</head>

<body>
	<div class="container-fluid">
		<div id="header" class="text-center">
			<a class="navbar-brand" id="Telyu-navbar" href="<?= site_url('Home') ?>">
				Telyu<span id="Pharmacy-navbar">Pharmacy</span>
			</a>
		</div>
		<div class="row">

			<div class="col-md-6">
				<img id="orang" src="<?= base_url('assets/image/Dokter2.png') ?>" alt="">
				<img id="vector1" src="<?= base_url('assets/image/Vector1_SignUp.png') ?>" alt="">
			</div>

			<div class="col-6">
				<img id="vector2" src="<?= base_url('assets/image/Vector2_SignUp.png') ?>" alt="">

				<form action="<?= site_url('Auth/do_signUp') ?>" method="post" class="form-container ">
					<div class="text-center">
						<h1 id="top">Get your medicine faster,</h1>
						<h1>Read health articles</h1>
						<span>Already have an TelyuPharmacy</span>
						<p>account <a href="<?= site_url('Home') ?>" id="a">Click Here</a></p>
					</div>

					<div class="form-group">
						<label>Username</label>
						<input type="text" name="username" value="<?= set_value('username'); ?>" class="form-control">
						<p><?= form_error('username', '<p class="text-danger">', '</p>'); ?></p>
					</div>
					<div class="form-group">
						<label>Email</label>
						<input type="email" name="email" value="<?= set_value('email'); ?>" class="form-control">
						<p><?= form_error('email', '<p class="text-danger">', '</p>'); ?></p>
					</div>
					<div class="form-group">
						<label>Password</label>
						<input type="password" name="password1"	class="form-control">
						<p><?= form_error('password1', '<p class="text-danger">', '</p>'); ?></p>
					</div>
					<div class="form-group">
						<label>Repeat Password</label>
						<input type="password" name="password2" class="form-control">
						<p><?= form_error('password2', '<p class="text-danger">', '</p>'); ?></p>
					</div>
					<div class="text-center" id="footer">
						<button type="submit" name="btn_SignUp" class="btn btn-primary">Sign Up</button>
						<br>
						<span>By Registering, I agree</span>
						<p><a href="" id="a">Terms and Conditions </a>and<a id="a" href=""> Privacy Policy</a></p>
					</div>
				</form>

			</div>
		</div>
	</div>

	<!-- Bootstrap JS -->
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
	</script>
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
	</script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
	</script>
</body>

</html>