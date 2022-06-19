$(function () {
  $(".toggler").on("click", function () {
    $(".side_nav").slideToggle(500);
    $(".bi-list").replaceWith("<i class='bi bi-x-circle'></i>");
    var x = $("<i class='bi bi-x-circle'></i>");
    if (x == x) {
      $("<i class='bi bi-x-circle'></i>").replaceWith(".bi-list");
    }
  });

 
});

$(".carousel").carousel({
  interval: 2000,
});

