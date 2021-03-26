// ===========MENU
$(document).ready(function () {
  $(".switch").click(function (event) {
    $(".menu").toggleClass("open");
  });
});
$(document).ready(function () {
  $(".works__wrapper").slick({
    draggable: false,
    arrows: true,
    prevArrow: $(".prev-works"),
    nextArrow: $(".next-works"),
    dots: true,
    appendDots: $(".works__wrapper-dots"),
    responsive: [
      {
        breakpoint: 769,
        settings: {
          arrows: false,
        },
      },
    ],
  });
});
$(document).ready(function () {
  $(".works__wrapper-img").slick({
    arrows: true,
    dots: true,
  });
});
$(document).ready(function () {
  $(".video__wrapper").slick({
    arrows: true,
    prevArrow: $(".prev-vid"),
    nextArrow: $(".next-vid"),
    dots: true,
  });
});
/*==================== SMOOTH SCROLL ====================*/
$(document).ready(function () {
  $(".scroll-link").click(function (event) {
    var id = $(this).attr("href"),
      top = $(id).offset().top;
    $("body,html").animate({ scrollTop: top + 15 }, 1000);
  });
});
/*==================== POPUP ====================*/
$(document).ready(function () {
  $(".popup-with-form").magnificPopup({
    type: "inline",
    preloader: false,
    focus: "#phone",

    // When elemened is focused, some mobile browsers in some cases zoom in
    // It looks not nice, so we disable it:
    callbacks: {
      beforeOpen: function () {
        if ($(window).width() < 700) {
          this.st.focus = false;
        } else {
          this.st.focus = "#phone";
        }
      },
    },
  });
});
