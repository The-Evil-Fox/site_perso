<?php

    require_once('../config/database.php');

    if(isset($_POST['username']) && !empty($_POST['username']) && isset($_POST['usermail']) && !empty($_POST['usermail']) && isset($_POST['usermessage']) && !empty($_POST['usermessage'])) {

        $username = htmlspecialchars($_POST['username']);
        $usermail = htmlspecialchars($_POST['usermail']);
        $usermessage = htmlspecialchars($_POST['usermessage']);

        $insertContact = $db->prepare('INSERT INTO Contact(Name, Email, Message) VALUES(:name, :email, :message)');
        $insertContact->bindParam(':name', $username, PDO::PARAM_STR);
        $insertContact->bindParam(':email', $usermail, PDO::PARAM_STR);
        $insertContact->bindParam(':message', $usermessage, PDO::PARAM_STR);
        $insertContact->execute();

        $validationMessage = "<i class='fas fa-check'></i>Votre message a bien été reçu !";

    } else {

        $errorMessage = "Erreur : Veuillez insérer votre nom, votre adresse e-mail et votre message !";

    }

    if(isset($errorMessage)) {

        echo $errorMessage;

    } else if(isset($validationMessage)) {

        echo $validationMessage;

    }

    $db = null;

?>