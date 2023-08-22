// SPLIDE SLIDE SHOW SERVICES SECTION
document.addEventListener("DOMContentLoaded", function () {
  new Splide("#testimonial-splide", {
    type: "loop",
    perPage: 1,
    perMove: 1,
    arrows: true,
    pagination: false,
  }).mount();
});
