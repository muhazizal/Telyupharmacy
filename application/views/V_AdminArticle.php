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
	<link rel="stylesheet" href="<?= base_url('assets/css/AdminArticle.css')?>">
	<link rel="stylesheet" href="<?= base_url('assets/css/jquery.nice-number.css')?>">
</head>

<body>
	<div class="container-fluid-0">
		<div class="container-fluid" id="section0">
			<nav class="navbar navbar-expand-lg navbar-light bg-light">
				<a class="navbar-brand" href="<?= site_url("Admin") ?>">Telyu<span id="Pharmacy">Pharmacy</span></a>
				<button class="navbar-toggler" type="button" data-toggle="collapse"
					data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
					aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
					<ul class="navbar-nav">
						<li class="nav-item">
							<a class="nav-link" id="a-item"
								href="<?= site_url("Product/load_AdminProduct") ?>">Product</a>
						</li>
						<li class="nav-item">
							<a style="border-bottom: 3px solid #4BC2C5;" class="nav-link" id="a-item"
								href="<?= site_url("Article/load_AdminArticle") ?>">Article</a>
						</li>
					</ul>
				</div>
				<div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
					<form class="form-inline ">
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

		<!-- section1 -->
		<div class="container-fluid" id="section1">
			<span id="article">Article</span>
			<form action="" class="navbar-form">
				<div class="form-group input-group">
					<input id="search" type="text" class="form-control col-md-3" placeholder="Search">
					<div class="input-group-btn">
						<button type="button" id="icon" class="btn btn-outline-info">
							<i class="fa fa-search" aria-hidden="true"></i>
						</button>
					</div>
					<a href="<?= base_url("") ?>" type="button" class="btn btn-primary" data-toggle="modal"
						data-target="#addArticle">Add New Article</a>
				</div>
			</form>
			<table class="table">
				<thead>
					<tr>
						<th scope="col">Photo</th>
						<th scope="col">Topic</th>
						<th scope="col">Category</th>
						<th scope="col">Action</th>
						<th scope="col">Details</th>
					</tr>
					</!-->
				<tbody>
					<?php foreach($data_article as $article):  ?>
					<tr>
						<td>
							<img id="image" src="<?= base_url("assets/image/kirito.jpg") ?>" alt="">
						</td>
						<td id="margin"><?php echo $article['title'] ?></td>
						<td id="margin"><?php echo $article['category'] ?></td>
						<td id="margin">
							<button type="button" class="btn btn-warning" data-toggle="modal"
								data-target="#EditArticle<?php echo $article['id'] ?>">Update</button>
							<button type="button" class="btn btn-danger">Delete</button>
						</td>
						<td>
							<div class="detail">
								<a href="" data-toggle="modal"
						data-target="#DetailsArticle"><img class="rounded-circle d-block" id="detail"
										src="<?= base_url("assets/image/details.svg") ?>" alt=""></a>
							</div>
						</td>
					</tr>
					<?php endforeach;  ?>
					<!-- <tr>
						<td>
							<img src="<?= base_url("assets/image/kirito.jpg") ?>" alt="">
						</td>
						<td id="margin">Article #2</td>
						<td id="margin">Gangguan Pencernaan</td>
						<td id="margin">
							<button type="button" class="btn btn-warning" data-toggle="modal"
								data-target="#EditArticle">Update</button>
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
						<td id="margin">Article #3</td>
						<td id="margin">Penyakit Kanker</td>
						<td id="margin">
							<button type="button" class="btn btn-warning" data-toggle="modal"
								data-target="#EditArticle">Update</button>
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
						<td id="margin">Article #4</td>
						<td id="margin">Gangguan Penglihatan</td>
						<td id="margin">
							<button type="button" class="btn btn-warning" data-toggle="modal"
								data-target="#EditArticle">Update</button>
							<button type="button" class="btn btn-danger">Delete</button>
						</td>
						<td>
							<div class="detail">
								<a href=""><img class="rounded-circle d-block" id="detail"
										src="<?= base_url("assets/image/details.svg") ?>" alt=""></a>
							</div>
						</td>
					</tr> -->
				</tbody>
			</table>
		</div>



		<!-- Add Article -->
		<div class="container" id="NewArticle">
			<div class="row justify-content-center">
				<div class="modal fade justify-content-center" id="addArticle" role="dialog">
					<div class="modal-dialog bg-modal">
						<div class="modal-content">
							<h5 id="tittle">Add New Article</h5>
							<form action="<?php echo site_url('Article/add_Article') ?>" method="post"
								enctype="multipart/form-data" class="row">
								<div class="col-md-1"></div>
								<div class="col-md-4">
									<img id="addImage" src="<?= base_url() ?>" class="rounded-circle d-block" />
									<a href=""><i class="fa fa-camera" aria-hidden="true"></i></a>
								</div>
								<div class="col-md-7" id="inputan">
									<div class="topic-title">Article Name</div>
									<input type="text" class="form-control">
									<div class="topic-title">Category</div>
									<a href=""><input type="text" class="form-control"></a>
								</div>
								<div class="topic-title desc">Description</div>
								<textarea class="form-control" name="" id="" cols="30" rows="5"></textarea>
								<button type="button" class="btn btn-primary ">Add New Article</button>
								<button type="button" class="btn btn-outline-danger"
									data-dismiss="modal">Cancel</button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Edit Article -->
		<?php foreach($data_article as $article):  ?>
		<div class="container" id="NewArticle">
			<div class="row justify-content-center">
				<div class="modal fade justify-content-center" id="EditArticle<?php echo $article['id'] ?>"
					role="dialog">
					<div class="modal-dialog bg-modal">
						<div class="modal-content">
							<h5 id="tittle">Edit Article</h5>
							<form action="<?php echo site_url('Article/add_Article') ?>" method="post"
								enctype="multipart/form-data" class="row">
								<div class="col-md-1"></div>
								<div class="col-md-4">
									<img id="addImage" src="<?= base_url() ?>" class="rounded-circle d-block" />
									<a href=""><i class="fa fa-camera" aria-hidden="true"></i></a>
								</div>
								<div class="col-md-7" id="inputan">
									<div class="topic-title">Article Name</div>
									<input type="text" class="form-control">
									<div class="topic-title">Category</div>
									<a href=""><input type="text" class="form-control"></a>
								</div>
								<div class="topic-title desc">Description</div>
								<textarea class="form-control" name="" id="" cols="30" rows="5"></textarea>
								<button type="button" class="btn btn-primary ">Add New Product</button>
								<button type="button" class="btn btn-outline-danger"
									data-dismiss="modal">Cancel</button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php endforeach;  ?>


		<!-- detail article -->
		<div class="container" id="NewArticle">
			<div class="row justify-content-center">
				<div class="modal fade justify-content-center" id="DetailsArticle" role="dialog">
					<div class="modal-dialog bg-modal">
						<div class="modal-content">
							<h5 id="tittle">Details Article</h5>
							<form action="<?php echo site_url('Article/add_Article') ?>" method="post"
								enctype="multipart/form-data" class="row">
								<div class="col-md-1"></div>
								<div class="col-md-4">
									<img id="addImage" src="<?= base_url() ?>" class="rounded-circle d-block" />
									<!-- <a href=""><i class="fa fa-camera" aria-hidden="true"></i></a> -->
								</div>
								<div class="col-md-7" id="inputan">
									<div class="topic-title">Article Name</div>
									<input type="text" class="form-control" disabled="true">
									<div class="topic-title">Category</div>
									<a href=""><input type="text" class="form-control" disabled="true"></a>
								</div>
								<div class="topic-title desc">Description</div>
								<textarea class="form-control" name="" id="" cols="30" rows="5" disabled="true"></textarea>
								<button type="button" class="btn btn-primary ">Add New Article</button>
								<button type="button" class="btn btn-outline-danger"
									data-dismiss="modal">Cancel</button>
							</form>
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
