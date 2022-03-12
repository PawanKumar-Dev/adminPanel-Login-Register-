$(document).ready(function(){

  var user_err = true;
  var email_err = true;
  var mobile_err = true;
  var pass_err = true;
  var cpass_err = true;

  // Hide Error msg box
  $('#userchk').hide();
  $('#emailchk').hide();
  $('#mobilechk').hide();
  $('#passchk').hide();
  $('#cpasschk').hide();

  //========================================
  // Firing Event on Key up. Calling checking function
  $('#username').keyup(function() {
    username_check();
  });

  // Function for Checking Username
  function username_check() {
    // Getting value from input
    var usernameValue = $('#username').val();
    
    // Checking for empty field
    if (usernameValue.length == '') {
      $('#userchk').show();
      $('#userchk').html("Fill the Username!");
      $('#userchk').focus();
      $('#userchk').css("color", "red");
      user_err = false;
      return false;
    } else {
      $('#userchk').hide();
    }

    // Checking for Username Length
    if (usernameValue.length < 3 || usernameValue.length > 10) {
      $('#userchk').show();
      $('#userchk').html("Username must be between 3 and 10 character!");
      $('#userchk').focus();
      $('#userchk').css("color", "red");
      user_err = false;
      return false;
    } else {
      $('#userchk').hide();
    }
  }

  //========================================
  // Function to regex test email
  function ValidateEmail(email) {
    var expr = /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;
    return expr.test(email);
  };

  $('#email').keyup(function() {
    email_check();
  });


  function email_check() {
    var emailValue = $('#email').val();

    if (emailValue.length == '') {
      $('#emailchk').show();
      $('#emailchk').html("Fill the Email!");
      $('#emailchk').focus();
      $('#emailchk').css("color", "red");
      email_err = false;
      return false;
    } else {
      $('#emailchk').hide();
    }

    if (!(ValidateEmail(emailValue))) {
      $('#emailchk').show();
      $('#emailchk').html("Email is not valid!");
      $('#emailchk').focus();
      $('#emailchk').css("color", "red");
      email_err = false;
      return false;
    } else {
      $('#emailchk').hide();
    }
  }

  //========================================
  function ValidateMobile(mobile) {
    var expr = /^\d{10}$/;
    return expr.test(mobile);
  };

  $('#mobile').keyup(function() {
    mobile_check();
  });

  function mobile_check() {
    var mobileValue = $('#mobile').val();

    if (mobileValue.length == '') {
      $('#mobilechk').show();
      $('#mobilechk').html("Enter the Mobile Number!");
      $('#mobilechk').focus();
      $('#mobilechk').css("color", "red");
      mobile_err = false;
      return false;
    } else {
      $('#mobilechk').hide();
    }

    if (!(ValidateMobile(mobileValue))) {
      $('#mobilechk').show();
      $('#mobilechk').html("Mobile Number must be 10 digit!");
      $('#mobilechk').focus();
      $('#mobilechk').css("color", "red");
      mobile_err = false;
      return false;
    } else {
      $('#mobilechk').hide();
    }
  }


  //========================================
  $('#password').keyup(function() {
    password_check();
  });

  function password_check() {
    var passwordValue = $('#password').val();

    if (passwordValue.length == '') {
      $('#passchk').show();
      $('#passchk').html("Fill the Password!");
      $('#passchk').focus();
      $('#passchk').css("color", "red");
      pass_err = false;
      return false;
    } else {
      $('#passchk').hide();
    }

    if (passwordValue.length < 3 || passwordValue.length > 10) {
      $('#passchk').show();
      $('#passchk').html("Password must be b/w 3 and 10 character!");
      $('#passchk').focus();
      $('#passchk').css("color", "red");
      pass_err = false;
      return false;
    } else {
      $('#passchk').hide();
    }
  }


  //========================================
  $('#confirmpwd').keyup(function() {
    confirmpass_check();
  });

  function confirmpass_check() {
    var passwordValue = $('#password').val();
    var confpassValue = $('#confirmpwd').val();

    if (passwordValue !== confpassValue) {
      $('#cpasschk').show();
      $('#cpasschk').html("Confirm Password is not matched!");
      $('#cpasschk').focus();
      $('#cpasschk').css("color", "red");
      cpass_err = false;
      return false;
    } else {
      $('#cpasschk').hide();
    }
  }

  //========================================
  // For Submit Button
  $('#sbmt').click(function() {
    user_err = true;
    email_err = true;
    mobile_err = true;
    pass_err = true;
    cpass_err = true;

    username_check();
    email_check();
    mobile_check();
    password_check();
    confirmpass_check();

    if (user_err == true && email_err && pass_err == true && cpass_err == true) {
      return true;
      console.log('Form data valid');
    } else {
      return false;
    }
  });


  //========================================
  // For login Button
  $('#login').click(function() {
    user_err = true;
    pass_err = true;

    username_check();
    password_check();

    if (user_err == true && pass_err == true) {
      return true;
    } else {
      return false;
    }
  });

});