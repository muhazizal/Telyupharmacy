$(document).ready(() => {
	const baseURL = window.location.origin + "/Telyupharmacy/";
	$.getJSON(`${baseURL}assets/json/deskripsi.json`, (data) => {
		let dataDESKRIPSI = "";
		$.each(data, (key, value) => {
			dataDESKRIPSI += `
		  <tr class="text-center" >
            <td> ${value.deskripsi} </td>
          </tr>
        `;
		});
		$("#deskripsi-table").append(dataDESKRIPSI);
	});
});
