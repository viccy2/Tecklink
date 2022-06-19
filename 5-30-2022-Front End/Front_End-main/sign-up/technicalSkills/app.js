$(function () {
    $(".toggler").on("click", function () {
      $(".side_nav").slideToggle(350);
      $("i", this).toggleClass("bi-list bi-x")
    });
  
    
    $(".carousel").carousel({
      interval: 2500,
    });
  });
  
  $("#skills_search").on("search",function () {
    let searchValue = $("#skills_search").val();
    let newElement =
      '<div class="skills_item"><p>' + searchValue + "</p></div>";
    $(".skills_items").append(newElement);
  });