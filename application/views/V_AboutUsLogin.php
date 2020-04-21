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
	<link rel="stylesheet" href="<?= base_url('assets/css/AboutUsLogin.css')?>">
	<link rel="stylesheet" href="<?= base_url('assets/css/jquery.nice-number.css')?>">
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
							<a style="border-bottom: 3px solid  #4BC2C5" class="nav-link" id="a-item" href="<?= site_url('Home/load_AboutUsLogin'); ?>">About Us</a>
						</li>
					</ul>
				</div>
				<div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
					<form class="form-inline ">
						<a href="<?= site_url('Cart') ?>"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
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


		<div class="container-fluid" id="section1">
			<div class="col" id="tittle">About Us</div>
			<div class="row text-center" id="team">
				<div class="card">
					<div class="card-body">
						<img id="team-photo" src="<?= base_url("assets/image/kirito.jpg")?>" alt=""
							class="img-fluid rounded-circle">
						<h3 id="nama">Naufal Harsa Pratama</h3>
						<h3 id="nim">1301180240</h3>
					</div>
				</div>

				<div class="card">
					<div class="card-body">
						<img id="team-photo" src="<?= base_url("assets/image/kirito.jpg")?>" alt=""
							class="img-fluid rounded-circle">
						<h3 id="nama">Naufal Harsa Pratama</h3>
						<h3 id="nim">1301180240</h3>
					</div>
				</div>

				<div class="card">
					<div class="card-body">
						<img id="team-photo" src="<?= base_url("assets/image/kirito.jpg")?>" alt=""
							class="img-fluid rounded-circle">
						<h3 id="nama">Naufal Harsa Pratama</h3>
						<h3 id="nim">1301180240</h3>
					</div>
				</div>

				<div class="card">
					<div class="card-body">
						<img id="team-photo" src="<?= base_url("assets/image/kirito.jpg")?>" alt=""
							class="img-fluid rounded-circle">
						<h3 id="nama">Naufal Harsa Pratama</h3>
						<h3 id="nim">1301180240</h3>
					</div>
				</div>

				<div class="card">
					<div class="card-body">
						<img id="team-photo" src="<?= base_url("assets/image/kirito.jpg")?>" alt=""
							class="img-fluid rounded-circle">
						<h3 id="nama">Naufal Harsa Pratama</h3>
						<h3 id="nim">1301180240</h3>
					</div>
				</div>
			</div>
		</div>


		<div id="section2">
			<div class="row">
				<div id="margin" class="col-md-7">
					<div class="col" id="tittle">FAQ</div>
					<ol>
						<li>Bagaimana cara mendaftarkan akun di TelyuPharmacy ?
							<ul>
								<li><span>Pilih menu Sign Up pada navbar bagian atas di Home Page,</span></li>
								<li><span>Isi semua data diri yang di perlukan untuk mendaftar.</span></li>
							</ul>
						</li>
						<li>Bagaimana cara mendapatkan password jika lupa dengan password akun?
							<ul>
								<li><span>Klik link action 'Forgot Password' pada page Sign In,</span></li>
								<li><span>Isi username untuk mendapatkan password akun anda.</span></li>
							</ul>
						</li>
						<li>Bagaimana cara mengubah profile akun?
							<ul>
								<li><span>Pilih menu Profile (gambar photo)</span></li>
								<li><span>Pilih ubah profile dan isi data yang ingin diubah.</span></li>
							</ul>
						</li>
						<li>Bagaimana cara membeli produk di Telyupharmacy
							<ul>
								<li><span>Pilih menu Product pada navbar bagian atas di Home Page</span></li>
								<li><span>Cari produk lewat search box dengan mengisi nama produk yang dicari</span>
								</li>
								<li><span>Anda juga dapat mencari produk berdasarkan rating dan harga produk</span></li>
								<li><span>Pilih produk sesuai yang diinginkan di tampilan produk</span></li>
								<li><span>Produk akan masuk ke dalam cart yang ada di navbar bagian atas Home
										Page</span></li>
								<li><span>Checkout pembelian produk yang ada di cart.</span></li>
							</ul>
						</li>
						<li>Bagaimana cara mencari artikel kesehatan di Telyupharmacy?
							<ul>
								<li><span>Pilih menu Article pada navbar bagian atas Home Page</span></li>
								<li><span>Cari artikel yang ingin anda baca</span></li>
								<li><span>Anda juga bisa mensorting artikel berdasarkan kategori dan waktu.</span></li>
							</ul>
						</li>

					</ol>
				</div>
				<div class="col-md-5">
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
								<a class="nav-link" id="copyright" href="<?= site_url("Buyer"); ?>">Home</a>
							</li>
							<li>
								<a class="nav-link" id="copyright" href="<?= site_url("Product"); ?>">Product</a>
							</li>
							<li>
								<a class="nav-link" id="copyright" href="<?= site_url("Article"); ?>">Article</a>
							</li>
							<li>
								<a class="nav-link" id="copyright" href="<?= site_url("Home/load_AboutUsLogin") ?>">About Us</a>
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
</body>

</html>
