jQuery(document).ready(function ($) {
  $(".menu-item").click(function (event) {
    var isMenuItem = $(event.target).is(".menu-item");
    if (isMenuItem) {
      $(".sub-menu", this).toggle("slow");
    }
  });
});
