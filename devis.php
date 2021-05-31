<section id="devis">
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
        <div class="form-part">
            <h3>Parlez-moi de vous</h3>
            <ul>
                <li>
                    <label for="username">Votre nom</label>
                    <div class="input-container">
                        <input type="text" name="username" id="username" required>
                    </div>
                </li>
                <li>
                    <label for="userrole">Votre fonction dans l'entreprise</label>
                    <div class="input-container">
                        <input type="text" name="userrole" id="userrole" required>
                    </div>
                </li>
                <li>
                    <label for="usermail">Votre adresse e-mail</label>
                    <div class="input-container">
                        <input type="email" name="usermail" id="usermail" required>
                    </div>
                </li>
                <li>
                    <label for="usertelnumber">Votre numéro de téléphone</label>
                    <div class="input-container">
                        <input type="text" name="usertelnumber" id="usertelnumber" required>
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
                        <input type="text" name="usersocietyname" id="usersocietyname" required>
                    </div>
                </li>
                <li>
                    <label for="usersocietywebsite">Site web (si déjà existant)</label>
                    <div class="input-container">
                        <input type="text" name="usersocietywebsite" id="usersocietywebsite" required>
                    </div>
                </li>
                <li>
                    <label for="usersocietydescription">Description de l'entreprise</label>
                    <div class="input-container">
                        <textarea name="usersocietydescription" id="usersocietydescription" required></textarea>
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
                        <textarea name="usersocietyobjectives" id="usersocietyobjectives" required></textarea>
                    </div>
                </li>
                <li>
                    <label for="usersocietytargerts">A qui doit s'adresser votre futur site ?</label>
                    <div class="input-container">
                        <textarea name="usersocietytargerts" id="usersocietytargerts" required></textarea>
                    </div>
                </li>
                <li>
                    <label for="userbudget">Votre budget tout compris pour la réalisation du site (comprenant l'hébergement et l'achat éventuel d'illustrations)</label>
                    <div class="input-container">
                        <input type="text" name="userbudget" id="usersocietytargerts" required></textarea>
                    </div>
                </li>
            </ul>
        </div>
        <div class="form-part">
            <h3>Quid de vos concurrents ?</h3>
            <ul>
                <li>
                    <label for="userpleasingcompetitor">Sites concurrents qui vous plaisent, et pourquoi</label>
                    <div class="input-container">
                        <textarea name="userpleasingcompetitor" id="userpleasingcompetitor" required></textarea>
                    </div>
                </li>
                <li>
                    <label for="userunpleasantcompetitor">Sites concurrents qui vous déplaisent, et pourquoi</label>
                    <div class="input-container">
                        <textarea name="userunpleasantcompetitor" id="userunpleasantcompetitor" required></textarea>
                    </div>
                </li>
            </ul>
        </div>
        <div class="form-part">
            <h3>Souhaitez-vous ajouter quelque chose ?</h3>
            <ul>
                <li>
                    <label for="userprompt">Précisions éventuelles ou questions</label>
                    <div class="input-container">
                        <textarea name="userprompt" id="userprompt" required></textarea>
                    </div>
                </li>
            </ul>
        </div>
        <button type="button">Envoyer</button>
    </form>
</section>