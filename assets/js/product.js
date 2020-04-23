const btnAddToCart = document.querySelector('#btnAddToCart');
const baseURL = window.location.origin + '/Telyupharmacy/';

btnAddToCart.addEventListener('click', () => {
  $.ajax({
    type: 'post',
    data: `${baseURL}Product/getProductById`,
    url: `${baseURL}Product/addProductToCard`,
    dataType: 'json',
    success: (result) => {
      
    }
  })
});