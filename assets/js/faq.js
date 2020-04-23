$(document).ready( () => {
  $.getJSON("<?= base_url('assets/js/faq.json'); ?>", data => {
    let dataFAQ = '';
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
    $('#faq-table').append(dataFAQ);
  });
});