// Sidenav
document.addEventListener("DOMContentLoaded", function () {
  var elems = document.querySelectorAll(".sidenav");
  var instances = M.Sidenav.init(elems, { edge: "left", draggable: true });
});

// Dropdown trigger
document.addEventListener("DOMContentLoaded", function () {
  var elems = document.querySelectorAll(".dropdown-trigger");
  var instances = M.Dropdown.init(elems, {
    closeOnClick: true,
    alignment: "left",
  });
});
// Slider
// var instance = M.Carousel.init({
//   fullWidth: true,
// });
document.addEventListener("DOMContentLoaded", function () {
  var elems = document.querySelectorAll(".carousel");
  var instances = M.Carousel.init(elems, {});
});

// Glider JavaScript
new Glider(document.querySelector(".glider"), {
  slidesToShow: 1,
  draggable: true,
  dots: "#dots",
  arrows: {
    prev: ".glider-prev",
    next: ".glider-next",
  },
});
