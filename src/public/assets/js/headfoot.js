// hamburgermenu
const hamburgerIcon = document.getElementById('hamburgerIcon');
const navMenu = document.querySelector('.navMenu');

function toggleMenu() {
    navMenu.classList.toggle('active');
}

hamburgerIcon.addEventListener('click', () => {
    toggleMenu();
});