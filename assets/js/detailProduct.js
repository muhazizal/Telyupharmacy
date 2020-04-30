const baseURL = window.location.origin + "/Telyupharmacy/";

// Add product to cart
const addProduct = (quantity, totalPrice, idProduct) => {
	fetch(
		`${baseURL}Product/addProductDetailToCart/${quantity}/${totalPrice}/${idProduct}`,
		{
			method: "POST",
			body: JSON.stringify(quantity, totalPrice, idProduct),
		}
	)
		.then((response) => {
			return response.json();
		})
		.then(() => {
			Swal.fire({
				position: "center",
				icon: "success",
				title: "Your item has been added to cart!",
				showConfirmButton: false,
				timer: 2000,
			});
		})
		.catch(() => {
			Swal.fire({
				position: "center",
				icon: "error",
				title: "Your selected item already in cart!",
				showConfirmButton: false,
				timer: 2000,
			});
		});
};

let oldValue = parseInt($("#number").val());
let newValue = 1;
let qty = $("#number");

$("#minusProduct").on("click", () => {
	if (newValue > 1) {
		newValue -= 1;
		qty.val(newValue);
	}
});

$("#plusProduct").on("click", () => {
	newValue += oldValue;
	qty.val(newValue);
});

addToCart.addEventListener("click", () => {
	const quantity = newValue;
	const totalPrice = newValue * $("#hiddenPrice").val();
	const idProduct = $("#btnAddToCart").val();

	addProduct(quantity, totalPrice, idProduct);
});
