


  // Wait for the DOM to be ready
$(function() {
  // Initialize form validation on the registration form.
  // It has the name attribute "registration"
  $("form[name='enquiry'] ").validate({
    // Specify validation rules
    rules: {
      // The key name on the left side is the name attribute
      /* -- Author Url:  http://www.dipeshpednekar.com/ -- */
      // of an input field. Validation rules are defined
      // on the right side
      nm: "required",
      ph: "required",
      com:"required",
      em: {
        required: true,
        // Specify that email should be validated
        // by the built-in "email" rule
        email: true
      },
      password: {
        required: true,
        minlength: 5
      }
    },
    // Specify validation error messages
    messages: {
      nm: "Please enter name",
      ph: "Please enter number",
      com : "please enter message",
      em: "Please enter valid email "
    },
    // Make sure the form is submitted to the destination defined
    // in the "action" attribute of the form when valid
    submitHandler: function(form) {
      form.submit();
    }
  });
});
//------------------------------------------------------------//

$(function() {
  // Initialize form validation on the registration form.
  // It has the name attribute "registration"
  $("form[name='enquiry1'] ").validate({
    // Specify validation rules
    rules: {
      // The key name on the left side is the name attribute
      // of an input field. Validation rules are defined
      // on the right side
      nm: "required",
      ph: "required",
      com:"required",
      em: {
        required: true,
        // Specify that email should be validated
        // by the built-in "email" rule
        email: true
      },
      password: {
        required: true,
        minlength: 5
      }
    },
    // Specify validation error messages
    messages: {
      nm: "Please enter name",
      ph: "Please enter number",
      com : "please enter message",
      em: "Please enter valid email "
    },
    // Make sure the form is submitted to the destination defined
    /* -- Author Url:  http://www.dipeshpednekar.com/ -- */
    // in the "action" attribute of the form when valid
    submitHandler: function(form) {
      form.submit();
    }
  });
});
