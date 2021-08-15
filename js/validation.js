function validateD(){

  jQuery.validator.addMethod("nameV", function(value, element) {
    // allow any non-whitespace characters as the host part
    return  /^([\w]{3,})+\s+([\w\s]{3,})+$/i.test( value );
  }, '');

  jQuery.validator.addMethod("phoneGR", function(value, element) {
    // allow any non-whitespace characters as the host part
    return /^(\+\d{1,2}\s)?\(?\d{3}\)?[\s.-]\d{3}[\s.-]\d{4}$/.test( value );
  }, '');

  jQuery.validator.addMethod("mailGR", function(value, element) {
    var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    // allow any non-whitespace characters as the host part
    var valid = value.match(mailformat)
    var c = value.split('@')[1]
    var status = false
    if(valid){

      if(c == "gmail.com" ||c == "yahoo.com" ||c == "hotmail.com" ||c == "aol.com") status = true

    }

    return status
  }, '');
      
    // Initialize form validation on the registration form.
    // It has the name attribute "registration"
    $("form[name='mail-send']").validate({
        messages: {
            fname: "Enter full name",
            email : "Invalid Email Address",
            phone : "Invalid  Number",
        },
        
        rules: {
            fname: {
              required: true,
              number:false,
              minlength: 1,
              nameV: true
            },
 
            email:{
              required: true,
              mailGR: true,
              email: true,
              minlength: 1
            },
            phone: {    
              required: true,
              phoneGR: true,
              minlength: 1,
            },
        },
  
        submitHandler: function(form) {
            form.submit();
        }
    });

  };