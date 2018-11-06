//When the document has loaded
$(document).ready(function(){
  $("#contactForm").on("submit",function(){
    var formValid = true;
    var nameIsValid = $("#userName").prop("validity").valid;
    if(nameIsValid) {
      // hide the error
      $("#userNameError").addClass("hidden");
    } else {
      // the form is invalid
      formValid = false;
      // show the error
      $("#userNameError").removeClass("hidden");
    }
    var emailIsValid = $("#userEmail").prop("validity").valid;
    if(emailIsValid) {
      // hide the error
      $("#userEmailError").addClass("hidden");
    } else {
      // the form is invalid
      formValid = false;
      // show the error
      $("#userEmailError").removeClass("hidden");
    }

    var messageIsValid = $("#userMessage").prop("validity").valid;
    if(messageIsValid) {
      // hide the error
      $("#userMessageError").addClass("hidden");
    } else {
      // the form is invalid
      formValid = false;
      // show the error
      $("#userMessageError").removeClass("hidden");
    }
    return formValid;
  })
});
