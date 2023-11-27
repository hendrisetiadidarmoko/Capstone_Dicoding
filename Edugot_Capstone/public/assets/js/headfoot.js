// hamburgermenu
const hamburgerIcon = document.getElementById('hamburgerIcon');
const navMenu = document.querySelector('.navMenu');

function toggleMenu() {
    navMenu.classList.toggle('active');
    searchbar.classList.remove('active');
}

hamburgerIcon.addEventListener('click', () => {
    toggleMenu();
    if (searchbar.classList.contains('active')) {
        searchbar.classList.remove('active');
    }
});

// searchbar 
const searchbar = document.querySelector('.search');
const searchIcon = document.getElementById('iconsearch');
function toggleserachbar() {
    searchbar.classList.toggle('active');
    navMenu.classList.remove('active');
}
searchIcon.addEventListener('click', () => {
    toggleserachbar();
    if (navMenu.classList.contains('active')) {
        navMenu.classList.remove('active');
    }
}); 