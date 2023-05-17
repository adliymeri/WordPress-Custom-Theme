document.addEventListener('DOMContentLoaded', () => {
  console.log('Hello Bulma!');
});
document.addEventListener('DOMContentLoaded', () => {

  // Get all "navbar-burger" elements
  const $navbarBurgers = Array.prototype.slice.call(document.querySelectorAll('.navbar-burger'), 0);

  // Add a click event on each of them
  $navbarBurgers.forEach( el => {
    el.addEventListener('click', () => {

      // Get the target from the "data-target" attribute
      const target = el.dataset.target;
      const $target = document.getElementById(target);

      // Toggle the "is-active" class on both the "navbar-burger" and the "navbar-menu"
      el.classList.toggle('is-active');
      $target.classList.toggle('is-active');

    });
  });

});

const accordionItemHeaders = document.querySelectorAll(".accordion-item-header");

accordionItemHeaders.forEach(accordionItemHeader => {
  accordionItemHeader.addEventListener("click", event => {
    accordionItemHeader.classList.toggle("active");
  })
});

// Slider JS

const observer = new IntersectionObserver(entries => {
  entries.forEach(entry => {
    const square = entry.target.querySelector('.sq-1');

    if (entry.isIntersecting) {
      square.classList.add('slide');
	  return; // if we added the class, exit the function
    }

    // We're not intersecting, so remove the class!
    square.classList.remove('slide');
  });
});

observer.observe(document.querySelector('.wrapper'));

const observer2 = new IntersectionObserver(entries => {
  entries.forEach(entry => {
    const square2 = entry.target.querySelector('.sq-3');

    if (entry.isIntersecting) {
      square2.classList.add('slide-2');
	  return; // if we added the class, exit the function
    }

    // We're not intersecting, so remove the class!
    square2.classList.remove('slide-2');
  });
});

observer2.observe(document.querySelector('.wrapper-2'));

const observer3 = new IntersectionObserver(entries => {
  entries.forEach(entry => {
    const square3 = entry.target.querySelector('.sq-1');

    if (entry.isIntersecting) {
      square3.classList.add('slide-3');
	  return; // if we added the class, exit the function
    }

    // We're not intersecting, so remove the class!
    square3.classList.remove('slide-3');
  });
});

observer3.observe(document.querySelector('.wrapper-3'));

const observer4 = new IntersectionObserver(entries => {
  entries.forEach(entry => {
    const square4 = entry.target.querySelector('.sq-3');

    if (entry.isIntersecting) {
      square4.classList.add('slide-3');
	  return; // if we added the class, exit the function
    }

    // We're not intersecting, so remove the class!
    square4.classList.remove('slide-3');
  });
});

observer4.observe(document.querySelector('.wrapper-4'));







