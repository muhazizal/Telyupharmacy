<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>TelyuPharmacy | Sign Up</title>
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/bootstrap/css/bootstrap.min.css'); ?>">
	<!-- External CSS -->
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/SignUp.css'); ?>">
</head>

<body>
	<div class="container-fluid-0">
		<div id="header" class="text-center">
			<p id="Telyu">Telyu<span id="pharmacy">Pharmacy</span></p>
		</div>
		<div class="row">
			<div class="col-lg-6" id="gambar1">

			</div>
			<img id="vector3" src="<?= base_url('assets/image/vector3.png'); ?>" alt=""> 
			<div class="col-lg-6">
				<img id="orang" src="<?= base_url('assets/image/dokter1.png'); ?>" alt="">	
				<img id="vector2" src="<?= base_url('assets/image/vector2.png'); ?>" alt="">

				<form class="form-container ">
					<div class="text-center">
						<h1 id="top">Get your medicine faster,</h1>
						<h1>Read health articles</h1>
						<span>Already have an TelyuPharmacy</span>
						<p>account <a href="" id="a">Click Here</a></p>
					</div>
					<div class="form-group">
						<label>Full name</label>
						<input type="email" class="form-control" id="email">
					</div>
					<div class="form-group">
						<label>Email</label>
						<input type="password" class="form-control" id="exampleInputPassword1">
					</div>
					<div class="form-group">
						<label>Phone mnumber</label>
						<input type="password" class="form-control" id="exampleInputPassword1">
					</div>
					<div class="form-group">
						<label>Password</label>
						<input type=" password" class="form-control" id="exampleInputPassword1">
					</div>
					<div class="text-center" id="footer">
						<button type="button" class="btn btn-info">Sign Up</button>
						<br>
						<span>By Registering, I agree</span>
						<p><a href="" id="a">Terms and Conditions </a>and<a id="a" href=""> Privacy Policy</a></p>
					</div>
				</form>
				
			</div>
		</div>
	</div>

	<!-- Bootstrap JS -->
	<script type="text/javascript" src="<?= base_url('assets/bootstrap/js/jquery-3.4.1.min.js') ?>"></script>
	<script type="text/javascript" src="<?= base_url('assets/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>
	<script type="text/javascript" src="<?= base_url('assets/bootstrap/js/bootstrap.min.js'); ?>"></script>
</body>
</html>
