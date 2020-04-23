<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>TelyuPharmacy | About Us</title>
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
		integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<!-- External CSS -->
	<link rel="stylesheet" href="<?= base_url('assets/css/AboutUs.css')?>">
</head>

<body>
	<div class="container-fluid-0">
		<div class="container-fluid" id="section0">
			<nav class="navbar navbar-expand-lg navbar-light bg-light">

				<div class="collapse navbar-collapse justify-content-start">
					<a class="navbar-brand" id="Telyu-navbar" href="<?= site_url('Home') ?>">Telyu<span
							id="Pharmacy-navbar">Pharmacy</span></a>
					<button class="navbar-toggler" type="button" data-toggle="collapse"
						data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
						aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>
				</div>

				<div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
					<ul class="navbar-nav" id="navbar2">
						<li class="nav-item">
							<a class="nav-link" id="a-item" href="<?= site_url('Product') ?>">Product</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" id="a-item" href="<?= site_url("Article") ?>">Article</a>
						</li>
						<li class="nav-item">
							<a style="border-bottom : 3px solid #4BC2C5" class="nav-link" id="a-item"
								href="<?= site_url('Home/load_AboutUs'); ?>">About Us</a>
						</li>
					</ul>
				</div>

				<div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
					<ul class="navbar-nav" id="navbar3">
						<li class="nav-item">
							<a class="nav-link" id="a-item" href="" data-toggle="modal" data-target="#loginmodal">Sign
								In</a>
						</li>
						<li class="nav-item" id="SignUp">
							<a class="nav-link" id="a-item" href="<?= site_url('Auth/do_signUp') ?>">Sign Up</a>
						</li>
					</ul>
				</div>
			</nav>
		</div>

		<div class="container-fluid" id="section1">
			<div class="col" id="tittle">About Us</div>
			<div class="row text-center" id="team">
				<!-- Jquery JSON Team -->
			</div>
		</div>

		<div id="section2">
			<div class="row">
				<div id="margin" class="col-md-7">
					<div class="col" id="tittle">FAQ</div>
					<table id="faq-table" class="table table-borderless">
						<!-- Jquery JSON FAQ -->
					</table>
				</div>
				<div class="col-md-4">
					<img id="orang" src="<?= base_url('assets/image/AboutUs.svg') ?>" alt="">
				</div>
			</div>
		</div>

		<!-- secction5 -->
		<div class="container-fluid" id="section5">
			<div class="container-fluid" id="section5-1">
				<div class="row">
					<div class="col-md-4">
						<span id="Telyu">Telyu</span>
						<span id="Pharmacy">Pharmacy</span>
						<br>
						<span id="create">Creating Your healty,</span>
						<br>
						<span id="create">For Your Future</span>
						<br>
						<br>
						<br>
						<br>
						<br>
						<p id="copyright">2020 TelyuPharmacy. All Rights Reserved</p>
					</div>
					<div class="col-md-2">
						<ul class="navbar-nav">
							<li id="section5-li">
								<span id="section5-header">Explore</span>
							</li>
							<li>
								<a class="nav-link" id="copyright" href="<?= site_url("Home") ?>">Home</a>
							</li>
							<li>
								<a class="nav-link" id="copyright" href="<?= site_url("Product") ?>">Product</a>
							</li>
							<li>
								<a class="nav-link" id="copyright" href="<?= site_url("Article") ?>">Article</a>
							</li>
							<li>
								<a class="nav-link" id="copyright" href="#">About Us</a>
							</li>
						</ul>
					</div>
					<div class="col-md-4">
						<ul class="navbar-nav">
							<li id="section5-2-li">
								<span id="section5-header">Visit</span>
							<li>
							<li> <span id="copyright">TelyuPharmacy</span>
								<span id="copyright">Jl Telekomunikasi, Sukapura, Kec.Dayeuhklot,</span>
								<span id="copyright">Bandung, Jawa Barat</span><br>
								<span id="copyright">40257</span>
							</li>
							<li>
								<a id="section5-header">New Business</a>
							</li>
							<li>
								<span id="copyright">telyupharmacy@gmail.com</span><br>
								<span id="copyright">+62 227 565 930</span>
							</li>
						</ul>
					</div>
					<div class="col-md-2">
						<ul class="navbar-nav">
							<li id="section5-li">
								<span id="section5-header">Follow</span>
							</li>
							<li>
								<a class="nav-link" id="copyright" href="#">Instagram</a>
							</li>
							<li>
								<a class="nav-link" id="copyright" href="#">Facebook</a>
							</li>
							<li>
								<a class="nav-link" id="copyright" href="#">Twitter</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>

		<!-- Sign In Modal -->
		<div class="container" id="SignIn">
			<div class="row justify-content-center">
				<div class="modal fade justify-content-center" id="loginmodal" role="dialog">
					<div class="modal-dialog bg-modal">
						<div class="modal-content text-center">
							<h5 id="tittle-sign">Sign In</h5>
							<h4 id="Telyu">Telyu<span>Pharmacy</span></h4>

							<form action="<?= site_url('Auth') ?>" method="post">
								<div class="form-group text-center">
									<input class="form-control" type="text" name="username"
										value="<?= set_value('username'); ?>" placeholder="Username" />
									<?= form_error('username', '<p class="text-danger">', '</p>'); ?>
									<input class="form-control" type="password" name="password"
										placeholder="Password" />
									<?= form_error('password', '<p class="text-danger">', '</p>'); ?>
								</div>
								<div class="form-group">
									<button type="submit" class="btn btn-info" id="btn-Sign-In">Sign In</button>
									<p id="forgot">Don't have account?
										<a href="<?= site_url('Auth/do_SignUp'); ?>" id="click">Sign Up Here</a>
									</p>
								</div>
							</form>

							<button style="margin-left : 14%" type="submit" class="btn text-center" id="btn-close-modal" data-dismiss="modal">Close</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
		integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
	</script>
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
		integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
	</script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
		integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
	</script>
	<script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.min.js"></script>

	<!-- Load JSON -->
	<script src="<?= base_url('assets/js/team.js')?>"></script>
	<script src="<?= base_url('assets/js/faq.js')?>"></script>
</body>

</html>
