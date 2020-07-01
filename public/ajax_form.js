$("#frmContacto").submit(function () {
  let url = "sendContacto.php";

  $.ajax({
    type: "post",
    url: url,
    data: $("#frmContacto").serialize(),
    success: function (data) {
      $("#respa").html(data);
    },
  });
  $(".panel__confirmacion").addClass("active__panel__confirmacion");
  return false;
});
