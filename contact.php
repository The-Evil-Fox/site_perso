<section id="contact">
    <header class="title">
        <h1>Me contacter</h1>
    </header>
    <form id="formContact">
        <p>
            Laissez moi vos coordonnées en m'expliquant votre projet en quelques lignes et je me ferais un plaisir de revenir vers vous dès que possible !
        </p>
        <ul>
            <li>
                <label for="username">Votre nom</label>
                <div class="input-container">
                    <input type="text" name="username" id="username" aria-label="Insérer votre nom." aria-required="true" aria-invalid="true" required>
                </div>
            </li>
            <li>
                <label for="usermail">Votre adresse e-mail</label>
                <div class="input-container">
                    <input type="email" name="usermail" id="usermail" aria-label="Insérer votre adresse e-mail." aria-required="true" aria-invalid="true" required>
                </div>
            </li>
            <li>
                <label for="usermessage">Votre message</label>
                <div class="input-container">
                    <textarea name="usermessage" id="usermessage" placeholder="Veuillez insérer votre message... (15 caractères minimum et 1500 caractères maximum)" aria-label="Insérer votre message." aria-required="true" aria-invalid="true" required></textarea>
                </div>
            </li>
        </ul>
        <div id='alert-container'>

        </div>
        <div id="form-validation-container">
            <button id="button-send" type="button" onclick="sendContact()">Envoyer mon message</button>
        </div>
    </form>
</section>
<?php include('config/footer.php'); ?>
<?php include('config/copyright.php'); ?>