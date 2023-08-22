jQuery(document).ready(function ($) {
  $(".search-icon").unbind("click");

  $(".search-icon").click(function (e) {
    e.stopImmediatePropagation();

    $(".search-bar").toggle("slow");
    $("input[type='text']").focus();
    console.log("test");
  });
});
