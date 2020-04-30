const baseURL = window.location.origin + "/Telyupharmacy/";

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

const minusProduct = document.querySelector("#minusProduct");
const plusProduct = document.querySelector("#plusProduct");
let oldValue = parseInt(document.querySelector("#number").value);
let newValue = 1;
let qty = document.querySelector("#number");

minusProduct.addEventListener("click", () => {
	if (newValue > 1) {
		newValue -= 1;
		qty.value = newValue;
	}
});

plusProduct.addEventListener("click", () => {
	newValue += oldValue;
	qty.value = newValue;
});

const hiddenPrice = document.querySelector("#hiddenPrice");
const addToCart = document.querySelector("#btnAddToCart");

addToCart.addEventListener("click", () => {
	const quantity = newValue;
	const totalPrice = newValue * hiddenPrice.value;
	const idProduct = addToCart.value;

	addProduct(quantity, totalPrice, idProduct);
});
