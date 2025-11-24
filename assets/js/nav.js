function showHamburgerNav(event) {
    event.preventDefault();

    const hamburgerNav = document.querySelector('.hamburger-nav');
    const hamburgerButton = document.querySelector('.hamburger-button');
    const closeButton = document.querySelector('.close-button');

    hamburgerNav.style.display = 'flex';
    hamburgerButton.style.display = 'none';
    closeButton.style.display = 'block';
}

function hideHamburgerNav(event) {
    event.preventDefault();

    const hamburgerNav = document.querySelector('.hamburger-nav');
    const hamburgerButton = document.querySelector('.hamburger-button');
    const closeButton = document.querySelector('.close-button');

    hamburgerNav.style.display = 'none';
    hamburgerButton.style.display = 'block';
    closeButton.style.display = 'none';
}
