function showHamburgerNav(event) {
    event.preventDefault();

    const hamburgerNav = document.querySelector('.hamburger-nav');
    const hamburgerButton = document.querySelector('.hamburger-button');
    const closeButton = document.querySelector('.close-button');
    const overlay = document.querySelector('.overlay');

    hamburgerNav.classList.add('active');
    overlay.classList.add('active');

    hamburgerButton.style.display = 'none';
    closeButton.style.display = 'block';
}

function hideHamburgerNav(event) {
    event.preventDefault();

    const hamburgerNav = document.querySelector('.hamburger-nav');
    const hamburgerButton = document.querySelector('.hamburger-button');
    const closeButton = document.querySelector('.close-button');
    const overlay = document.querySelector('.overlay');

    hamburgerNav.classList.remove('active');
    overlay.classList.remove('active');

    hamburgerButton.style.display = 'block';
    closeButton.style.display = 'none';
}
