$(function () {
  $(".toggler").on("click", function () {
    $(".side_nav").slideToggle(350);
    $("i", this).toggleClass("bi-list bi-x");
  });

  $(".carousel").carousel({
    interval: 2500,
  });

});

$("#industry_search").on("search",function () {
  let searchValue = $("#industry_search").val();
  let newElement =
    '<div class="industry_item"><p>' + searchValue + "</p></div>";
  $(".industry_items").append(newElement);
});