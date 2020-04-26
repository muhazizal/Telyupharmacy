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
      renderProduct(responseJson);
    })
    .catch(() => {
      console.log('error');
    });
};

// Search product by name
const searchProductName = (keyword) => {
  fetch(`${baseURL}Product/searchProductName/${keyword}`)
    .then(response => {
      return response.json();
    }) 
    .then(responseJson => {
      renderProduct(responseJson);
    })
    .catch(() => {
      Swal.fire({
        position: 'center',
        icon: 'error',
        title: 'Product not found!',
        showConfirmButton: false,
        timer: 2000
      });
      getProduct();
      document.querySelector('#search').value = '';
    });
};
const formSearchName = document.querySelector('#formSearchName');
formSearchName.addEventListener('submit', (e) => {
  e.preventDefault();
  const inputValue = document.querySelector('#search').value;
  if (inputValue === '' || inputValue === null || inputValue === undefined) {
    getProduct();
  } else {
    searchProductName(inputValue);
  }
});

// Search product by price
const searchProductPrice = (min, max) => {
  fetch(`${baseURL}Product/searchProductPrice/${min}/${max}`)
    .then(response => {
      return response.json();
    })
    .then(responseJson => {
      renderProduct(responseJson);
    })
    .catch(() => {
      Swal.fire({
        position: 'center',
        icon: 'error',
        title: 'There is no product at this range!',
        showConfirmButton: false,
        timer: 2000
      });
      getProduct();
      document.querySelector('#minPrice').value = '';
      document.querySelector('#maxPrice').value = '';
    });
};
const formSearchPrice = document.querySelector('#formSearchPrice');
formSearchPrice.addEventListener('submit', (e) => {
  e.preventDefault();
  let minPrice = document.querySelector('#minPrice').value;
  let maxPrice = document.querySelector('#maxPrice').value;
  if (minPrice === null || minPrice === '' || minPrice === undefined) {
    minPrice = 0;
  }
  if (maxPrice === null || maxPrice === '' || maxPrice === undefined) {
    maxPrice = 99999999999;
  }
  searchProductPrice(minPrice, maxPrice);
});

// Add product to cart
const addProduct = (idProduct) => {
  fetch(`${baseURL}Product/addProductToCart/${idProduct}`, {
    method: 'POST',
    body: JSON.stringify(idProduct)
  })
  .then(response => {
    return response.json();
  })
  .then(() => {
    Swal.fire({
      position: 'center',
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
      title: 'Your selected item already in cart!',
      showConfirmButton: false,
      timer: 2000
    });
    getProduct();
  })
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

  const addToCart = document.querySelectorAll('#btnAddToCart');

  addToCart.forEach(button => {
    button.addEventListener('click', () => {
      idProduct = button.value;
      
      addProduct(idProduct);
    });
  })
  
};