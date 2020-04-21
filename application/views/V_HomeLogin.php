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
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
		integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<!-- External CSS -->
	<link rel="stylesheet" href="<?= base_url('assets/css/HomeLogin.css') ?>">
</head>

<body>
	<div class="container-fluid-0">
		<div class="container-fluid" id="section0">
			<nav class="navbar navbar-expand-lg navbar-light bg-light">
				<a class="navbar-brand" href="<?= site_url('Buyer'); ?>">Telyu<span id="Pharmacy">Pharmacy</span></a>
				<button class="navbar-toggler" type="button" data-toggle="collapse"
					data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
					aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
					<ul class="navbar-nav">
						<li class="nav-item">
							<form action="" class="navbar-form">
								<div class="form-group input-group">
									<input id="search" type="text" class="form-control" placeholder="Search">
									<div class="input-group-btn">
										<button type="button" id="icon" class="btn btn-outline-info">
											<i class="fa fa-search" aria-hidden="true"></i>
										</button>
									</div>
								</div>
							</form>
						</li>
						<li class="nav-item">
							<a class="nav-link" id="a-item"
								href="<?= site_url('Product'); ?>">Product</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" id="a-item" href="<?= site_url('Article'); ?>">Article</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" id="a-item" href="<?= site_url('Home/load_AboutUsLogin'); ?>">About Us</a>
						</li>
					</ul>
				</div>
				<div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
					<form class="form-inline ">
						<a href="<?= site_url('Cart') ?>"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
						<div class="dropdown">
							<a class="dropdown" href="#" id="Profile-2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-offset="10,20"><img src="<?= base_url('assets/image/kirito.jpg') ?>"
								class="rounded-circle d-block top" /></a>

							<div class="dropdown-menu dropdown-menu-right" aria-labelledby="Profile-2">
								<form action="">
									<img src="<?= base_url('') ?>"
										class="rounded-circle d-block bot" />
									<h3 class="text-center profile-title">MaulGanteng</h3>
									<h3 class="text-center profile-title">MaulGanteng@gmail.com</h3>
									<a type="button" class="btn btn-default" data-dismiss="modal">Edit Profile</a>
									<a type="button" class="btn btn-default" data-dismiss="modal">Change Password</a>
									<a type="button" href="<?= site_url('Auth/do_logout'); ?>" class="btn btn-default">Log Out</a>
								</form>
							</div>	
						</div>
					</form>
				</div>
			</nav>
		</div>

		<!-- Flashdata -->
    <?php if ($this->session->flashdata('signIn_success')) { ?>
		<div class="row">
			<div class="col-lg-12 text-center">
				<div class="alert alert-success alert-dismissible fade show" id="success-alert" role="alert">
					<strong><?= $this->session->flashdata('signIn_success'); ?></strong>
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
			</div>
		</div>
		<?php } else if ($this->session->flashdata('signOutFirst')) { ?>
		<div class="row">
			<div class="col-lg-12 text-center">
				<div class="alert alert-danger alert-dismissible fade show" id="success-alert" role="alert">
					<strong><?= $this->session->flashdata('signOutFirst'); ?></strong>
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
			</div>
		</div>
		<?php } else if ($this->session->flashdata('notAdmin')) { ?>
		<div class="row">
			<div class="col-lg-12 text-center">
				<div class="alert alert-danger alert-dismissible fade show" id="success-alert" role="alert">
					<strong><?= $this->session->flashdata('notAdmin'); ?></strong>
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
					<span id="Tittle">Best Seller</span>
					<a href="<?= site_url('Product'); ?>" class="btn btn-info">Lihat Semua</a>
				</div>

				<div class="row" id="row1">	
					<?php 
						foreach ($product as $row) {
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
					<?php } ?>
				</div>

			</div>
		</div>

		<!-- section4 -->
		<div class="container" id="section4">
			<h3 class="text-center article">Article</h3>
			<!-- Show all article -->
			<div class="row" id="row2">
				<?php
					foreach ($article as $row) {
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
				<?php } ?>
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
								<a class="nav-link" id="copyright" href="<?= site_url("Buyer"); ?>">Home</a>
							</li>
							<li>
								<a class="nav-link" id="copyright" href="<?= site_url("Product"); ?>">Product</a>
							</li>
							<li>
								<a class="nav-link" id="copyright" href="<?= site_url("Article"); ?>">Article</a>
							</li>
							<li>
								<a class="nav-link" id="copyright" href="<?= site_url("Home/load_AboutUsLogin"); ?>">About Us</a>
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


	</div>

	<!-- Bootstrap JS -->
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
</body>

</html>
