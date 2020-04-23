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
	<link rel="stylesheet" href="<?= base_url('assets/css/EditProfile.css')?>">
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
									src="<?= base_url('assets/uploads/profile/') . $buyer['image']; ?>"
									class="rounded-circle d-block top" />
							</a>

							<div class="dropdown-menu dropdown-menu-right" aria-labelledby="Profile-2">
								<form action="">
									<img src="<?= base_url('assets/uploads/profile/') . $buyer['image']; ?>"
										class="rounded-circle d-block bot" />
									<h3 class="text-center profile-title"><?= $buyer['name']; ?></h3>
									<h3 class="text-center profile-title"><?= $buyer['email']; ?></h3>
									<a type="button" class="btn btn-default mt-3 text-white text-center"
										data-dismiss="modal" href="<?= site_url('Buyer/editProfile') ?>">Edit Profile
									</a>
									<a type="button" class="btn btn-default mt-3 text-white text-center"
										data-dismiss="modal" data-toggle="modal" data-target="#ChangePassword">Change
										Password
									</a>
									<a type="button" href="<?= site_url('Auth/do_logout'); ?>"
										class="btn btn-default mt-3 text-white text-center">Log Out
									</a>
								</form>
							</div>
						</div>
					</form>
				</div>
			</nav>
		</div>

		<!-- Flashdata -->
		<?php if ($this->session->flashdata('editSuccess')) { ?>
		<div class="row">
			<div class="col-lg-12 text-center">
				<div class="alert alert-success alert-dismissible fade show" id="success-alert" role="alert">
					<strong><?= $this->session->flashdata('editSuccess'); ?></strong>
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
			</div>
		</div>
		<?php } else if ($this->session->flashdata('deleteAccountFailed')) { ?>
		<div class="row">
			<div class="col-lg-12 text-center">
				<div class="alert alert-danger alert-dismissible fade show" id="success-alert" role="alert">
					<strong><?= $this->session->flashdata('deleteAccountFailed'); ?></strong>
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
			</div>
		</div>
		<?php } ?>

		<div class="container" id="section1">
			<div class="row">
				<div class="col-md-12 text-center mb-0">
					<p class="mb-0">Fill the form bellow to edit your profile, <?= $buyer['username'] ?></p>
				</div>
			</div>
			<form action="<?= site_url('Buyer/editProfile'); ?>" method="post" enctype="multipart/form-data"
				class="form-container">

				<div class="form-group row d-flex align-items-center">
					<div class="col-md-4">
						<img src="<?= base_url('assets/uploads/profile/') . $buyer['image']; ?>" class="rounded-circle d-block" />
					</div>
					<div class="custom-file col-md-5 ml-3">
						<input type="file" class="custom-file-input" id="customFile" name="image">
						<label class="custom-file-label" for="customFile">Choose file</label>
					</div>
				</div>

				<div class="form-group row">
					<div class="col-lg-2"></div>
					<label for="inputName" class="col-lg-2">Name:</label>
					<div class="col-lg-7">
						<input type="text" name="name" class="form-control" id="inputName"
							value="<?= $buyer['name']; ?>">
						<?= form_error('name', '<p class="text-danger">', '</p>'); ?>
					</div>
					<div class="col-lg-1"></div>
				</div>

				<div class="form-group row">
					<div class="col-lg-2"></div>
					<label for="inputName" class="col-lg-2">Username:</label>
					<div class="col-lg-7">
						<input type="text" name="username" class="form-control" id="inputName"
							value="<?= $buyer['username']; ?>">
						<?= form_error('username', '<p class="text-danger">', '</p>'); ?>
					</div>
					<div class="col-lg-1"></div>
				</div>

				<div class="form-group row">
					<div class="col-lg-2"></div>
					<label for="inputName" class="col-lg-2">Email:</label>
					<div class="col-lg-7">
						<input type="text" name="email" class="form-control" id="inputName"
							value="<?= $buyer['email']; ?>">
						<?= form_error('email', '<p class="text-danger">', '</p>'); ?>
					</div>
					<div class="col-lg-1"></div>
				</div>

				<div class="form-group row">
					<div class="col-lg-2"></div>
					<div class="col-lg-4">
						<button type="submit" class="btn btn-info">Submit</button>
					</div>
					<div class="col-lg-4">
						<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#DeleteAccount">Delete Account</>
					</div>
					<div class="col-lg-2"></div>
				</div>

			</form>
		</div>

		<!-- Change Password Modal-->
		<div class="container" id="Password">
			<div class="row justify-content-center">
				<div class="modal fade justify-content-center" id="ChangePassword" role="dialog">
					<div class="modal-dialog bg-modal">
						<div class="modal-content">
							<h5 id="tittle-password" class="text-center">Change Password</h5>
							<form action="<?= site_url('Buyer/changePassword') ?>" method="post">
								<div class="form-group">
									<span class="tittle">Old Password</span>
									<input class="form-control" type="password" name="oldPassword"
										placeholder="Old Password" id="oldPassword" />
									<?= form_error('oldPassword', '<p class="text-danger">', '</p>'); ?>
								</div>
								<div class="form-group">
									<span class="tittle">New Password</span>
									<input class="form-control" type="password" name="newPassword1"
										placeholder="New Password" id="newPassword1" />
									<?= form_error('newPassword1', '<p class="text-danger">', '</p>'); ?>
								</div>
								<div class="form-group">
									<span class="tittle">Confrim New Password</span>
									<input class="form-control" type="password" name="newPassword2"
										placeholder="Confrim New Password" id="newPassword2" />
								</div>
								<div class="form-group">
									<button type="submit" class="btn btn-info">Change Password</button>
									<button type="button" class="btn btn-outline-danger" data-dismiss="modal">Cancel</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>


		<!-- delete Account -->
		<div class="modal fade" id="DeleteAccount" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
			aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLabel">Delete Account</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						Are you sure to delete your account, <?= $buyer['username']; ?> ?
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
						<a type="button" href="<?= site_url('Buyer/deleteAccount/'.$buyer['id'])?>" class="btn btn-danger">Delete</a>
					</div>
				</div>
			</div>
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
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.min.js"></script>

	<script>
		$('.custom-file-input').on('change', () => {
			let filename = $(this).val().split('\\').pop();
			$(this).next('.custom-file-label').addClass("selected").html(filename);
		});

	</script>
</body>

</html>
