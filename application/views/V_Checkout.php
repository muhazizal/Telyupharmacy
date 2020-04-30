<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>TelyuPharmacy | Product</title>
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
		integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<!-- External CSS -->
	<link rel="stylesheet" href="<?= base_url('assets/css/Checkout.css')?>">
	<link rel="stylesheet" href="<?= base_url('assets/css/Media.css') ?>">
</head>

<body>
	<div class="container-fluid-0">

		<!-- section1 -->
		<div class="container-fluid" id="section1">
			<div class="title text-center">Hello <?= $buyer['name'] ?>, This is your purchase summary</div>
			<div class="col justify-content-center" id="showCheckout">
				<!-- Show with ajax fetch -->
			</div>
			<div class="col text-center total" id="total-container">
				<!-- Show with ajax fetch -->
			</div>
			<div class="button-group text-center">
				<a class="btn btn-outline-primary mb-5" type="button" href="<?= site_url('Cart/backToHome'); ?>">Back To Home</a>
			</div>
		</div>

	</div>

	<!-- Bootstrap JS -->
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
	<script src="<?= base_url('assets/js/jquery-3.5.0.js'); ?>"></script>
	<script src="<?= base_url('assets/js/checkout.js'); ?>"></script>
</body>

</html>
