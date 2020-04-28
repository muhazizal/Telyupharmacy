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
			console.log("error");
		});
};

// Delete Item
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
				title: "Delete Gagal!",
				showConfirmButton: false,
				timer: 2000,
			});
		});
}

// Delete all
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
				title: "Delete Failed!",
				showConfirmButton: false,
				timer: 2000,
			});
		});
}
const btnDeleteAll = document.querySelector("#HapusAll");
btnDeleteAll.addEventListener("click", e => {
	e.preventDefault();
	deleteAll();
});

// Insert cart html element
const renderCart = (carts) => {
	const cartElement = document.querySelector("#cartContainer");
	cartElement.innerHTML = "";
	let totalProduct = 0;
	let totalPrice = 0;

	carts.forEach((cart) => {
		cartElement.innerHTML += `
      <div class="card">
        <div class="row">
          <div class="col-md-4" id="md4">
            <input class="form-check-input" type="checkbox" value="" id="anak" >
            <img id="Barang" src="${baseURL}assets/uploads/product/${cart.image}" alt="" class="img-fluid">
          </div>
          <div class="col-md-8" id="md8">
            <p>${cart.name}</p>
            <p class="harga">Rp. ${cart.price}</p>
            <div>
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

		// const minusProduct = document.querySelector("#minusProduct");
		// const plusProduct = document.querySelector("#plusProduct");

		// minusProduct.addEventListener("click", () => {
		//   let oldValue = parseInt(document.querySelector("#number").value);
		//   let newValue = oldValue;
		//   let qty = document.querySelector("#number");

		//   if (newValue > 1) {
		//     newValue -= 1;
		//     qty.value = newValue;
		//   }
		// });
		// plusProduct.addEventListener("click", () => {
		//   let oldValue = parseInt(document.querySelector("#number").value);
		//   let newValue = oldValue;
		//   let qty = document.querySelector("#number");

		//   newValue = newValue + 1;
		//   qty.value = newValue;
		// });
	});

	const minusProduct = document.querySelectorAll("#minusProduct");
	const plusProduct = document.querySelectorAll("#plusProduct");
	let oldValue = document.querySelectorAll("#number");
	let qty = document.querySelectorAll("#number");

	// plusProduct.forEach(plus => {
	//   oldValue.forEach(old => {
	//     qty.forEach(kuantitas => {
	//       let newValue = parseInt(old.value);
	//       plus.addEventListener("click", () => {
	//         newValue += 1;
	//         kuantitas.value = newValue;
	//       });
	//     });
	//   });
	// });

	plusProduct.forEach(plus => {
		oldValue.forEach(old => {
			qty.forEach(kuantitas => {
				let newValue = parseInt(old.value);
				plus.addEventListener("click", () => {
					newValue += 1;
					kuantitas.value = newValue;
				});
			});
		});
	});



	minusProduct.forEach(minus => {
		oldValue.forEach(old => {
			qty.forEach(kuantitas => {
				let newValue = parseInt(old.value);
				minus.addEventListener("click", () => {
					if (newValue > 1) {
						newValue -= 1;
						qty.value = newValue;
					}
				});
			});
		});
	});

	// Btn delete item
	const btnDeleteItem = document.querySelectorAll("#delete_item");
	btnDeleteItem.forEach(button => {
		button.addEventListener("click", e => {
			e.preventDefault();
			deleteItem(button.value);
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
