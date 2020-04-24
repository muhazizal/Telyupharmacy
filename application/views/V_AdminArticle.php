<!DOCTYPE html>
<html lang="en">

<head>
	<title>Article List</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>TelyuPharmacy | Admin Article</title>
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
				<div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
					<form class="form-inline ">
						<div class="dropdown">
							<a class="dropdown" href="#" id="Profile-2" data-toggle="dropdown" aria-haspopup="true"
								aria-expanded="false" data-offset="10,20"><img
									src="<?= base_url('assets/uploads/profile/admindefault.jpg') ?>"
									class="rounded-circle d-block top" /></a>
							<div class="dropdown-menu dropdown-menu-right" aria-labelledby="Profile-2">
								<img src="<?= base_url('assets/uploads/profile/admindefault.jpg'); ?>"
									class="rounded-circle d-block bot" />
								<h3 class="text-center profile-title"><?= $admin['username']; ?></h3>
								<h3 class="text-center profile-title"><?= $admin['id']; ?></h3>
								<a type="button" href="<?= site_url('Auth/do_logout'); ?>" 
									class="btn btn-default mt-3 text-white text-center">Log Out
								</a>
							</div>
						</div>
					</form>
				</div>

			</nav>
		</div>

		<!-- Flashdata -->
		<?php if ($this->session->flashdata('article_Inserted')) { ?>
		
			<div class="col-lg-12 text-center">
				<div class="alert alert-success alert-dismissible fade show" id="success-alert" role="alert">
					<strong><?= $this->session->flashdata('article_Inserted'); ?></strong>
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
			</div>
		<?php } else if ($this->session->flashdata('article_notInserted')) { ?>
		
			<div class="col-lg-12 text-center">
				<div class="alert alert-danger alert-dismissible fade show" id="success-alert" role="alert">
					<strong><?= $this->session->flashdata('article_notInserted'); ?></strong>
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
			</div>
		<?php } else if ($this->session->flashdata('article_Deleted')) { ?>
		
			<div class="col-lg-12 text-center">
				<div class="alert alert-danger alert-dismissible fade show" id="success-alert" role="alert">
					<strong><?= $this->session->flashdata('article_Deleted'); ?></strong>
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
			</div>
		<?php } else if ($this->session->flashdata('article_notDeleted')) { ?>
		
			<div class="col-lg-12 text-center">
				<div class="alert alert-danger alert-dismissible fade show" id="success-alert" role="alert">
					<strong><?= $this->session->flashdata('article_notDeleted'); ?></strong>
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
			</div>
		<?php } else if ($this->session->flashdata('article_Updated')) { ?>
		
			<div class="col-lg-12 text-center">
				<div class="alert alert-success alert-dismissible fade show" id="success-alert" role="alert">
					<strong><?= $this->session->flashdata('article_Updated'); ?></strong>
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
			</div>
		<?php } else if ($this->session->flashdata('article_notUpdated')) { ?>
		
			<div class="col-lg-12 text-center">
				<div class="alert alert-danger alert-dismissible fade show" id="success-alert" role="alert">
					<strong><?= $this->session->flashdata('article_notUpdated'); ?></strong>
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
			</div>
		</div>
		<?php } ?>

		<!-- section1 -->
		<div class="container-fluid" id="section1">
			<span id="article">Article</span>
			<form action="<?php echo site_url('Article/searchArticleAdmin') ?>" method="get" class="navbar-form">
				<div class="form-group input-group">
				<?php
					if (array_key_exists("title", $_GET)) {
				?>
					<input id="search" type="text" name="searchArticle" value="<?= $_GET["title"] ?>" 
					class="form-control" placeholder="<?= $_GET["title"] ?>">
				<?php
					} else {
				?>
					<input id="search" type="text" name="searchArticle" class="form-control col-md-3" placeholder="Search Article">
				<?php } ?>
					<div class="input-group-btn">
						<button type="submit" id="icon" class="btn btn-outline-info">
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
						<th scope="col">Title</th>
						<th scope="col">Category</th>
						<th scope="col">Action</th>
						<th scope="col">Details</th>
					</tr>
					</!-->
				<tbody>
					<?php foreach($data_article as $article):  ?>
					<tr>
						<td>
							<img id="image" src="<?= base_url('assets/uploads/article/') . $article['image'] ?>" alt="">
						</td>
						<td id="margin"><?= $article['title'] ?></td>
						<td id="margin"><?= $article['category'] ?></td>
						<td id="margin">
							<button type="button" class="btn btn-warning" data-toggle="modal"
								data-target="#EditArticle<?= $article['id'] ?>">Update</button>
							<button type="button" class="btn btn-danger" data-toggle="modal"	
								data-target="#DeleteArticle<?= $article['id'] ?>">Delete</button>			
							</form>
						</td>
						<td>
							<div class="detail">
								<a href="" data-toggle="modal"
									data-target="#DetailsArticle<?= $article['id'] ?>"><img
										class="rounded-circle d-block" id="detail"
										src="<?= base_url("assets/image/details.svg") ?>" alt=""></a>
							</div>
						</td>
					</tr>
					<?php endforeach;  ?>
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
							<form action="<?= site_url('Article/add_Article') ?>" method="post" enctype="multipart/form-data" 
							class="row" id="formInput">
								<div class="col-md-1"></div>
								<div class="col-md-4">
									<img id="addImage" src="<?= base_url("assets/uploads/article/defaultarticle.jpg") ?>"
										class="rounded-circle d-block" />
								</div>
								<div class="col-md-7" id="inputan">
									<div class="custom-file col-md-9 mb-2">
										<input type="file" class="custom-file-input" id="customFile" name="image">
										<label class="custom-file-label" for="customFile">Choose Image</label>
									</div>
									<div class="topic-title">Article Name</div>
									<input type="text" name="title" class="form-control mb-2">
									<div class="topic-title">Category</div>
									<input type="text" name="category" class="form-control mb-2">
								</div>
								<div class="topic-title desc">Description</div>
								<textarea form="formInput" name="description" cols="30" rows="5" class="form-control"></textarea>
								<button type="submit" class="btn btn-primary ">Add New Article</button>
								<button type="button" class="btn btn-outline-danger" data-dismiss="modal">Cancel</button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Update Article -->
		<?php foreach($data_article as $article):  ?>
		<div class="container" id="NewArticle">
			<div class="row justify-content-center">
				<div class="modal fade justify-content-center" id="EditArticle<?php echo $article['id'] ?>"
					role="dialog">
					<div class="modal-dialog bg-modal">
						<div class="modal-content">
							<h5 id="tittle">Edit Article</h5>
							<form action="<?php echo site_url('Article/update_Article/'.$article['id']) ?>" method="post"
								enctype="multipart/form-data" id="formEdit" class="row">
								<div class="col-md-1"></div>
								<div class="col-md-4">
									<img id="addImage" src="<?= base_url('assets/uploads/article/') . $article['image'] ?>" 
									class="rounded-circle d-block" />
								</div>
								<div class="col-md-7" id="inputan">
									<div class="custom-file col-md-9 mb-2">
										<input type="file" class="custom-file-input" id="customFile" name="image">
										<label class="custom-file-label" for="customFile">Choose Image</label>
									</div>
									<div class="topic-title">Article Name</div>
									<input type="text" name="title" value="<?= $article['title']; ?>" class="form-control mb-2">
									<div class="topic-title">Category</div>
									<input type="text" name="category" value="<?= $article['category']; ?>" class="form-control mb-2">
								</div>
								<div class="topic-title desc">Description</div>
								<textarea class="form-control" name="description" id="formEdit" cols="30" rows="5"><?= $article['description']; ?></textarea>
								<button type="submit" class="btn btn-primary ">Update Product</button>
								<button type="button" class="btn btn-outline-danger" data-dismiss="modal">Cancel</button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php endforeach;  ?>

		<!-- detail article -->
		<?php foreach($data_article as $article):  ?>
		<div class="container" id="NewArticle">
			<div class="row justify-content-center">
				<div class="modal fade justify-content-center" id="DetailsArticle<?php echo $article['id'] ?>"
					role="dialog">
					<div class="modal-dialog bg-modal">
						<div class="modal-content">
							<h5 id="tittle">Article Details </h5>
							<form action="<?php echo site_url('Article/load_AdminArticle') ?>" method="post"
								enctype="multipart/form-data" class="row">
								<div class="col-md-1"></div>
								<div class="col-md-4">
									<img id="addImage" src="<?= base_url('assets/uploads/article/') . $article['image'] ?>" class="rounded-circle d-block" />
								</div>
								<div class="col-md-7" id="inputan">
									<div class="topic-title">Article Name</div>
									<input type="text" name="title" class="form-control" disabled="true" value="<?= $article['title'] ?>">
									<div class="topic-title">Category</div>
									<input type="text" name="category" class="form-control" disabled="true" value="<?= $article['category'] ?>">
								</div>
								<div class="topic-title desc">Description</div>
								<textarea class="form-control" name="description" id="formDetail" cols="30" rows="5" disabled="true"><?=$article['description']?></textarea>
								<button type="button" class="btn btn-outline-danger" data-dismiss="modal">Close</button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php endforeach;  ?>

		<!-- delete article -->
		<?php foreach($data_article as $article):  ?>
		<div class="modal fade" id="DeleteArticle<?php echo $article['id'] ?>" tabindex="-1" role="dialog"
			aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLabel">Are you sure you want to delete this item?</h5>
						<button class="close" type="button" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">×</span>
						</button>
					</div>
					<div class="modal-body">Data yang dihapus tidak akan bisa dikembalikan.</div>
					<div class="modal-footer">
						<form action="<?php echo site_url('Article/delete_Article/'.$article['id']) ?>" method="post"
							enctype="multipart/form-data" class="row">
							<button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
							<button type="submit" class="btn btn-danger">Delete</button>
						</form>
					</div>
				</div>
			</div>
		</div>
		<?php endforeach;  ?>
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
