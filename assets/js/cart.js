$(document).ready(() => {
	getCart();
});

const baseURL = window.location.origin + "/Telyupharmacy/";

// Show cart
const getCart = () => {
	fetch(`${baseURL}Cart/getCart`)
		.then((response) => {
			return response.json();
		})
		.then((responseJson) => {
			renderCart(responseJson);
		})
		.catch(() => {
			renderEmpty();
			console.log("error");
		});
};

// Delete item
const deleteItem = (idItem) => {
	fetch(`${baseURL}Cart/deleteItem/${idItem}`)
		.then((response) => {
			return response.json();
		})
		.then(() => {
			Swal.fire({
				position: "center",
				icon: "success",
				title: "Your item has been deleted!",
				showConfirmButton: false,
				timer: 2000,
			});
			getCart();
		})
		.catch(() => {
			Swal.fire({
				position: "center",
				icon: "error",
				title: "Something wrong!",
				showConfirmButton: false,
				timer: 2000,
			});
		});
};

// Delete all item
const deleteAll = () => {
	fetch(`${baseURL}Cart/deleteAll`)
		.then((response) => {
			return response.json();
		})
		.then(() => {
			Swal.fire({
				position: "center",
				icon: "success",
				title: "Your item(s) has been deleted!",
				showConfirmButton: false,
				timer: 2000,
			});
			getCart();
		})
		.catch(() => {
			Swal.fire({
				position: "center",
				icon: "error",
				title: "Something wrong!",
				showConfirmButton: false,
				timer: 2000,
			});
		});
};

// Update quantity
const updateQty = (idProduct, qty) => {
	fetch(`${baseURL}Cart/updateQty/${idProduct}/${qty}`, {
		method: "PUT",
		body: JSON.stringify(idProduct, qty),
	})
		.then((response) => {
			return response.json();
		})
		.then(() => {
			getCart();
		})
		.catch(() => {
			console.log("error");
		});
};

// Insert cart html element
const renderCart = (carts) => {
	const deleteAllContainer = document.querySelector("#deleteAllContainer");
	deleteAllContainer.innerHTML = `
		<button id="HapusAll" class="btn outline-info">Delete All Item</button>
		<br>
	`;

	// Button delete all
	const btnDeleteAll = document.querySelector("#HapusAll");
	btnDeleteAll.addEventListener("click", () => {
		Swal.fire({
			title: "Are you sure to delete all this item?",
			text: "You won't be able to revert this!",
			icon: "warning",
			showCancelButton: true,
			confirmButtonColor: "#4bc2c5",
			cancelButtonColor: "#d33",
			confirmButtonText: "Yes, sure!",
		}).then((result) => {
			if (result.value) {
				deleteAll();
			}
		});
	});

	const cartElement = document.querySelector("#cartContainer");
	cartElement.innerHTML = "";
	let totalProduct = 0;
	let totalPrice = 0;

	carts.forEach((cart) => {
		cartElement.innerHTML += `
      <div class="card">
        <div class="row">
          <div class="col-md-4" id="md4">
            <img id="Barang" src="${baseURL}assets/uploads/product/${cart.image}" alt="" class="img-fluid">
          </div>
          <div class="col-md-8" id="md8">
            <p>${cart.name}</p>
            <p class="harga">RP ${cart.price}</p>
            <div class="product-container">
              <button type="button" id="minusProduct" class="btn btn-outline">-</button>
              <input type="text" id="number" value="${cart.quantity}" disabled="true">
              <button type="button" id="plusProduct" class="btn btn-outline">+</button>
              <button type="button" value="${cart.id_product}" class="btn btn-outline" id="delete_item">
                <i class="fa fa-trash"aria-hidden="true"></i>
              </button>
            </div>
          </div>
        </div>
      </div>
    `;
		totalProduct += parseInt(cart.quantity);
		totalPrice += parseInt(cart.price) * parseInt(cart.quantity);
	});

	const products = document.querySelectorAll(".product-container");
	products.forEach((product) => {
		let oldValue = product.children[1];
		let newValue = parseInt(oldValue.value);
		let btnDelete = product.children[3];
		let btnPlus = product.children[2];
		let btnMinus = product.children[0];

		// Plus product
		btnPlus.addEventListener("click", () => {
			newValue += 1;
			oldValue.value = newValue;
			updateQty(btnDelete.value, newValue);
		});

		// Minus product
		btnMinus.addEventListener("click", () => {
			if (newValue > 1) {
				newValue -= 1;
				oldValue.value = newValue;
				updateQty(btnDelete.value, newValue);
			} else {
				Swal.fire({
					title: "Are you sure to delete this item?",
					text: "You won't be able to revert this!",
					icon: "warning",
					showCancelButton: true,
					confirmButtonColor: "#4bc2c5",
					cancelButtonColor: "#d33",
					confirmButtonText: "Yes, sure!",
				}).then((result) => {
					if (result.value) {
						deleteItem(btnDelete.value);
					}
				});
			}
		});

		// Delete product
		btnDelete.addEventListener("click", () => {
			Swal.fire({
				title: "Are you sure to delete this item?",
				text: "You won't be able to revert this!",
				icon: "warning",
				showCancelButton: true,
				confirmButtonColor: "#4bc2c5",
				cancelButtonColor: "#d33",
				confirmButtonText: "Yes, sure!",
			}).then((result) => {
				if (result.value) {
					deleteItem(btnDelete.value);
				}
			});
		});
	});

	// Show summary
	const summaryElement = document.querySelector("#summaryContainer");
	summaryElement.innerHTML = `
    <span id="tittle-section-2">Ringkasan Belanja</span>
    <hr>
    <span id="tittle-section-2">Total Barang</span><span id="tittle-section-2-1">
      (${totalProduct})
    </span>
    <hr>
    <span id="tittle-section-2">Total Harga</span><span id="tittle-section-2-2">RP ${totalPrice}</span>
    <a id="checkout" class="btn btn-info" href="${baseURL}Product/load_Checkout/" role="button">Checkout</a>
  `;
};

const renderEmpty = () => {
	const deleteAllContainer = document.querySelector("#deleteAllContainer");
	deleteAllContainer.innerHTML = ``;

	const cartElement = document.querySelector("#cartContainer");
	cartElement.innerHTML = "";

	// Show summary
	const summaryElement = document.querySelector("#summaryContainer");
	summaryElement.innerHTML = `
    <span id="tittle-section-2">Ringkasan Belanja</span>
    <hr>
    <span id="tittle-section-2">Total Barang</span><span id="tittle-section-2-1">
      (0)
    </span>
    <hr>
    <span id="tittle-section-2">Total Harga</span><span id="tittle-section-2-2">RP 0</span>
    <a id="checkout" class="btn btn-info" href="${baseURL}Product/load_Checkout/" role="button">Checkout</a>
  `;
};
