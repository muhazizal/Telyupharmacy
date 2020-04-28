$(document).ready(() => {
	getCheckout();
})

const baseURL = window.location.origin + "/Telyupharmacy/";


//show checkout
const getCheckout = () => {
	fetch(`${baseURL}Cart/getCheckout`)
		.then((response) => {
			return respone.json();
		})
		.then((responseJson) => {
			renderCheckout(responseJson);
		})
		.catch(() => {
			console.log("error");
		})
}

//Insert checkout html element
const renderCheckout = (checks) => {
	const checkElement = document.querySelector("#showCheckout");
	checkElement.innerHTML = "";
	let totalBarang = 0;
	let totalPrice = 0;

	checks.forEach((check) => {
		checkElement.innerHTML += `

        <div class="row box align-content-center">
            <div class="col-md-4">ayam</div>
            <div class=" col-md-2">
                <img class="img-fluid" src="${baseURL}assets/uploads/product/${check.image}" alt="">
            </div>
            <div class="col-md-2 ">
                <div class="info">
                    <h3>Nama Barang : <span>${check.name}</span></h3>
                    <h3>Harga Barang : <span>${check.price}</span></h3>
                    <h3>Jumlah barang : <span>${check.jumlahBarang}</span></h3>
                    <h3>Jumlah Harga : <span>${check.jumlahHarga}</span></h3>
                </div>
            </div>
            <div class="col-md-3"></div>
        </div>
        `;
		totalBarang += parseInt(check.jumlahBarang);
		totalPrice += parseInt(check.jumlahBarang) * parseInt(cart.price);
	})


}
