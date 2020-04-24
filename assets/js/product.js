// $(document).ready( () => {
//   loadProduct();
// });

const baseURL = window.location.origin + '/Telyupharmacy/';

const loadProduct = () => {
  $.ajax({
    type: 'POST',
    url: `${baseURL}Product/showAllProduct`,
    dataType: 'json',
    success: (result) => {
      let product = '';
      for (let i = 0; i < result.length; i++) {
        product += `
          <div class="card">
            <div class="card-block">
              <img src="${baseURL}assets/uploads/product/${result[i].image}" alt="" class="img-fluid">

              <div class="card-title">
                <span id="label-section-3">${result[i].name}</span>
              </div>

              <div class="card-text">
                <span class="harga">Rp ${result[i].price}</span>
              </div>
              
              <div>
                <input type="hidden" id="hiddenPrice" value="${result[i].price}">
                <a href="${baseURL}Product/showDetailProduct/${result[i].id}"
                  class="btn btn-large btn-block btn-outline-info mt-3">Show Detail
                </a>
                <button id="btnAddToCart" value="${result[i].id}" type="button" onclick="addToCart(${result[i].id})"
                class="btn btn-large btn-block btn-info mt-3">Add to Cart</button>
              </div>
            </div>
          </div>
        `;
      }
      $('#productContainer').html(product);
    }
  });
};

const addToCart = () => {
  const btnAddProduct = document.querySelector('#btnAddToCart');
  const hiddenPrice = document.querySelector('#hiddenPrice');
  const time = new Date();

  const quantity = 1;
  const date = `${time.getDate()}-${time.getMonth()}-${time.getFullYear()}`;
  const totalPrice = quantity * hiddenPrice.value;
  const idBuyer = document.querySelector('#hiddenId').value;
  const idProduct = btnAddProduct.value;

  console.log(quantity);
  console.log(date);
  console.log(totalPrice);
  console.log(idBuyer);
  console.log(idProduct);

  // Add product to cart
  $.ajax({
    type: 'POST',
    url: `${baseURL}Cart/addToCart/${idProduct}`,
    data: {
      'quantity': quantity,
      'date': date,
      'total_price': totalPrice,
      'id_buyer': idBuyer,
      'id_product': idProduct
    },
    dataType: 'json',
    succsess: (result) => {
      loadProduct();
    }
  });
};