const menuIcon = document.querySelector('.hamburger-menu');
const navbar = document.querySelector('.navbar');

menuIcon.addEventListener('click', ()   =>  {
    navbar.classList.toggle("change");
});


let spinnerWrapper = document.querySelector('.spinner-wrapper');
    window.addEventListener('load', function () {
        spinnerWrapper.parentElement.removeChild(spinnerWrapper);
});
