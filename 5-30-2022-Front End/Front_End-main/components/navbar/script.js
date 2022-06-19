$(function () {
  $(".toggler").on("click", function () {
    $(".side_nav").slideToggle(350);
    $("i", this).toggleClass("bi-list bi-x");
  });

  $(".carousel").carousel({
    interval: 2500,
  });
});
