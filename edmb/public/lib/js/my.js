$(document).ready(function () {
  $.ajax({
    type: "POST",
    url: "../../src/routes/routes.php",
    data: {
      choice: "login",
      user: "test_user",
      pass: "test_pass",
    },
    success: function (response) {
      $("#test").append("<p>" + response + "</p>");
    },
  });
});
