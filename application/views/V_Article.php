<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>TelyuPharmacy | Article</title>
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
		integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<!-- External CSS -->
	<link rel="stylesheet" href="<?= base_url('assets/css/Article.css')?>">
	<link rel="stylesheet" href="<?= base_url('assets/css/jquery.nice-number.css')?>">
</head>

<body>
	<div class="container-fluid-0">
		<div class="container-fluid" id="section0">
			<nav class="navbar navbar-expand-lg navbar-light bg-light">
				<a class="navbar-brand" href="<?= site_url("Buyer") ?>">Telyu<span id="Pharmacy">Pharmacy</span></a>
				<button class="navbar-toggler" type="button" data-toggle="collapse"
					data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
					aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
					<ul class="navbar-nav">
						<li class="nav-item">
							<!-- Search Article Name -->
							<form action="<?= site_url('Article/searchArticleBuyer') ?>" method="GET" class="navbar-form">
								<div class="form-group input-group">
									<?php
										if (array_key_exists("title", $_GET)) {
									?>
										<input id="search" type="text" name="searchArticle" value="<?= $_GET["title"] ?>" 
										class="form-control" placeholder="<?= $_GET["title"] ?>">
									<?php
										} else {
									?>
										<input id="search" type="text" name="searchArticle" class="form-control" placeholder="Search">
									<?php } ?>
									<div class="input-group-btn">
										<button type="submit" id="icon" class="btn btn-outline-info">
											<i class="fa fa-search" aria-hidden="true"></i>
										</button>
									</div>
								</div>
							</form>
						</li>
						<li class="nav-item">
							<a class="nav-link" id="a-item" href="<?= site_url("Product") ?>">Product</a>
						</li>
						<li class="nav-item">
							<a style="border-bottom : 3px solid #4BC2C5" class="nav-link" id="a-item"
								href="<?= site_url("Article") ?>">Article</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" id="a-item" href="<?= site_url("Home/load_AboutUsLogin") ?>">About
								Us</a>
						</li>
					</ul>
				</div>
				<div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
					<form class="form-inline ">
						<a id="shoping" href="<?= site_url("./Cart") ?>"><i class="fa fa-shopping-cart"
								aria-hidden="true"></i></a>
						<div class="dropdown">
							<a class="dropdown" href="#" id="Profile-2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" 
								data-offset="10,20"><img src="<?= base_url('assets/uploads/profile/') . $buyer['image']; ?>"
								class="rounded-circle d-block top" />
							</a>

							<div class="dropdown-menu dropdown-menu-right" aria-labelledby="Profile-2">
								<img src="<?= base_url('assets/uploads/profile/') . $buyer['image'] ?>"
									class="rounded-circle d-block bot img-fluid" />
								<h3 class="text-center profile-title"><?= $buyer['name']; ?></h3>
								<h3 class="text-center profile-title"><?= $buyer['email']; ?></h3>
								<a type="button" class="btn btn-default mt-3 text-white text-center" 
									data-dismiss="modal" href="<?= site_url('Buyer/editProfile') ?>">Edit Profile
								</a>
								<a type="button" class="btn btn-default mt-3 text-white text-center" 
									data-dismiss="modal" data-toggle="modal" data-target="#ChangePassword">Change Password
								</a>
								<a type="button" href="<?= site_url('Auth/do_logout'); ?>" 
									class="btn btn-default mt-3 text-white text-center">Log Out
								</a>
							</div>
						</div>
					</form>
				</div>
			</nav>
		</div>

		<div class="container-fluid" id="section1">
			<?php foreach($data_article as $article) : ?>
			<div class="row text-left article">
				<div class="col-lg-3">
					<img id="article-photo" src="<?= base_url("assets/uploads/article/") . $article['image']; ?>" alt="" class="img-fluid">
				</div>
				<div class="col-lg-9">
					<h1 id="arttittle"><?php echo $article['title'] ?><h1>
					<h3 id="article"><?php echo $article['description'] ?></h3>
					<h2 id="category"><?php echo $article['category'] ?></h2>
					<a href="<?= site_url('Article/showDetailArticle/'.$article['id']); ?>" 
						class="btn btn-large btn-info mt-3 text-white">Read Article Detail
					</a>
				</div>
			</div>
			<?php endforeach;  ?>
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
									<input class="form-control" type="password" name="oldPassword" placeholder="Old Password" id="oldPassword"/>
									<?= form_error('oldPassword', '<p class="text-danger">', '</p>'); ?>
								</div>
								<div class="form-group">
									<span class="tittle">New Password</span>
									<input class="form-control" type="password" name="newPassword1" placeholder="New Password" id="newPassword1"/>
									<?= form_error('newPassword1', '<p class="text-danger">', '</p>'); ?>
								</div>
								<div class="form-group">
									<span class="tittle">Confrim New Password</span>
									<input class="form-control" type="password" name="newPassword2" placeholder="Confrim New Password" id="newPassword2"/>
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
								<a class="nav-link" id="copyright" href="<?= site_url("Buyer") ?>">Home</a>
							</li>
							<li>
								<a class="nav-link" id="copyright" href="<?= site_url("Product") ?>">Product</a>
							</li>
							<li>
								<a class="nav-link" id="copyright" href="<?= site_url("Article") ?>">Article</a>
							</li>
							<li>
								<a class="nav-link" id="copyright" href="<?= site_url("Home/load_AboutUsLogin") ?>">About
									Us</a>
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

	<script src="<?= base_url('assets/js/article.js'); ?>"></script>

</body>

</html>