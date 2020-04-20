<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>TelyuPharmacy | AdminArticle</title>
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
				<a class="navbar-brand" href="<?= base_url("") ?>">Telyu<span id="Pharmacy">Pharmacy</span></a>
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
							<a class="nav-link" id="a-item" href="<?= base_url("./Product") ?>">Product</a>
						</li>
						<li class="nav-item">
							<a style="border-bottom : 3px solid #4BC2C5" class="nav-link" id="a-item"
								href="<?= base_url("./Article") ?>">Article</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" id="a-item" href="<?= base_url("./AboutUs") ?>">About Us</a>
						</li>
					</ul>
				</div>
				<div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
					<!-- <form class="form-inline "> -->
					<a id="shoping" href="<?= base_url("./Cart") ?>"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
					<a href=""><img src="<?= base_url('assets/image/kirito.jpg') ?>"
							class="rounded-circle d-block" /></a>
					<!-- </form> -->
				</div>
			</nav>
		</div>

		<div class="container-fluid" id="section1">
			<div class="row text-left article">
				<div class="col-lg-3">
					<img id="article-photo" src="<?= base_url("assets/image/kirito.jpg")?>" alt="" class="img-fluid">
				</div>
				<div class="col-lg-9">
					<h1 id="arttittle">Article Topik #1<h1>
							<h3 id="article">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
								Vulputate faucibus.</h3>
								<h3 id="article">sit amet, consectetur volutpat. Vulputate egestas
								at rhoncus quis eget cras</h3>
							<h2 id="category">category1</h2>
				</div>
			</div>
			<div class="row text-left article">
				<div class="col-lg-3">
					<img id="article-photo" src="<?= base_url("assets/image/kirito.jpg")?>" alt="" class="img-fluid">
				</div>
				<div class="col-lg-9">
					<h1 id="arttittle">Article Topik #1<h1>
							<h3 id="article">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
								Vulputate faucibus.</h3>
								<h3 id="article">sit amet, consectetur volutpat. Vulputate egestas
								at rhoncus quis eget cras</h3>
							<h2 id="category">category1</h2>
				</div>
			</div>
			<div class="row text-left article">
				<div class="col-lg-3">
					<img id="article-photo" src="<?= base_url("assets/image/kirito.jpg")?>" alt="" class="img-fluid">
				</div>
				<div class="col-lg-9">
					<h1 id="arttittle">Article Topik #1<h1>
							<h3 id="article">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
								Vulputate faucibus.</h3>
								<h3 id="article">sit amet, consectetur volutpat. Vulputate egestas
								at rhoncus quis eget cras</h3>
							<h2 id="category">category1</h2>
				</div>
			</div>
			<div class="row text-left article">
				<div class="col-lg-3">
					<img id="article-photo" src="<?= base_url("assets/image/kirito.jpg")?>" alt="" class="img-fluid">
				</div>
				<div class="col-lg-9">
					<h1 id="arttittle">Article Topik #1<h1>
							<h3 id="article">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
								Vulputate faucibus.</h3>
								<h3 id="article">sit amet, consectetur volutpat. Vulputate egestas
								at rhoncus quis eget cras</h3>
							<h2 id="category">category1</h2>
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
							<a class="nav-link" id="copyright" href="<?= site_url("") ?>">Home</a>
						</li>
						<li>
							<a class="nav-link" id="copyright" href="<?= site_url("") ?>">Product</a>
						</li>
						<li>
							<a class="nav-link" id="copyright" href="<?= site_url("") ?>">Article</a>
						</li>
						<li>
							<a class="nav-link" id="copyright" href="<?= site_url("") ?>">About Us</a>
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
							<a class="nav-link" id="copyright" href="<?= site_url("") ?>">Instagram</a>
						</li>
						<li>
							<a class="nav-link" id="copyright" href="<?= site_url("") ?>">Facebook</a>
						</li>
						<li>
							<a class="nav-link" id="copyright" href="<?= site_url("") ?>">Twitter</a>
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
</body>

</html>
