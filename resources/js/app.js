import.meta.glob([
  '../images/**',
  '../fonts/**',
]);

let isOpen = false;
const header = document.getElementById('header');
const burger = document.querySelector('.burger');
const nav = document.querySelector('.menu-container');
const logo = document.querySelector('.header-logo');
const menuItem = document.querySelectorAll('.menu-item');

window.addEventListener("scroll", transition);
burger.addEventListener('click', toggleMenu);
menuItem.forEach((el) => el.addEventListener('click', closeMenu));

function transition() {
  if (window.pageYOffset > 0) {
    header.classList.add("transition");
  } else {
    header.classList.remove("transition");
  }
}

function toggleMenu() {
  burger.classList.toggle('open');
  nav.classList.toggle('open');
  if(!isOpen) {
    isOpen = true; 
    logo.style.display = 'none'
    document.body.style.overflow = 'hidden'
    document.getElementsByClassName('shade')[0].style.display = 'block';
  } else {
    isOpen = false;
    logo.style.display = 'block'
    document.body.style.overflow = 'visible'
    document.getElementsByClassName('shade')[0].style.display = 'none';
  }
}

function closeMenu() {
  isOpen = false;
  burger.classList.remove('open');
  nav.classList.remove('open');
  logo.style.display = 'block'
  document.body.style.overflow = 'visible';
  document.getElementsByClassName('shade')[0].style.display = 'none';
}