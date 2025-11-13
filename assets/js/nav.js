function showHamburgerNav(event) {
    event.preventDefault();

    const hamburgerNav = document.querySelector('.hamburger-nav');
    hamburgerNav.style.display = 'flex';
}

function hideHamburgerNav(event) {
    event.preventDefault();

    const hamburgerNav = document.querySelector('.hamburger-nav');
    hamburgerNav.style.display = 'none';
}
