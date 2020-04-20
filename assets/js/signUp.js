// Ajax with Jquery
$(document).ready( () => {
  $('form').on('submit', (e) => {
    e.preventDefault();
    $.ajax({
      type : $(this).attr('method'),
      url : $(this).attr('action'),
      data : $(this).serialize(),
    })
  });
});