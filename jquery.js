$(document).ready(function () {
  $("#country").on("change", function () {
    var country_id = $(this).val();
    $.ajax({
      method: "POST",
      url: "ajax.php",
      data: { id: country_id },
      dataType: "html",
      success: function (data) {
        $("#state").html(data);
      },
    });
  });

  $("#state").on("change", function () {
    var state_id = $(this).val();
    $.ajax({
      method: "POST",
      url: "ajax.php",
      data: { state_id: state_id },
      dataType: "html",
      success: function (data) {
        $("#city").html(data);
      },
    });
  });
});
