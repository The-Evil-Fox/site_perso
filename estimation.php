<section id="estimation">
    <header class="title">
        <h1>Demande de devis</h1>
    </header>
    <form id="formContact">
        <p>
            Je vous propose de répondre à ces quelques questions qui me permettront d'avoir une idée claire de votre projet afin d'établir un devis précis.
        </p>
        <p>
            Certaines questions vous posent problème ? Pas de souci ! Je suis là pour vous épauler, nous y reviendrons ensemble plus tard.
        </p>
        <p>Les champs marqués d'un astérisque (*) sont optionnels.</p>
        <div class="form-part">
            <h3>Parlez-moi de vous</h3>
            <ul>
                <li>
                    <label for="username">Votre nom</label>
                    <div class="input-container">
                        <input type="text" name="username" id="username" placeholder="Veuillez insérer votre nom..." aria-label="Insérer votre nom." aria-required="true" aria-invalid="true" required>
                    </div>
                </li>
                <li>
                    <label for="userrole">Votre fonction dans l'entreprise</label>
                    <div class="input-container">
                        <input type="text" name="userrole" id="userrole" placeholder="Veuillez insérer votre fonction au sein de l'entreprise..." aria-label="Insérer votre fonction au sein de l'entreprise." aria-required="true" aria-invalid="true" required>
                    </div>
                </li>
                <li>
                    <label for="usermail">Votre adresse e-mail</label>
                    <div class="input-container">
                        <input type="email" name="usermail" id="usermail" placeholder="Veuillez insérer votre adresse e-mail..." aria-label="Insérer votre adresse e-mail." aria-required="true" aria-invalid="true" required>
                    </div>
                </li>
                <li>
                    <label for="usertelnumber">Votre numéro de téléphone*</label>
                    <div class="input-container">
                        <input type="tel" name="usertelnumber" id="usertelnumber" pattern="^((\+\d{1,3}(-| )?\(?\d\)?(-| )?\d{1,5})|(\(?\d{2,6}\)?))(-| )?(\d{3,4})(-| )?(\d{4})(( x| ext)\d{1,5}){0,1}$" placeholder="Insérer ici votre numéro de téléphone..." aria-label="Insérer votre numéro de téléphone (optionnel)." aria-required="false" aria-invalid="true">
                    </div>
                </li>
            </ul>
        </div>
        <div class="form-part">
            <h3>Quelques mots sur votre entreprise</h3>
            <ul>
                <li>
                    <label for="usersocietyname">Nom de l'entreprise</label>
                    <div class="input-container">
                        <input type="text" name="usersocietyname" id="usersocietyname" placeholder="Veuillez insérer le nom de votre entreprise..." aria-label="Insérer le nom de votre entreprise." aria-required="true" aria-invalid="true" required>
                    </div>
                </li>
                <li>
                    <label for="usersocietywebsite">Lien vers votre site web (si déjà existant)*</label>
                    <div class="input-container">
                        <input type="url" name="usersocietywebsite" id="usersocietywebsite" placeholder="Insérer ici le lien vers votre site web (si déjà existant)..." aria-label="Insérer le lien vers votre site web si déjà existant." aria-required="false" aria-invalid="true">
                    </div>
                </li>
                <li>
                    <label for="usersocietydescription">Description de l'entreprise</label>
                    <div class="input-container">
                        <textarea name="usersocietydescription" id="usersocietydescription" placeholder="Veuillez insérer la description de votre entreprise... (1500 caractères maximum)" aria-label="Insérer la description de votre entreprise." aria-required="true" aria-invalid="true" required></textarea>
                    </div>
                </li>
            </ul>
        </div>
        <div class="form-part">
            <h3>Réflechissons à votre futur site web</h3>
            <ul>
                <li>
                    <label for="usersocietyobjectives">Objectif(s) de votre site</label>
                    <div class="input-container">
                        <textarea name="usersocietyobjectives" id="usersocietyobjectives" placeholder="Veuillez insérer la description des objectifs de votre entreprise... (1500 caractères maximum)" aria-label="Insérer la description des objectifs de votre entreprise." aria-required="true" aria-invalid="true" required></textarea>
                    </div>
                </li>
                <li>
                    <label for="usersocietytargets">A qui doit s'adresser votre site web ?</label>
                    <div class="input-container">
                        <textarea name="usersocietytargets" id="usersocietytargets" placeholder="Veuillez insérer la description du public visé par votre site web... (1500 caractères maximum)" aria-label="Insérer le public visé par votre site web." aria-required="true" aria-invalid="true" required></textarea>
                    </div>
                </li>
                <li>
                    <label for="userbudget">Votre budget tout compris pour la réalisation du site (comprenant l'hébergement et l'achat éventuel d'illustrations)</label>
                    <div class="input-container">
                        <input type="number" name="userbudget" id="userbudget" aria-label="Insérer votre budget tout compris pour la réalisation du site (comprenant l'hébergement et l'achat éventuel d'illustrations)." aria-required="true" aria-invalid="true" value="0" required> €
                    </div>
                </li>
            </ul>
        </div>
        <div class="form-part">
            <h3>Quid de vos concurrents ?</h3>
            <ul>
                <li>
                    <label for="userpleasingcompetitor">Sites concurrents qui vous plaisent, et pourquoi*</label>
                    <div class="input-container">
                        <textarea name="userpleasingcompetitor" id="userpleasingcompetitor" placeholder="Insérer ici la description des sites concurrents qui vous plaisent et pourquoi... (1500 caractères maximum)" aria-label="Insérer la description des sites concurrents qui vous plaisent et pourquoi." aria-required="false" aria-invalid="true"></textarea>
                    </div>
                </li>
                <li>
                    <label for="userunpleasantcompetitor">Sites concurrents qui vous déplaisent, et pourquoi*</label>
                    <div class="input-container">
                        <textarea name="userunpleasantcompetitor" id="userunpleasantcompetitor" placeholder="Insérer ici la description des sites concurrents qui vous déplaisent et pourquoi... (1500 caractères maximum)" aria-label="Insérer la description des sites concurrents qui vous déplaisent et pourquoi." aria-required="false" aria-invalid="true"></textarea>
                    </div>
                </li>
            </ul>
        </div>
        <div class="form-part">
            <h3>Souhaitez-vous ajouter quelque chose ?</h3>
            <ul>
                <li>
                    <label for="userclarifications">Précisions éventuelles ou questions*</label>
                    <div class="input-container">
                        <textarea name="userclarifications" id="userclarifications" placeholder="Insérer ici vos précisions ou vos questions éventuelles... (1500 caractères maximum)" aria-label="Insérer vos précisions ou vos questions éventuelles." aria-required="false" aria-invalid="true"></textarea>
                    </div>
                </li>
            </ul>
        </div>
        <div id='alert-container'>

        </div>
        <div id="form-validation-container">
            <button id="button-send" type="button" onclick="sendEstimation()">Envoyer ma demande de devis</button>
        </div>
    </form>
</section>
<?php include('config/footer.php'); ?>
<?php include('config/copyright.php'); ?>