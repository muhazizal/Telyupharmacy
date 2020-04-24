$(document).ready( () => {
  getCart();
});

const baseURL = window.location.origin + '/Telyupharmacy/';

const getCart = () => {
  fetch(`${baseURL}Cart/getCart`)
    .then(response => {
      return response.json();
    })
    .then(responseJson => {
      if (responseJson.error) {
        console.log('error');
      } else {
        renderCart(responseJson);
      }
    });
}

const renderCart = (carts) => {
  const cartElement = document.querySelector('#cartContainer');
  cartElement.innerHTML = "";
  let totalProduct = 0;
  let totalPrice = 0;

  carts.forEach(cart => {
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
            <div class="">
              <button type="button" id="minusProduct" class="btn btn-outline">-</button>
              <input type="text" id="number" value="${cart.quantity}" disabled="true">
              <button type="button" id="plusProduct" class="btn btn-outline">+</button>
              <button type="button" class="btn btn-outline">
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

  const summaryElement = document.querySelector('#summaryContainer');
  summaryElement.innerHTML = `
    <span id="tittle-section-2">Ringkasan Belanja</span>
    <hr>
    <span id="tittle-section-2">Total Barang</span><span id="tittle-section-2-1">
      (${totalProduct})
    </span>
    <hr>
    <span id="tittle-section-2">Total Harga</span><span id="tittle-section-2-2">RP ${totalPrice}</span>
    <a id="checkout" class="btn btn-info" href="${baseURL}Product/load_Checkout/" role="button">Checkout</a>
  `
}