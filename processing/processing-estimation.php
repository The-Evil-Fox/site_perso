<?php

    require_once('../config/database.php');

    // First checks if all the required fields have been filled and submitted by the user.

    if(isset($_POST['username']) && !empty($_POST['username']) && isset($_POST['usermail']) && !empty($_POST['usermail']) && isset($_POST['userrole']) && !empty($_POST['userrole']) && isset($_POST['usersocietyname']) && !empty($_POST['usersocietyname']) && isset($_POST['usersocietydescription']) && !empty($_POST['usersocietydescription']) && isset($_POST['usersocietyobjectives']) && !empty($_POST['usersocietyobjectives']) && isset($_POST['usersocietytargets']) && !empty($_POST['usersocietytargets']) && isset($_POST['userbudget']) && !empty($_POST['userbudget'])) {

        // Defines all the existing user inputs the server has retrieved from ajax.

        $username = htmlspecialchars($_POST['username']);
        $usermail = htmlspecialchars($_POST['usermail']);
        $userrole = htmlspecialchars($_POST['userrole']);
        $usersocietyname = htmlspecialchars($_POST['usersocietyname']);
        $usersocietydescription = htmlspecialchars($_POST['usersocietydescription']);
        $usersocietyobjectives = htmlspecialchars($_POST['usersocietyobjectives']);
        $usersocietytargets = htmlspecialchars($_POST['usersocietytargets']);
        $userbudget = intval(htmlspecialchars($_POST['userbudget']));

        // Checks the existence of all the optional field and store them into a new variable

        if(isset($_POST['usertelnumber']) && !empty($_POST['usertelnumber'])) {

            $usertelnumber = htmlspecialchars($_POST['usertelnumber']);

        } else {

            $usertelnumber = null;

        }

        if(isset($_POST['usersocietywebsite']) && !empty($_POST['usersocietywebsite'])) {

            $usersocietywebsite = htmlspecialchars($_POST['usersocietywebsite']);

        } else {

            $usersocietywebsite = null;

        }
        
        if(isset($_POST['userpleasingcompetitor']) && !empty($_POST['userpleasingcompetitor'])) {

            $userpleasingcompetitor = htmlspecialchars($_POST['userpleasingcompetitor']);

        } else {

            $userpleasingcompetitor = null;

        }

        if(isset($_POST['userunpleasantcompetitor']) && !empty($_POST['userunpleasantcompetitor'])) {

            $userunpleasantcompetitor = htmlspecialchars($_POST['userunpleasantcompetitor']);

        } else {

            $userunpleasantcompetitor = null;

        }

        if(isset($_POST['userclarifications']) && !empty($_POST['userclarifications'])) {

            $userclarifications = htmlspecialchars($_POST['userclarifications']);

        } else {

            $userclarifications = null;

        }

        // Proccessing data.

        $insertEstimation = $db->prepare('INSERT INTO Estimation(Username, Email, UserFunction, SocietyName, 
            SocietyDescription, SocietyObjectives, SocietyTargets, SocietyBudget, Phone, Website, 
            PleasingCompetitors, UnpleasantCompetitors, Clarifications) 
            VALUES(:username, :email, :userfunction, :societyname, :societydescription, :societyobjectives, :societytargets, 
            :societyBudget, :phone, :website, :pleasingcompetitors, :unpleasantcompetitors, :clarifications)');
        $insertEstimation->bindParam(':username', $username, PDO::PARAM_STR);
        $insertEstimation->bindParam(':email', $usermail, PDO::PARAM_STR);
        $insertEstimation->bindParam(':userfunction', $userrole, PDO::PARAM_STR);
        $insertEstimation->bindParam(':societyname', $usersocietyname, PDO::PARAM_STR);
        $insertEstimation->bindParam(':societydescription', $usersocietydescription, PDO::PARAM_STR);
        $insertEstimation->bindParam(':societyobjectives', $usersocietyobjectives, PDO::PARAM_STR);
        $insertEstimation->bindParam(':societytargets', $usersocietytargets, PDO::PARAM_STR);
        $insertEstimation->bindParam(':societyBudget', $userbudget, PDO::PARAM_STR);

        if(is_null($usertelnumber)) {

            $insertEstimation->bindParam(':phone', $usertelnumber, PDO::PARAM_NULL);

        } else {

            $insertEstimation->bindParam(':phone', $usertelnumber, PDO::PARAM_STR);

        }

        if(is_null($usersocietywebsite)) {

            $insertEstimation->bindParam(':website', $usersocietywebsite, PDO::PARAM_NULL);

        } else {

            $insertEstimation->bindParam(':website', $usersocietywebsite, PDO::PARAM_STR);

        }

        if(is_null($userpleasingcompetitor)) {

            $insertEstimation->bindParam(':pleasingcompetitors', $userpleasingcompetitor, PDO::PARAM_NULL);

        } else {
            
            $insertEstimation->bindParam(':pleasingcompetitors', $userpleasingcompetitor, PDO::PARAM_STR);

        }

        if(is_null($userunpleasantcompetitor)) {

            $insertEstimation->bindParam(':unpleasantcompetitors', $userunpleasantcompetitor, PDO::PARAM_NULL);

        } else {
            
            $insertEstimation->bindParam(':unpleasantcompetitors', $userunpleasantcompetitor, PDO::PARAM_STR);

        }

        if(is_null($userclarifications)) {

            $insertEstimation->bindParam(':clarifications', $userclarifications, PDO::PARAM_NULL);

        } else {
            
            $insertEstimation->bindParam(':clarifications', $userclarifications, PDO::PARAM_STR);

        }

        $insertEstimation->execute();

        $validationMessage = "<i class='fas fa-check'></i>Vos données ont bien été reçu ! Je vous recontacterais très bientôt pour vous proposer un devis précis du coût de ma prestation !";

    } else {

        $errorMessage = "Erreur : Veuillez remplir touts les champs obligatoires !";

    }

    if(isset($errorMessage)) {

        echo $errorMessage;

    } else if(isset($validationMessage)) {

        echo $validationMessage;

    }

    $db = null;

?>