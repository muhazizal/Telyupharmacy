$(document).ready( () => {
  getProduct();
});

const baseURL = window.location.origin + '/Telyupharmacy/';

// Show all product
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
    });
};

// Search product by name
const searchProductName = (keyword) => {
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
    });
};
const formSearchName = document.querySelector('#formSearchName');
formSearchName.addEventListener('submit', (e) => {
  e.preventDefault();
  const inputValue = document.querySelector('#search').value;
  if (inputValue === '' || inputValue === null) {
    getProduct();
  } else {
    searchProductName(inputValue);
  }
});

// Search product by price
const searchProductPrice = (min, max) => {
  fetch(`${baseURL}Product/searchProductPrice/minPrice=${min}&maxPrice=${max}`)
    .then(response => {
      response.json();
    })
    .then(responseJson => {
      console.log(responseJson);
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
    });
};
const formSearchPrice = document.querySelector('#formSearchPrice');
formSearchPrice.addEventListener('submit', (e) => {
  e.preventDefault();
  const minPrice = document.querySelector('#minPrice').value;
  const maxPrice = document.querySelector('#maxPrice').value;
  if (minPrice === '' || maxPrice === null || minPrice === '' || maxPrice === null) {
    getProduct();
  } else {
    searchProductPrice(minPrice, maxPrice);
  }
});

// Add product to cart
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
        position: 'mid',
        icon: 'success',
        title: 'Your item has been added to cart!',
        showConfirmButton: false,
        timer: 2000
      });
      getProduct();
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

// Insert product html element
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