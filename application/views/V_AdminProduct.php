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
				<a class="navbar-brand" href="<?= base_url("./Home") ?>">Telyu<span id="Pharmacy">Pharmacy</span></a>
				<button class="navbar-toggler" type="button" data-toggle="collapse"
					data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
					aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
					<ul class="navbar-nav">
						<li class="nav-item">
							<a style="border-bottom: 3px solid #4BC2C5;" class="nav-link" id="a-item"
								href="<?= site_url("./Product/load_AdminProduct") ?>">Product</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" id="a-item" href="<?= base_url("./Article/load_AdminArticle") ?>">Article</a>
						</li>
					</ul>
				</div>
				<div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
					<form class="form-inline ">
						<a href=""><img src="<?= base_url('assets/image/kirito.jpg') ?>"
								class="rounded-circle d-block" /></a>
					</form>
					<a class="btn btn-primary" href="<?= site_url('Auth/do_logout') ?>">Logout</a>
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
					<a href="<?= base_url("") ?>" type="button" class="btn btn-primary" data-toggle="modal"
						data-target="#addProduct">Add New Product</a>
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
							<img id="image" src="<?= base_url("assets/image/kirito.jpg") ?>" alt="">
						</td>
						<td id="margin">Kirito</td>
						<td id="margin">Rp 15,000</td>
						<td id="margin">
							<button type="button" class="btn btn-warning" data-toggle="modal"
								data-target="#EditProduct">Update</button>
							<button type="button" class="btn btn-danger">Delete</button>
						</td>
						<td>
							<div class="detail">
								<a href=""><img class="rounded-circle d-block" id="detail"
										src="<?= base_url("assets/image/details.svg") ?>" alt=""></a>
							</div>
						</td>
					</tr>
					<tr>
						<td>
							<img src="<?= base_url("assets/image/kirito.jpg") ?>" alt="">
						</td>
						<td id="margin">Kirito</td>
						<td id="margin">Rp 15,000</td>
						<td id="margin">
							<button type="button" class="btn btn-warning" data-toggle="modal"
								data-target="#EditProduct">Update</button>
							<button type="button" class="btn btn-danger">Delete</button>
						</td>
						<td>
							<div class="detail">
								<a href=""><img class="rounded-circle d-block" id="detail"
										src="<?= base_url("assets/image/details.svg") ?>" alt=""></a>
							</div>
						</td>
					</tr>
					<tr>
						<td>
							<img src="<?= base_url("assets/image/kirito.jpg") ?>" alt="">
						</td>
						<td id="margin">Kirito</td>
						<td id="margin">Rp 15,000</td>
						<td id="margin">
							<button type="button" class="btn btn-warning" data-toggle="modal"
								data-target="#EditProduct">Update</button>
							<button type="button" class="btn btn-danger">Delete</button>
						</td>
						<td>
							<div class="detail">
								<a href=""><img class="rounded-circle d-block" id="detail"
										src="<?= base_url("assets/image/details.svg") ?>" alt=""></a>
							</div>
						</td>
					</tr>
					<tr>
						<td>
							<img src="<?= base_url("assets/image/kirito.jpg") ?>" alt="">
						</td>
						<td id="margin">Kirito</td>
						<td id="margin">Rp 15,000</td>
						<td id="margin">
							<button type="button" class="btn btn-warning" data-toggle="modal"
								data-target="#EditProduct">Update</button>
							<button type="button" class="btn btn-danger">Delete</button>
						</td>
						<td>
							<div class="detail">
								<a href=""><img class="rounded-circle d-block" id="detail"
										src="<?= base_url("assets/image/details.svg") ?>" alt=""></a>
							</div>
						</td>
					</tr>
				</tbody>
			</table>
		</div>



		<!-- Add Product -->
		<div class="container" id="NewProduct">
			<div class="row justify-content-center">
				<div class="modal fade justify-content-center" id="addProduct" role="dialog">
					<div class="modal-dialog bg-modal">
						<div class="modal-content">
							<h5 id="tittle">Add New Product</h5>
							<form action="" class="row">
								<div class="col-md-1"></div>
								<div class="col-md-4">
									<img id="addImage" src="<?= base_url() ?>"
										class="rounded-circle d-block" />
										<a href=""><i class="fa fa-camera" aria-hidden="true"></i></a>
								</div>
								<div class="col-md-7" id="inputan">
									<div class="topic-title">Product Name</div>
									<input type="text" class="form-control">
									<div class="topic-title">Product Name</div>
									<a href=""><input type="text" class="form-control"></a>
								</div>

							</form>
							<div class="topic-title desc">Description</div>
							<textarea class="form-control" name="" id="" cols="30" rows="5"></textarea>
							<div class="text-center">
								<button type="button" class="btn btn-primary" data-dismiss="modal">Add New
									Product</button>
								<button type="button" class="btn btn-outline-danger"
									data-dismiss="modal">Cancel</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Edit Product -->
		<div class="container" id="NewProduct">
			<div class="row justify-content-center">
				<div class="modal fade justify-content-center" id="EditProduct" role="dialog">
					<div class="modal-dialog bg-modal">
						<div class="modal-content">
							<h5 id="tittle">Add New Product</h5>
							<form action="" class="row">
								<div class="col-md-1"></div>
								<div class="col-md-4">
									<img id="addImage" src="<?= base_url('assets/image/kirito.jpg') ?>"
										class="rounded-circle d-block" />
									
								</div>
								<div class="col-md-7" id="inputan">
									<div class="topic-title">Product Name</div>
									<input type="text" class="form-control">
									<div class="topic-title">Product Name</div>
									<input type="text" class="form-control">
								</div>

							</form>
							<div class="topic-title desc">Description</div>
							<textarea class="form-control" name="" id="" cols="30" rows="5"></textarea>
							<div class="text-center">
								<button type="button" class="btn btn-primary" data-dismiss="modal">Add New
									Product</button>
								<button type="button" class="btn btn-outline-danger"
									data-dismiss="modal">Cancel</button>
							</div>
						</div>
					</div>
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
