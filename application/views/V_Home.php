<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>TelyuPharmacy | Home</title>
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<!-- External CSS -->
	<link rel="stylesheet" href="<?= base_url('assets/css/Home.css') ?>">
</head>

<body>
	<div class="container-fluid-0">
		<div class="container-fluid" id="section0">
			<nav class="navbar navbar-expand-lg navbar-light bg-light">

				<div class="collapse navbar-collapse justify-content-start">
					<a class="navbar-brand" id="Telyu-navbar" href="<?= site_url('Home') ?>">Telyu<span id="Pharmacy-navbar">Pharmacy</span></a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
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

		<!-- Flashdata -->
		<?php if ($this->session->flashdata('signUp_success')) { ?>
    <div class="row">
			<div class="col-lg-12 text-center">
				<div class="alert alert-success alert-dismissible fade show" id="success-alert" role="alert">
					<strong><?= $this->session->flashdata('signUp_success'); ?></strong>
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
			</div>
    </div>
		<?php } else if ($this->session->flashdata('signIn_failed')) { ?>
		<div class="row">
			<div class="col-lg-12 text-center">
				<div class="alert alert-danger alert-dismissible fade show" id="success-alert" role="alert">
					<strong><?= $this->session->flashdata('signIn_failed'); ?></strong>
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
			</div>
		</div>
		<?php } else if ($this->session->flashdata('logout')) { ?>
		<div class="row">
			<div class="col-lg-12 text-center">
				<div class="alert alert-success alert-dismissible fade show" id="success-alert" role="alert">
					<strong><?= $this->session->flashdata('logout'); ?></strong>
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
			</div>
		</div>
		<?php } else if ($this->session->flashdata('signInFirst')) { ?>
		<div class="row">
			<div class="col-lg-12 text-center">
				<div class="alert alert-danger alert-dismissible fade show" id="success-alert" role="alert">
					<strong><?= $this->session->flashdata('signInFirst'); ?></strong>
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
			</div>
		</div>
		<?php } ?>

		<!-- section1 -->
		<div class="container-fluid" id="section1">
			<div class="row">
				<div class="col-lg-6">
					<h2 id="tittle-section1-1">Lorem ipsum dolor sit amet, consectetur adipiscieng elit</h2>
					<p id="tittle-section1-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae qui
						repellendus voluptates
						rerum
						ea
						ducimus reiciendis nisi quae perspiciatis quas inventore architecto, iste commodi dignissimos
						nostrum
						dolorum placeat libero vel.
				</div>
				<div class="col-lg-6">
					<img id="orang" src="<?= base_url('assets/image/Dokter1.png') ?>" alt="">
				</div>
				<img id="vector1" src="<?= base_url('assets/image/Vector1_Home.png') ?>" alt="">
			</div>
		</div>

		<!-- section2 -->
		<div class=" container-fluid" id="section2">
			<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
				<ol class="carousel-indicators">
					<li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
					<li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
				</ol>
				<div class="carousel-inner">
					<div class="carousel-item active">
						<img src="<?= base_url('assets/image/pohon1.jpg') ?>" class="d-block w-100" alt="...">
						<div class="carousel-caption d-none d-md-block">
							<h5>First slide label</h5>
							<p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
						</div>
					</div>
					<div class="carousel-item">
						<img src="<?= base_url('assets/image/pohon2.jpg') ?>" class="d-block w-100" alt="...">
						<div class="carousel-caption d-none d-md-block">
							<h5>Second slide label</h5>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
						</div>
					</div>
				</div>
				<a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a>
			</div>
		</div>

		<!-- section3 -->
		<div class="container-fluid" id="section3">
			<div class="container" id="section3-1">
				<div id="header">
					<span id="Tittle">Product</span>
					<a href="<?= site_url('Product'); ?>" class="btn btn-info">Lihat Semua</a>
				</div>

				<!-- Show all product -->
				<div class="row" id="row1">	
					<?php
						$i = 0;
						foreach ($products as $row) {
					?>
					<div class="col-md-3" id="col-section-3">
						<div class="card">
							<img src="<?= base_url('assets/image/') . $row['image'] ?>" alt="" class="img-fluid">
							<div class="card-block">
								<div class="card-title">
									<h5><a id="label-section-3"><?= $row['name'] ?></a></h5>
								</div>
								<div class="card-text">
									<div class="harga">Rp <?= $row['price'] ?></div>
								</div>
							</div>
						</div>
					</div>
					<?php 
						$i += 1;
						if ($i == 8) {
							break;
						}
					} 
					?>
				</div>

			</div>
		</div>

		<!-- section4 -->
		<div class="container" id="section4">
			<h3 class="text-center">Article</h3>

			<!-- Show all article -->
			<div class="row" id="row2">
				<?php
					$i = 0;
					foreach ($articles as $row) {
				?>
				<div class="col-md-3">
					<div class="card" id="card-section-4">
						<img src="<?= base_url('assets/image/') . $row['image']; ?>" alt="" class="img-fluid">
						<div class="card-block" id="body-title">
							<div class="card-title" id="card-title-section4">
								<h5><?= $row['title']; ?></h5>
							</div>
							<div class="card-text" id="text-section-4">
								<?= $row['description']; ?>
							</div>
						</div>
					</div>
				</div>
				<?php
					$i += 1;
					if ($i == 8) {
						break;
					}
				}
				?>
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
								<a class="nav-link" id="copyright" href="<?= site_url("Home"); ?>">Home</a>
							</li>
							<li>
								<a class="nav-link" id="copyright" href="<?= site_url("Product"); ?>">Product</a>
							</li>
							<li>
								<a class="nav-link" id="copyright" href="<?= site_url("Article"); ?>">Article</a>
							</li>
							<li>
								<a class="nav-link" id="copyright" href="<?= site_url("Home/load_AboutUs"); ?>">About Us</a>
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

		<!-- Sign In Modal-->
		<div class="container" id="SignIn">
			<div class="row justify-content-center">
				<div class="modal fade justify-content-center" id="loginmodal" role="dialog">
					<div class="modal-dialog bg-modal">
						<div class="modal-content text-center">
							<h5 id="tittle-sign">Sign In</h5>
							<h4 id="Telyu">Telyu<span>Pharmacy</span></h4>

							<form action="<?= site_url('Auth') ?>" method="post">
								<div class="form-group">
									<input class="form-control" type="text" name="username" 
										value="<?= set_value('username'); ?>" placeholder="Username"
									/>
									<?= form_error('username', '<p class="text-danger">', '</p>'); ?>
									<input class="form-control" type="password" name="password" placeholder="Password" />
									<?= form_error('password', '<p class="text-danger">', '</p>'); ?>
								</div>
								<div class="form-group">
									<p id="forgot">Forgot the password? <a href="#" id="click">Click Here</a></p>
									<button type="submit" class="btn btn-info" id="btn-Sign-In">Sign In</button>
									<p id="forgot">Don't have account? 
										<a href="<?= site_url('Auth/do_SignUp'); ?>" id="click">Sign Up Here</a>
									</p>
								</div>
							</form>

							<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						</div>
					</div>
				</div>
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