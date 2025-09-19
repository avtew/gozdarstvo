import.meta.glob([
  '../images/**',
  '../fonts/**',
]);

const header = document.getElementById('header');

window.addEventListener("scroll", transition);

function transition() {
  if (window.pageYOffset > 0) {
    header.classList.add("transition");
  } else {
    header.classList.remove("transition");
  }
}