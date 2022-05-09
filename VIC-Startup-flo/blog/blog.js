const hamburger = document.querySelector('.hamburger');
const navbar = document.querySelector('.navbar');

hamburger.addEventListener('click', mobileMenu);

function mobileMenu(){
    hamburger.classList.toggle('active');
    navbar.classList.toggle('active');
}