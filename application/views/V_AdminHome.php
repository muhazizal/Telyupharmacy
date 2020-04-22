<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>TelyuPharmacy | AdminProduct</title>
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
		integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<!-- External CSS -->
	<link rel="stylesheet" href="<?= base_url('assets/css/AdminHome.css')?>">
	<link rel="stylesheet" href="<?= base_url('assets/css/jquery.nice-number.css')?>">
</head>

<body>
	<div class="container-fluid-0">
		<div class="container-fluid" id="section0">
			<nav class="navbar navbar-expand-lg navbar-light bg-light">
				<a class="navbar-brand" href="<?= site_url('Admin'); ?>">Telyu<span id="Pharmacy">Pharmacy</span></a>
				<button class="navbar-toggler" type="button" data-toggle="collapse"
					data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
					aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
					<ul class="navbar-nav">
						<li class="nav-item">
							<a class="nav-link" id="a-item" href="<?= site_url("Product/load_AdminProduct") ?>">Product</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" id="a-item" href="<?= site_url("Article/load_AdminArticle") ?>">Article</a>
						</li>
					</ul>
				</div>
				<div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
					<form class="form-inline ">
					<div class="dropdown">
							<a class="dropdown" href="#" id="Profile-2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-offset="10,20"><img src="<?= base_url('assets/image/kirito.jpg') ?>"
								class="rounded-circle d-block top" /></a>

							<div class="dropdown-menu dropdown-menu-right" aria-labelledby="Profile-2">
								<form action="">
									<img src="<?= base_url('') ?>"
										class="rounded-circle d-block bot" />
									<h3 class="text-center profile-title">Nama Admin</h3>
									<h3 class="text-center profile-title">Id Admin</h3>
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
		<?php if ($this->session->flashdata('signOutFirst')) { ?>
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
		<?php } else if ($this->session->flashdata('notBuyer')) { ?>
    <div class="row">
			<div class="col-lg-12 text-center">
				<div class="alert alert-danger alert-dismissible fade show" id="success-alert" role="alert">
					<strong><?= $this->session->flashdata('notBuyer'); ?></strong>
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
			</div>
    </div>
		<?php } ?>

		<div class="container-fluid text-center" id="section1">
			<div class="row">
				<div class="col-md-12" id="welcome">
					<h3 id="tittle-section1-1">Halo Maol Bucin,</h3>
					<h2 id="tittle-section1-2">Selamat Datang di Dashboard Admin!</h2>    
				</div>  
			</div>
		</div>
		<img id="vector5" src="<?= base_url('assets/image/vector 5.png') ?>" alt="">
		<img id="vector4" src="<?= base_url('assets/image/vector 4.png') ?>" alt="">
		<img id="kartun" src="<?= base_url('assets/image/Rectangle 111.png') ?>" alt=""> 
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
</body>

</html>
