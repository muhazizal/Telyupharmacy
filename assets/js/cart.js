// checkout

function tambah() {
	var a = parseInt(document.getElementById("number").value);
	document.getElementById("number").value = a + 1;
	document.getElementById("number-checkout").value = a + 1;
}

function kurang() {
	var a = parseInt(document.getElementById("number").value);
	document.getElementById("number").value = a - 1;
	document.getElementById("number-checkout").value = a - 1;
}

// checkbox
// function checkAll() {
// 	var parent = document.getElementById("parent");
// 	var input = document.getElementsByTagName("input");
// 	if (parent.checked === true) {
// 		for (var i = 0; i < input.length; i++) {
// 			if (input[i].type == "checkbox" && input[i].id == "anak" && input[i].checked == false) {
// 				input[i].checked = true;
// 			}
// 		}
// 	} else if (parent.checked === false) {
// 		for (var i = 0; i < input.length; i++) {
// 			if (input[i].type == "checkbox" && input[i].id == "anak" && input[i].checked == true) {
// 				input[i].checked = false;
// 			}
// 		}
// 	}
// }
