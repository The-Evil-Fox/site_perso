<header id="navbar" aria-label="Menu de navigation principal">
    <div class="content">
        <a class="header-title" href=""><img class="logo" src="assets/TheEvilFoxLogo.png" alt="développeur web valenciennes Steven Durieux">Steven Durieux - Développeur web</a>
        <nav id="topnav">
            <ul>
                <li>
                    <a href="javascript:void(0)" title="Activer le mode dyslexie" onclick="dyslexie()">Dyslexie</a>
                </li>
                <li>
                    <a href="javascript:void(0)" onclick="generateContent('home')"><i class="fas fa-home"></i>Accueil</a>
                </li>
                <li>
                    <a href="javascript:void(0)"onclick="generateContent('contact')"><i class="far fa-envelope"></i>Contact</a>
                </li>
            </ul>
        </nav>
    </div>
</header>
<!-- End navbar -->
<header id="mobilenav" aria-label="Menu de navigation principal">
    <div class="content">
        <a class="header-title" href=""><img class="logo" src="assets/TheEvilFoxLogo.png" alt="développeur web valenciennes Steven Durieux"></a>
        <span id="mobilenavbutton" onclick="showMobileNavMenu()"><i class="fas fa-bars"></i></span>
        <nav id="mobilenavigationmenu">
            <ul>
                <li>
                    <a href="javascript:void(0)" onclick="generateContent('home')"><i class="fas fa-home"></i>Accueil</a>
                </li>
                <li>
                    <a href="javascript:void(0)"onclick="generateContent('contact')"><i class="far fa-envelope"></i>Contact</a>
                </li>
            </ul>
        </nav>
    </div>
</header>
<!-- End responsive navbar -->