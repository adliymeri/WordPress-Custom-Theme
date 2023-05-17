'use strict';

document.addEventListener('DOMContentLoaded', function () {
  console.log('Hello Bulma!');
});
document.addEventListener('DOMContentLoaded', function () {

  // Get all "navbar-burger" elements
  var $navbarBurgers = Array.prototype.slice.call(document.querySelectorAll('.navbar-burger'), 0);

  // Add a click event on each of them
  $navbarBurgers.forEach(function (el) {
    el.addEventListener('click', function () {

      // Get the target from the "data-target" attribute
      var target = el.dataset.target;
      var $target = document.getElementById(target);

      // Toggle the "is-active" class on both the "navbar-burger" and the "navbar-menu"
      el.classList.toggle('is-active');
      $target.classList.toggle('is-active');
    });
  });
});

var accordionItemHeaders = document.querySelectorAll(".accordion-item-header");

accordionItemHeaders.forEach(function (accordionItemHeader) {
  accordionItemHeader.addEventListener("click", function (event) {
    accordionItemHeader.classList.toggle("active");
  });
});

// Slider JS

var observer = new IntersectionObserver(function (entries) {
  entries.forEach(function (entry) {
    var square = entry.target.querySelector('.sq-1');

    if (entry.isIntersecting) {
      square.classList.add('slide');
      return; // if we added the class, exit the function
    }

    // We're not intersecting, so remove the class!
    square.classList.remove('slide');
  });
});

observer.observe(document.querySelector('.wrapper'));

var observer2 = new IntersectionObserver(function (entries) {
  entries.forEach(function (entry) {
    var square2 = entry.target.querySelector('.sq-3');

    if (entry.isIntersecting) {
      square2.classList.add('slide-2');
      return; // if we added the class, exit the function
    }

    // We're not intersecting, so remove the class!
    square2.classList.remove('slide-2');
  });
});

observer2.observe(document.querySelector('.wrapper-2'));

var observer3 = new IntersectionObserver(function (entries) {
  entries.forEach(function (entry) {
    var square3 = entry.target.querySelector('.sq-1');

    if (entry.isIntersecting) {
      square3.classList.add('slide-3');
      return; // if we added the class, exit the function
    }

    // We're not intersecting, so remove the class!
    square3.classList.remove('slide-3');
  });
});

observer3.observe(document.querySelector('.wrapper-3'));

var observer4 = new IntersectionObserver(function (entries) {
  entries.forEach(function (entry) {
    var square4 = entry.target.querySelector('.sq-3');

    if (entry.isIntersecting) {
      square4.classList.add('slide-3');
      return; // if we added the class, exit the function
    }

    // We're not intersecting, so remove the class!
    square4.classList.remove('slide-3');
  });
});

observer4.observe(document.querySelector('.wrapper-4'));