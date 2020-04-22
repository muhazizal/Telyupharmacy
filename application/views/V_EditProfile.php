<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>TelyuPharmacy | Edit Profile</title>
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
		integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<!-- External CSS -->
	<link rel="stylesheet" href="<?= base_url('assets/css/Profile.css')?>">
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
							<a class="nav-link" id="a-item" href="<?= site_url('Product'); ?>">Product</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" id="a-item" href="<?= site_url('Article'); ?>">Article</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" id="a-item" href="<?= site_url('Home/load_AboutUsLogin'); ?>">About
								Us</a>
						</li>
					</ul>
				</div>
				<div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
					<form class="form-inline ">
						<a href="<?= site_url('Cart'); ?>"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
						<div class="dropdown">
							<a class="dropdown" href="#" id="Profile-2" data-toggle="dropdown" aria-haspopup="true"
								aria-expanded="false" data-offset="10,20"><img
									src="<?= base_url('assets/image/kirito.jpg') ?>"
									class="rounded-circle d-block top" /></a>

							<div class="dropdown-menu dropdown-menu-right" aria-labelledby="Profile-2">
								<form action="">
									<img src="<?= base_url('') ?>" class="rounded-circle d-block bot" />
									<h3 class="text-center profile-title">MaulGanteng</h3>
									<h3 class="text-center profile-title">MaulGanteng@gmail.com</h3>
									<a type="button" class="btn btn-default" data-dismiss="modal">Edit Profile</a>
									<a type="button" class="btn btn-default" data-dismiss="modal">Change Password</a>
									<a type="button" href="<?= site_url('Auth/do_logout'); ?>"
										class="btn btn-default">Log Out</a>
								</form>
							</div>
						</div>
					</form>
				</div>
			</nav>
		</div>

		<div class="container" id="section1">
			<div class="row">
				<div class="col-md-4">
					<a href=""><img src="<?= base_url('assets/image/kirito.jpg') ?>"
						class="rounded-circle d-block" /></a>
				</div>
				<div class="col-md-1"></div>
				<div class="col-md-7 tittle">
					<span id="tittle">Maul Ganteng</span>	
				</div>
			</div>
			<form class="form-container">
				<div class="form-group row">
					<div class="col-lg-2"></div>
					<label for="inputName" class="col-lg-2">Name:</label>
					<div class="col-lg-7">
					<input type="text" class="form-control" id="inputName" placeholder="Name">
					</div>
					<div class="col-lg-1"></div>
				</div>

				<div class="form-group row">
					<div class="col-lg-2"></div>
					<label for="inputName" class="col-lg-2">Username:</label>
					<div class="col-lg-7">
					<input type="text" class="form-control" id="inputName" placeholder="Username">
					</div>
					<div class="col-lg-1"></div>
				</div>

				<div class="form-group row">
					<div class="col-lg-2"></div>
					<label for="inputName" class="col-lg-2">Email:</label>
					<div class="col-lg-7">
					<input type="text" class="form-control" id="inputName" placeholder="Email">
					</div>
					<div class="col-lg-1"></div>
				</div>

				<div class="form-group row">
					<div class="col-lg-4"></div>
					<div class="col-lg-3">
						<button type="button" class="btn btn-info">Submit</button>
					</div>
					<div class="col-lg-3">
						<button type="button" class="btn btn-danger">Delete Account</button>
					</div>
				</div>
					
			</form>
		</div>

		
		<img id="vector6" src="<?= base_url('assets/image/Vector6.png') ?>" alt="">
		<img id="vector7" src="<?= base_url('assets/image/Vector7.png') ?>" alt="">
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
