$(function () {
  $(".toggler").on("click", function () {
    $(".side_nav").slideToggle(350);
    $("i", this).toggleClass("bi-list bi-x");
  });

  // ======Registration Button Function======
  $("#company-btn").click(function () {
    $(".user-form").addClass("non-active");
    $(".company-form").removeClass("non-active");
    $("#company-btn").css({
      color: "#00aae5"
    });
    $("#user-btn").css({ color: "#000000", filter: "none", cursor: "pointer" });
  });

  $("#user-btn").click(function () {
    $(".company-form").addClass("non-active");
    $(".user-form").removeClass("non-active");
    $("#user-btn").css({
      color: "#00aae5"
    });
    $("#company-btn").css({
      color: "#000000",
      filter: "none",
      cursor: "pointer",
    });
  });
  // ========================================

  
});
