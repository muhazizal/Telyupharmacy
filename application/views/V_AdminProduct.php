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
	<link rel="stylesheet" href="<?= base_url('assets/css/AdminProduct.css')?>">
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
							<a class="nav-link" id="a-item" href="<?= site_url("./Product") ?>">Product</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" id="a-item" href="<?= base_url("") ?>">Article</a>
						</li>
					</ul>
				</div>
				<div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
					<form class="form-inline ">
						<a href=""><img src="<?= base_url('assets/image/kirito.jpg') ?>"
								class="rounded-circle d-block" /></a>
					</form>
				</div>
			</nav>
		</div>

		<!-- section1 -->
		<div class="container-fluid" id="section1">
			<span id="product">Product</span>
			<form action="" class="navbar-form">
				<div class="form-group input-group">
					<input id="search" type="text" class="form-control col-md-3" placeholder="Search">
					<div class="input-group-btn">
						<button type="button" id="icon" class="btn btn-outline-info">
							<i class="fa fa-search" aria-hidden="true"></i>
						</button>
					</div>
					<button type="button" class="btn btn-primary">Add New Product</button>
				</div>
			</form>
			<table class="table">
				<thead>
					<tr>
						<th scope="col">Photo</th>
						<th scope="col">Product Name</th>
						<th scope="col">Price</th>
						<th scope="col">Action</th>
						<th scope="col">Details</th>
					</tr>
				</!-->
				<tbody>
					<tr>
						<td>
							<img src="<?= base_url("assets/image/kirito.jpg") ?>" alt="">
						</td>
						<td>Kirito</td>
						<td>Rp 15,000</td>
						<td>
							<button type="button" class="btn btn-warning">Update</button>
							<button type="button" class="btn btn-danger">Delete</button>
						</td>
						<td>ini apa</td>
					</tr>
					<tr>
						<td>
							<img src="<?= base_url("assets/image/kirito.jpg") ?>" alt="">
						</td>
						<td>Kirito</td>
						<td>Rp 15,000</td>
						<td>
							<button type="button" class="btn btn-warning">Update</button>
							<button type="button" class="btn btn-danger">Delete</button>
						</td>
						<td>ini apa</td>
					</tr>
					<tr>
						<td>
							<img src="<?= base_url("assets/image/kirito.jpg") ?>" alt="">
						</td>
						<td>Kirito</td>
						<td>Rp 15,000</td>
						<td>
							<button type="button" class="btn btn-warning">Update</button>
							<button type="button" class="btn btn-danger">Delete</button>
						</td>
						<td>ini apa</td>
					</tr>
					<tr>
						<td>
							<img src="<?= base_url("assets/image/kirito.jpg") ?>" alt="">
						</td>
						<td>Kirito</td>
						<td>Rp 15,000</td>
						<td>
							<button type="button" class="btn btn-warning">Update</button>
							<button type="button" class="btn btn-danger">Delete</button>
						</td>
						<td>ini apa</td>
					</tr>
				</tbody>
			</table>
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
