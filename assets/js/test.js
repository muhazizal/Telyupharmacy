$(document).ready( () => {
  getProduct();
});

const baseURL = window.location.origin + '/Telyupharmacy/';

const getProduct = () => {
  fetch(`${baseURL}Product/showAllProduct`)
    .then(response => {
      return response.json();
    })
    .then (responseJson => {
      if (responseJson.error) {
        console.log('error');
      } else {
        renderProduct(responseJson);
      }
    })
}

const renderProduct = (products) => {
  const productElement = document.querySelector("#productContainer");
  productElement.innerHTML = "";

  products.forEach(product => {
      productElement.innerHTML += `
        <div class="card">
          <div class="card-block">
            <img src="${baseURL}assets/uploads/product/${product.image}" alt="" class="img-fluid">

            <div class="card-title">
              <span id="label-section-3">${product.name}</span>
            </div>

            <div class="card-text">
              <span class="harga">Rp ${product.price}</span>
            </div>
            
            <div>
              <input type="hidden" id="hiddenPrice" value="${product.price}">
              <a href="${baseURL}Product/showDetailProduct/${product.id}"
                class="btn btn-large btn-block btn-outline-info mt-3">Show Detail
              </a>
              <button id="btnAddToCart" value="${product.id}" type="button" onclick="addToCart(${product.id})"
              class="btn btn-large btn-block btn-info mt-3">Add to Cart</button>
            </div>
          </div>
        </div>
      `;
  });
};