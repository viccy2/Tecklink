$(function () {
  // Icon Toggler
  $(".bi-envelope-check").click(function () {
    $(".leftSide").css({
      display: "unset",
    });
    $(".middle").css({
      display: "none",
    });
    $(".rightSide").css({
      display: "none",
    });
  });

  $(".bi-chat-square-text").click(function () {
    $(".leftSide").css({
      display: "none",
    });
    $(".middle").css({
      display: "unset",
    });
    $(".rightSide").css({
      display: "none",
    });
  });

  $(".bi-people").click(function () {
    $(".leftSide").css({
      display: "none",
    });
    $(".middle").css({
      display: "none",
    });
    $(".rightSide").css({
      display: "unset",
    });
  });
});
