$(document).ready(function () {

  var TEST_CILENT_SIDE = true;
  if (TEST_CILENT_SIDE) {
    $("#mainForm").on("submit", function() {
      var formValid = true;

      var nameIsValid = $("#name").prop("validity").valid;
      if(nameIsValid) {
        $("#nameError").hide();
      } else {
        $("#nameError").show();
        formValid = false;
      }

      var companyIsValid = $("#company").prop("validity").valid;
      if(companyIsValid) {
        $("#coError").hide();
      } else {
        $("#coError").show();
        formValid = false;
      }

      var emailIsValid = $("#mail").prop("validity").valid;
      if(emailIsValid) {
        $("#emailError").hide();
      } else {
        $("#emailError").show();
        formValid = false;
      }

      var reasonIsValid = $("#reason").prop("validity").valid;
      if(reasonIsValid) {
        $("#reasonError").hide();
      } else {
        $("#reasonError").show();
        formValid = false;
      }

      return formValid;
    });

  }

});
