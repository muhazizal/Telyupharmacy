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
	<div class="container-fluid-0" id="section0">
		<div class="container-fluid">
			<nav class="navbar navbar-expand-lg navbar-light bg-light">
				<a class="navbar-brand" id="Telyu-navbar" href="<?= site_url('./Home') ?>">Telyu<span id="Pharmacy-navbar">Pharmacy</span></a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse justify-content-center " id="navbarSupportedContent">
					<ul class="navbar-nav" id="navbar2">
						<li class="nav-item">
							<a class="nav-link" id="a-item" href="<?= base_url("") ?>">Product</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" id="a-item" href="<?= base_url("") ?>">Article</a>
						</li>
					</ul>
				</div>
				<div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
					<ul class="navbar-nav" id="navbar3">
						<li class="nav-item">
							<a class="nav-link" id="a-item" href="<?= base_url("") ?>" data-toggle="modal" data-target="#loginmodal">Sign
								In</a>
						</li>
						<li class="nav-item" id="SignUp">
							<a class="nav-link" id="a-item" href="<?= site_url('./SignUp') ?>">Sign Up</a>
						</li>
					</ul>
				</div>
			</nav>
		</div>

		<!-- Flashdata -->
		<?php if ($this->session->flashdata('flash_success')) : ?>
    <div class="row">
			<div class="col-lg-12 text-center">
				<div class="alert alert-success alert-dismissible fade show" role="alert">
					<strong><?= $this->session->flashdata('flash_success'); ?></strong>
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
			</div>
    </div>
    <?php endif; ?>

		<!-- section1 -->
		<div class="container-fluid" id="section1">
			<div class="row">
				<div class="col-lg-6">
					<h2>Lorem ipsum dolor sit amet, consectetur adipiscieng elit</h2>
					<p id="tittle-section1">Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae qui
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
					<span id="Tittle">Best Seller</span>
					<button type="button" class="btn btn-info">Lihat Semua</button>
				</div>
				<div class="row" id="row1">
					<div class="col-md-3" id="col-section-3">
						<div class="card">
							<img src="<?= base_url('assets/image/kirito.jpg') ?>" alt="" class="img-fluid">
							<div class="card-block">
								<div class="card-title">
									<h5><a id="label-section-3">Mylanta</a></h5>
								</div>
								<div class="card-text">
									<div class="harga">Rp</div>
									<div class="rating">rating</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-3" id="col-section-3">
						<div class="card">
							<img src="<?= base_url('assets/image/kirito.jpg') ?>" alt="" class="img-fluid">
							<div class="card-block">
								<div class="card-title">
									<h5>Mylanta</h5>
								</div>
								<div class="card-text">
									<div class="harga">Rp</div>
									<div class="rating">rating</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-3" id="col-section-3">
						<div class="card">
							<img src="<?= base_url('assets/image/kirito.jpg') ?>" alt="" class="img-fluid">
							<div class="card-block">
								<div class="card-title">
									<h5>Mylanta</h5>
								</div>
								<div class="card-text">
									<div class="harga">Rp</div>
									<div class="rating">rating</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-3" id="col-section-3">
						<div class="card">
							<img src="<?= base_url('assets/image/kirito.jpg') ?>" alt="" class="img-fluid">
							<div class="card-block">
								<div class="card-title">
									<h5>Mylanta</h5>
								</div>
								<div class="card-text">
									<div class="harga">Rp</div>
									<div class="rating">rating</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row" id="row2">
					<div class="col-md-3" id="col-section-3">
						<div class="card">
							<img src="<?= base_url('assets/image/kirito.jpg') ?>" alt="" class="img-fluid">
							<div class="card-block">
								<div class="card-title">
									<h5>Mylanta</h5>
								</div>
								<div class="card-text">
									<div class="harga">Rp</div>
									<div class="rating">rating</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-3" id="col-section-3">
						<div class="card">
							<img src="<?= base_url('assets/image/kirito.jpg') ?>" alt="" class="img-fluid">
							<div class="card-block">
								<div class="card-title">
									<h5>Mylanta</h5>
								</div>
								<div class="card-text">
									<div class="harga">Rp</div>
									<div class="rating">rating</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-3" id="col-section-3">
						<div class="card">
							<img src="<?= base_url('assets/image/kirito.jpg') ?>" alt="" class="img-fluid">
							<div class="card-block">
								<div class="card-title">
									<h5>Mylanta</h5>
								</div>
								<div class="card-text">
									<div class="harga">Rp</div>
									<div class="rating">rating</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-3" id="col-section-3">
						<div class="card">
							<img src="<?= base_url('assets/image/kirito.jpg') ?>" alt="" class="img-fluid">
							<div class="card-block">
								<div class="card-title">
									<h5>Mylanta</h5>
								</div>
								<div class="card-text">
									<div class="harga">Rp</div>
									<div class="rating">rating</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- section4 -->
		<div class="container" id="section4">
			<h3 class="text-center">Article</h3>
			<div class="row" id="row2">
				<div class="col-md-3">
					<div class="card" id="card-section-4">
						<img src="<?= base_url('assets/image/kirito.jpg') ?>" alt="" class="img-fluid">
						<div class="card-block" id="body-title">
							<div class="card-title" id="card-title-section4">
								<h5>Mylanta</h5>
							</div>
							<div class="card-text" id="text-section-4">
								Lorem ipsum, dolor sit amet consectetur adipisicing elit.
								Lorem ipsum, dolor sit amet consectetur adipisicing elit.
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-3">
					<div class="card" id="card-section-4">
						<img src="<?= base_url('assets/image/kirito.jpg') ?>" alt="" class="img-fluid">
						<div class="card-block" id="body-title">
							<div class="card-title">
								<h5>Mylanta</h5>
							</div>
							<div class="card-text" id="text-section-4">
								Lorem ipsum, dolor sit amet consectetur adipisicing elit.
								Lorem ipsum, dolor sit amet consectetur adipisicing elit.
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-3">
					<div class="card" id="card-section-4">
						<img src="<?= base_url('assets/image/kirito.jpg') ?>" alt="" class="img-fluid">
						<div class="card-block" id="body-title">
							<div class="card-title">
								<h5>Mylanta</h5>
							</div>
							<div class="card-text" id="text-section-4">
								Lorem ipsum, dolor sit amet consectetur adipisicing elit.
								Lorem ipsum, dolor sit amet consectetur adipisicing elit.
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-3">
					<div class="card" id="card-section-4">
						<img src="<?= base_url('assets/image/kirito.jpg') ?>" alt="" class="img-fluid">
						<div class="card-block" id="body-title">
							<div class="card-title">
								<h5>Mylanta</h5>
							</div>
							<div class="card-text" id="text-section-4">
								Lorem ipsum, dolor sit amet consectetur adipisicing elit.
								Lorem ipsum, dolor sit amet consectetur adipisicing elit.
							</div>
						</div>
					</div>
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
						<span id="create">For Yout Future</span>
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
								<a class="nav-link" id="copyright" href="<?= base_url("") ?>">Home</a>
							</li>
							<li>
								<a class="nav-link" id="copyright" href="<?= base_url("") ?>">Product</a>
							</li>
							<li>
								<a class="nav-link" id="copyright" href="<?= base_url("") ?>">Article</a>
							</li>
							<li>
								<a class="nav-link" id="copyright" href="<?= base_url("") ?>">About Us</a>
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
								<a class="nav-link" id="copyright" href="<?= base_url("") ?>">Instagram</a>
							</li>
							<li>
								<a class="nav-link" id="copyright" href="<?= base_url("") ?>">Facebook</a>
							</li>
							<li>
								<a class="nav-link" id="copyright" href="<?= base_url("") ?>">Twitter</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>

		<!-- Sign In -->
		<div class="container" id="SignIn">
			<div class="row justify-content-center">
				<div class="modal fade justify-content-center" id="loginmodal" role="dialog">
					<div class="modal-dialog bg-modal">
						<div class="modal-content text-center">
							<h5 id="tittle-sign">Sign In</h5>
							<h4 id="Telyu">Telyu<span>Pharmacy</span></h4>
							<div class="form-group">
								<input class="form-control" type="text" placeholder="Username/E-mail" />
								<input class="form-control" type="password" placeholder="Password" />
							</div>
							<p id="forgot">Forgot the password? <a href="#" id="click">Click Here</a></p>
							<button type="button" class="btn btn-info" id="btn-Sign-In">Sign In</button>
							<p id="forgot">Don't have account? <a href="<?= site_url('./SignUp'); ?>" id="click">Sign Up Here</a>
							</p>
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