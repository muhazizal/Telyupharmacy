$(document).ready(() => {
	getCheckout();
});

const baseURL = window.location.origin + "/Telyupharmacy/";

// Show checkout
const getCheckout = () => {
	fetch(`${baseURL}Cart/getCart`)
		.then((response) => {
			return response.json();
		})
		.then((responseJson) => {
			renderCheckout(responseJson);
		})
		.catch(() => {
			console.log("error");
		});
};

//Insert checkout html element
const renderCheckout = (items) => {
	const checkElement = document.querySelector("#showCheckout");
	checkElement.innerHTML = "";
	let totalItem = 0;
	let totalPrice = 0;

	items.forEach((item) => {
		quantity = item.quantity;
		price = parseInt(quantity) * parseInt(item.price);

		checkElement.innerHTML += `
			<div class="row box align-content-center">
				<div class="col-md-3"></div>
				<div class=" col-md-2">
						<img class="img-fluid" src="${baseURL}assets/uploads/product/${item.image}" alt="">
				</div>
				<div class="col-md-4">
					<table class="table table-sm table-borderless">
						<tbody>
							<tr>
								<th scope="row">Name</th>
								<td>:</td>
								<td>${item.name}</td>
							</tr>
							<tr>
								<th scope="row">Price</th>
								<td>:</td>
								<td>${item.price}</td>
							</tr>
							<tr>
								<th scope="row">Quantity</th>
								<td>:</td>
								<td>${quantity}</td>
							</tr>
							<tr>
								<th scope="row">Subtotal</th>
								<td>:</td>
								<td>${price}</td>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="col-md-3"></div>
			</div>
		`;

		totalItem += parseInt(quantity);
		totalPrice += parseInt(quantity) * parseInt(price);

		const totalContainer = document.querySelector("#total-container");
		totalContainer.innerHTML = `
			<div class="row box align-content-center">
				<div class="col-md-3"></div>
				<div class="col-md-4 text-left">
					<table class="table table-sm table-borderless">
						<tbody>
							<tr>
								<th scope="row">Total Item</th>
								<td>:</td>
								<td>${totalItem}</td>
							</tr>
							<tr>
								<th scope="row">Total Price</th>
								<td>:</td>
								<td>${totalPrice}</td>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="col-md-3"></div>
			</div>
		`;
	});
};
