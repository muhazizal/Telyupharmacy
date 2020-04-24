$(document).ready(() => {
	const baseURL = window.location.origin + '/Telyupharmacy/';
	$.getJSON(`${baseURL}assets/js/deskripsi.json`, data => {
		let dataDESKRIPSI = '';
		$.each(data, (key, value) => {
			dataDESKRIPSI += `
          <tr>
            <th> ${value.deskripsi} </th>
          </tr>
        `;
		});
		$('#deskripsi-table').append(dataDESKRIPSI);
	});
});
