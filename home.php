<section id="introduction">
    <div class="content">
        <div class="logo">
        <img src="assets/TheEvilFoxLogo.png" alt="Développeur web/web mobile fullstack Valenciennes nord 59 steven durieux">
        </div>
    </div>
    <h1>Steven Durieux</h1>
    <p>Conception et déploiement de sites internet sur mesure, accessibles & modernes</p>
    <button type="button" id="estimationLinkButton" onclick="generateContent('estimation')">Demander un devis</button>
</section>
<section id="main">
    <div class="content">
        <header class="title">
            <h1>Conception et déploiement de sites internet en France et en Belgique</h1>
        </header>
        <h3>Un accompagnement à toutes les étapes de votre projet web</h3>
        <ul>
            <li><div class="puce"><i class="fab fa-connectdevelop"></i></div>Conception et recherche de fonctionnalités en adéquation avec vos objectifs.</li>
            <li><div class="puce"><i class="fas fa-paint-brush"></i></div>Programmation et développement conformes aux standards. Créations graphiques originales ou adaptation de template en fonction du budget.</li>
            <li><div class="puce"><i class="fas fa-cog"></i></div>Et après la mise en ligne ? Besoin d'un accompagnement, d'une aide à la rédaction ou à la maintenance technique, d'aller plus loin dans le référencement ?</li>
        </ul>
        <!-- <h3>Pourquoi me choisir ?</h3>
        <p>
            Pratiquant le développement web depuis plus de deux ans et étant reconnu par l'Etat, je sais écouter mon client et l'accompagner tout au long de la réalisation de son/ses projet(s).
        </p>
        <p>
            J'ai déjà participer à la réalisation de bon nombre de sites et d'applications web que ce soit dans une équipe ou en tant qu'indépendant.</div>
        </p> -->
    </div>
</section>
<section id="services">
    <header class="title">
        <h1>Services</h1>
    </header>
    <div id="cards">
        <div id="conception-card">
            <div class="card-content">
                <img src="assets/conception.png" alt="conception image developpement web steven durieux développeur web valenciennes 59 nord">
                <h3>Conception</h3>
                <p>Positionnement, fonctionnalités, stratégie: un projet web complet.</p>
            </div>
            <div id="conception-link" class="link-container" onclick="generateContent('conception')">
                <a href="javascript:void(0)">En savoir plus</a>
            </div>
        </div>
        <div id="hosting-card">
            <div class="card-content">
                <img src="assets/serveurs.png" alt="serveurs image developpement web steven durieux développeur web valenciennes 59 nord">
                <h3>Hébergement</h3>
                <p>Adaptez votre hébergement aux besoins réels de votre site.</p>
            </div>
            <div id="hosting-link" class="link-container" onclick="generateContent('hebergement')">
                <a href="javascript:void(0)">En savoir plus</a>
            </div>
        </div>
        <div id="responsive-card">
            <div class="card-content">
                <img src="assets/phone.png" alt="phone image developpement web steven durieux développeur web valenciennes 59 nord">
                <h3>Design web responsive</h3>
                <p>Adaptation multi-supports de votre site internet.</p>
            </div>
            <div id="responsive-link" class="link-container" onclick="generateContent('responsive')">
                <a href="javascript:void(0)">En savoir plus</a>
            </div>
        </div>
    </div>
</section>
<?php include('config/footer.php'); ?>
<?php include('config/copyright.php'); ?>