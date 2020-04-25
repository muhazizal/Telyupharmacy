$(document).ready( () => {
  getProduct();
});

const baseURL = window.location.origin + '/Telyupharmacy/';

const getProduct = () => {
  fetch(`${baseURL}Product/showAllProduct`)
    .then(response => {
      return response.json();
    })
    .then(responseJson => {
      if (responseJson) {
        renderProduct(responseJson);
      } else {
        console.log('error');
      }
    })
}

const searchProduct = (keyword) => {
  fetch(`${baseURL}Product/searchProductName/${keyword}`)
    .then(response => {
      return response.json();
    }) 
    .then(responseJson => {
      if (responseJson) {
        renderProduct(responseJson);
      } else {
        Swal.fire({
        position: 'center',
        icon: 'error',
        title: 'Product not found!',
        showConfirmButton: false,
        timer: 2000
      });
      }
    })
}

const formSearchName = document.querySelector('#formSearchName');
formSearchName.addEventListener('submit', (e) => {
  e.preventDefault();
  const inputValue = document.querySelector('#search').value;
  console.log(inputValue);
  if (inputValue === '' || inputValue === null) {
    getProduct();
  } else {
    searchProduct(inputValue);
  }
});

const addProduct = (product) => {
  fetch(`${baseURL}Product/addProductToCart/${product.idProduct}`, {
    method: 'POST',
    body: JSON.stringify(product)
  })
  .then(response => {
      return response.json();
  })
  .then(() => {
    Swal.fire({
      position: 'mid',
      icon: 'success',
      title: 'Your item has been added to cart!',
      showConfirmButton: false,
      timer: 2000
    });
    getProduct();
  })
  .catch(() => {
    Swal.fire({
      position: 'center',
      icon: 'error',
      title: 'Oops, something wrong!',
      showConfirmButton: false,
      timer: 2000
    });
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
            <button id="btnAddToCart" value="${product.id}" type="button"
            class="btn btn-large btn-block btn-info mt-3">Add to Cart</button>
          </div>
        </div>
      </div>
    `;
  });

  const hiddenPrice = document.querySelector('#hiddenPrice');
  const addToCart = document.querySelectorAll('#btnAddToCart');

  addToCart.forEach(button => {
    button.addEventListener('click', () => {
      const time = new Date();
      const product = {
        quantity: 1,
        date: `${time.getDate()}-${time.getMonth()}-${time.getFullYear()}`,
        totalPrice: 1 * hiddenPrice.value,
        idBuyer: document.querySelector('#hiddenIdBuyer').value,
        idProduct: button.value
      }
      
      addProduct(product);
    });
  })
  
};