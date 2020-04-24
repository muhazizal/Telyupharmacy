$(document).ready( () => {
  getCart();
});

const baseURL = window.location.origin + '/Telyupharmacy/';

const getCart = () => {
	$.ajax({
		type: 'POST',
		url: `${baseURL}Cart/getCart`,
		dataType: 'json',
		success: (result) => {
      console.log(result);
      let cart = '';
      let totalProduct = 0;
      let totalPrice = 0;
			for (let i = 0; i < result.length; i++) {
				cart += `
          <div class="card">
            <div class="row">
              <div class="col-md-4" id="md4">
                <input class="form-check-input" type="checkbox" value="" id="anak" >
                <img id="Barang" src="${baseURL}assets/uploads/product/${result[i].image}" alt="" class="img-fluid">
              </div>
              <div class="col-md-8" id="md8">
                <p>${result[i].name}</p>
                <p class="harga">Rp. ${result[i].price}</p>
                <div class="">
                  <button type="button" id="minusProduct" class="btn btn-outline">-</button>
                  <input type="text" id="number" value="${result[i].quantity}" disabled="true">
                  <button type="button" id="plusProduct" class="btn btn-outline">+</button>
                  <button type="button" class="btn btn-outline">
                    <i class="fa fa-trash"aria-hidden="true"></i>
                  </button>
                </div>
              </div>
            </div>
          </div>
        `
        totalProduct += parseInt(result[i].quantity);
        totalPrice = parseInt(result[i].price) * totalProduct;
      }
      $('#cartContainer').html(cart);

      let summary = ''
      summary += `
        <span id="tittle-section-2">Ringkasan Belanja</span>
        <hr>
        <span id="tittle-section-2">Total Barang</span><span id="tittle-section-2-1">
          (${totalProduct})
        </span>
        <hr>
        <span id="tittle-section-2">Total Harga</span><span id="tittle-section-2-2">RP ${totalPrice}</span>
        <a id="checkout" class="btn btn-info" href="#" role="button">Checkout</a>
      `
      $('#summaryContainer').html(summary);
		}
	});
};
