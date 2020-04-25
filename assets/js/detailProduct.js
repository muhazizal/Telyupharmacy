const baseURL = window.location.origin + '/Telyupharmacy/';

const addProduct = (product) => {
  fetch(`${baseURL}Product/addProductToCart/${product.idProduct}`, {
    method: 'POST',
    body: JSON.stringify(product)
  })
  .then(response => {
      return response.json();
  })
  .then(responseJson => {
    if (responseJson) {
      Swal.fire({
        position: 'center',
        icon: 'success',
        title: 'Your item has been added to cart!',
        showConfirmButton: false,
        timer: 2000
      });
    } else {
      Swal.fire({
        position: 'center',
        icon: 'error',
        title: 'Oops, something wrong!',
        showConfirmButton: false,
        timer: 2000
      });
    }
  });
}

const minusProduct = document.querySelector('#minusProduct');
const plusProduct = document.querySelector('#plusProduct');
let qty = document.querySelector('#number').value;

minusProduct.addEventListener('click', () => {
  if (qty > 1) {
    qty -= 1;
  }
  console.log(qty);
});
plusProduct.addEventListener('click', () => {
  qty += 1;
  console.log(qty);
});

const hiddenPrice = document.querySelector('#hiddenPrice');
const addToCart = document.querySelector('#btnAddToCart');

addToCart.addEventListener('click', () => {
  const time = new Date();
  const product = {
    quantity: qty,
    date: `${time.getDate()}-${time.getMonth()}-${time.getFullYear()}`,
    totalPrice: qty * hiddenPrice.value,
    idBuyer: document.querySelector('#hiddenIdBuyer').value,
    idProduct: addToCart.value
  }
  
  addProduct(product);
});