$(document).ready(() => {
	const baseURL = window.location.origin + "/Telyupharmacy/";
	$.getJSON(`${baseURL}assets/json/faq.json`, (data) => {
		let dataFAQ = "";
		$.each(data, (key, value) => {
			dataFAQ += `
        <tr>
          <th> ${value.title} </th>
        </tr>
        <tr>
          <td> ${value.solution} </td>
        </tr>
      `;
		});
		$("#faq-table").append(dataFAQ);
	});
});
