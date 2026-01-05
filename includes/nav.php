<head>
    <link rel="stylesheet" href="/assets/css/nav.css">
</head>

<nav>
    <div class="nav-container">

        <a href="/" class="logo-a">
            <img src="/assets/images/logo/logo.svg" alt="Logo" class="navlogo" draggable="false">
        </a>

        <ul class="desktop-nav">
            <li><a href="/">Domů</a></li>
            <li><a href="/o-nas">O Nás</a></li>
            <li class="hamburger-button" onclick=showHamburgerNav(event)><a href="#"><svg xmlns="http://www.w3.org/2000/svg" height="40px" viewBox="0 -960 960 960" width="40px" fill="rgb(46, 42, 57)"><path d="M120-240v-80h720v80H120Zm0-200v-80h720v80H120Zm0-200v-80h720v80H120Z"/></svg></a></li>
            <li class="close-button" onclick=hideHamburgerNav(event)><a href="#"><svg xmlns="http://www.w3.org/2000/svg" height="40px" viewBox="0 -960 960 960" width="40px" fill="rgb(46, 42, 57)"><path d="m256-200-56-56 224-224-224-224 56-56 224 224 224-224 56 56-224 224 224 224-56 56-224-224-224 224Z"/></svg></a></li>
        </ul>

    </div>

    <ul class="hamburger-nav">
        <li><a href="/">Domů</a></li>
        <li><a href="/o-nas">O Nás</a></li>
    </ul>

    <div class="overlay"></div>
    
</nav>

<script src="assets/js/nav.js"></script>