// checkout
const checkAll = document.querySelector('#parent');
parent.addEventListener('click', () => {
	const input = document.getElementsByTagName('input');
	if (parent.checked === true) {
		for (let i = 0; i < input.length; i++) {
			if (input[i].type == 'checkbox' && input[i].id == 'anak' && input[i].checked === false) {
				input[i].checked = true;
			}
		}
	} else if (parent.checked === false) {
		for (let i = 0; i < input.length; i++) {
			if (input[i].type == "checkbox" && input[i].id == "anak" && input[i].checked === true) {
				input[i].checked = false;
			}
		}
	}
});
