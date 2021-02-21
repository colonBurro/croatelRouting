$("#btn_form").click(function () {
  var data = {
      name: $("#contact_name").val(),
      email: $("#contact_email").val(),
      phone: $("#contact_phone").val(),
      message: $("#contact_message").val(),
      category: $(".selectbox").attr("data-option")
      // category: $("input[name=category]:checked").val()
  }
//   alert("Your message has been sent.");

  if (typeof data.category === 'undefined' || data.category === null) {
      alert('Must select type of project');
      return false;
  }
  if (!$("[name='terms']").is(':checked')) {
      alert('Terms not checked');
      return false;
  }
//   alert('success ' + JSON.stringify(data));
$("#status").innerHTML = '<h2>Thanks ' + name.value + ', your message has been sent.</h2>';
  $.ajax({
      type: "POST",
      url: "php/contactForm.php",
      data: data,
      success: function () {
          console.log(JSON.stringify(data));
          $("#status").innerHTML = '<h2>Thanks ' + name.value + ', your message has been sent.</h2>';
          alert("Your message has been sent.");
      }
  });
  // Prevents default submission of the form after clicking on the submit button. 
  return false;  
});