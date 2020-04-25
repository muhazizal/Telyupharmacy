const baseURL = window.location.origin + '/Telyupharmacy/';

const addProduct = (product) => {
  fetch(`${baseURL}Product/addProductDetailToCart/${product.quantity}`, {
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
let oldValue = parseInt(document.querySelector('#number').value);
newValue = 1;
qty = document.querySelector('#number');

minusProduct.addEventListener('click', () => {
  if (newValue > 1) {
    newValue -= 1;
    console.log(newValue);
    qty.value = newValue;
  
    const hiddenPrice = document.querySelector('#hiddenPrice');
    const addToCart = document.querySelector('#btnAddToCart');
  
    addToCart.addEventListener('click', () => {
      const product = {
        quantity: newValue,
        totalPrice: newValue * hiddenPrice.value,
        idProduct: addToCart.value
      }
      addProduct(product);
    });
  }
});

plusProduct.addEventListener('click', () => {
  newValue = newValue + parseInt(oldValue);
  console.log(newValue);
  qty.value = newValue;

  const hiddenPrice = document.querySelector('#hiddenPrice');
  const addToCart = document.querySelector('#btnAddToCart');

  addToCart.addEventListener('click', () => {
    const product = {
      quantity: newValue,
      totalPrice: newValue * hiddenPrice.value,
      idProduct: addToCart.value
    }
    addProduct(product);
  });
});