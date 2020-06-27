(function ($) {
  //contact index
  $('#callusForm').submit(function (e) {
    e.preventDefault();
    var data = $(this).serializeArray();
    var post_url = $('#callusForm').attr('action');
    $.post(post_url, data, function (info) {
      $('#callusbtn').html('Sent. Thank you!!');
      $('#name').val('');
      $('#email').val('');
      $('#message').val('');
    });
  });
  // contact
  $('#contactForm').submit(function (e) {
    e.preventDefault();
    var data = $(this).serializeArray();
    var post_url = $('#contactForm').attr('action');
    $.post(post_url, data, function (info) {
      $('#contactbtn').html('Sent. Thank you!!');
      $('#cname').val('');
      $('#cemail').val('');
      $('#cmessage').val('');
    });
  });
})(jQuery);
