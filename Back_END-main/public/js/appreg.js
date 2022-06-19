$(function () {
  $(".toggler").on("click", function () {
    $(".side_nav").slideToggle(350);
    $("i", this).toggleClass("bi-list bi-x");
  });

  $(".carousel").carousel({
    interval: 2500,
  });


  // ======Registration Button Function======
  $("#company-btn").click(function () {
    $(".user-form").addClass("non-active");
    $(".company-form").removeClass("non-active");
    $(".user_btn").addClass(".non-active");
    $(".company_btn").removeClass(".non-active");
    $("#company-btn").css({
      color: "#00aae5",
      filter: "drop-shadow(0px 4px 4px rgba(0, 0, 0, 0.2))",
    });
    $("#user-btn").css({ color: "#000000", filter: "none", cursor: "pointer" });
  });

  $("#user-btn").click(function () {
    $(".company-form").addClass("non-active");
    $(".user-form").removeClass("non-active");
    $(".company_btn").addClass(".non-active");
    $(".user_btn").removeClass(".non-active");

    $("#user-btn").css({
      color: "#00aae5",
      filter: "drop-shadow(0px 4px 4px rgba(0, 0, 0, 0.2))",
    });
    $("#company-btn").css({
      color: "#000000",
      filter: "none",
      cursor: "pointer",
    });
  });
  // ========================================
});
