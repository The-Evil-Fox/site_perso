<section id="responsive">
    <?php include('config/header_services.php'); ?>
    <header class="title">
        <h1>Responsive</h1>
    </header>
    <p>
        Le Responsive Web Design (RWD) est une technique de conception d'interface digitale qui fait en sorte que l'affichage d'une quelconque page 
        d'un site s'adapte de façon automatique à la taille de l'écran du terminal qui le lit.
    </p>
    <h3><strong>Comment</strong> créer un site web responsive ?</h3>
    <p>
        Le principe est simple: il suffit d'utiliser ce qu'on appelle des media queries dans les CSS pour interroger le navigateur pour connaitre la taille
        en pixels de la zone d'affichage, le type d'écran, son orientation, etc... Puis de déterminer les paramètres d'affichage à utiliser en fonction
        de ces résultats.
        Par exemple, le bloc B est à gauche du bloc A si l'affichage sur l'écran est supérieur à 1000 pixels, mais il passe en dessous dans le cas contraire.
        Mais le bloc C peut aussi disparaitre car sa fonction n'est pas jugée utile sur les mobiles. Le bloc D quant à lui peut devenir le bloc D' avec de nouveaux contenus, etc...
        En pratique, une mise en page fluide et moderne requière une bonne connaissances de ces règles et du CSS 3 en général, et le code d'un ancien site doit parfois être
        entièrement réécrit pour que son affichage soit optimal pour touts les types d'écrans. Le repositionnement et la personnalisation des éléments d'un site 
        par rapport au média qui est utilisé par le visiteur ont fait de l'optimisation multi-supports un nouveau besoin, en tout cas pour son ampleur.
    </p>
    <p>
        Il faut savoir que <strong>50.1 % de l'usage global d'internet se fait sur mobile.</strong>
    </p>
    <h3>Peut-on <strong>rendre "responsive"</strong> un site existant ?</h3>
    <p>
        Cela dépend de votre site. Une adaptation simple réalisable en quelques heures peut aussi devenir un vrai casse-tête pour des sites plus anciens,
        selon la technologie qui est utilisée, le language de programmation, le design. Il faut dans tous les cas faire une étude pour la solution technique
        la plus appropriée : refonte graphique complète, réintégration dans un CMS, utilisation d'un template, simple modification des CSS, etc... De multiples cas de figure sont possibles.
    </p>
    <h3><strong>Combien</strong> coûte une adaptation responsive ?</h3>
    <p>
        L'éventail est très large et dépend de la situation : lors de la conception d'un nouveau site, vous pouvez utiliser un template existant déjà conforme aux exigeances du responsive
        web design et le personnaliser pour quelques dizaines d'euros. Pour un site beaucoup plus ancien et complexe, avec un nombre important de pages et de modules,
        la personnalisation responsive peut prendre plusieurs jours. Dans touts les cas, un rapide audit de votre site vous permettra d'avoir un chiffrage précis
        et d'évaluer la faisabilité d'une transition efficace.
    </p>
</section>
<?php include('config/footer.php'); ?>
<?php include('config/copyright.php'); ?>