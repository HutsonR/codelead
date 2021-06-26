$(document).ready(function () {
  $("form").submit(function () {
    // Получение ID формы
    var formID = $(this).attr("id");

    // Добавление решётки к имени ID
    var formNm = $("#" + formID);
    $.ajax({
      type: "POST",
      url: "https://codelead.ru/wp-content/themes/hutson/modalform/mail.php",
      data: formNm.serialize(),
      success: function (data) {
        // Вывод сообщения об успешной отправке
        $(".msgs").html(data);
        $(".formTitle").css("display", "none");
        $(formNm).css("display", "none");
        setTimeout(function () {
          $(formNm).css("display", "block");
          $(".formTitle").css("display", "block");
          $(".msgs").html("");
          $("input").not(":input[type=submit], :input[type=hidden]").val("");
        }, 3000);
      },
      error: function (jqXHR, text, error) {
        // Вывод сообщения об ошибке отправки
        $(".msgs").html(error);
        $(".formTitle").css("display", "none");
        $(formNm).css("display", "none");
        setTimeout(function () {
          $(formNm).css("display", "block");
          $(".formTitle").css("display", "block");
          $(".msgs").html("");
          $("input").not(":input[type=submit], :input[type=hidden]").val("");
        }, 3000);
      },
    });
    return false;
  });
  //для стилей формы
  var $input = $(".form-fieldset > input");
  $input.blur(function (e) {
    $(this).toggleClass("filled", !!$(this).val());
  });
});
