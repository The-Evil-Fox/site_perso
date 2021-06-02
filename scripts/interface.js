// Defines the basic categorie as home when the user lands on the page.

categorie = "home";

// Already Target the responsive navigation menu for functions that modify it.

mobileNavMenu = document.getElementById('mobilenavigationmenu').style;

// Global functions

myFunctions = {
    
    // Show a loading image with a specific class in a specific container.

    showLoading: function(container, imageclass) {

        document.getElementById(container).innerHTML = "<img class="+imageclass+" src='assets/loading.gif'>";

    },

    // Show a error message in the contact form and erases it after 3 seconds.

    showFormMessage: function(message, color) {

        let alertContainer = document.getElementById('alert-container');
        alertContainer.innerHTML = message;
        alertContainer.style.color = color;
        alertContainer.style.display = "block";

        setTimeout(() => {

            alertContainer.innerHTML = "";
            alertContainer.style.color = "unset";
            alertContainer.style.display = "none";

        }, 3000);
        
    }

}

// Changes the font family for people with dislexia for a easier reading.

function dyslexie() {

    var bodyStyle = document.body.style;
    var buttons = document.getElementsByTagName('button');
    var i;

    if(bodyStyle.fontFamily == "Dyslexic") {

        bodyStyle.fontFamily = "Rajdhani";
        bodyStyle.letterSpacing = "0px";
        for(i = 0; i < buttons.length; i++) {

            buttons[i].style.fontFamily = "Rajdhani";

        }


    } else {
        
        bodyStyle.fontFamily = "Dyslexic";
        bodyStyle.letterSpacing = "2px";
        for(i = 0; i < buttons.length; i++) {

            buttons[i].style.fontFamily = "Dyslexic";

        }

    }

}

// Generate the content the user clicked on

function generateContent(userSelection) {

    if(mobileNavMenu.display == "flex") {

        mobileNavMenu.display = "none";

    }

    if(userSelection !== categorie) {

        myFunctions.showLoading('pageContent', 'content-loading');

        $.ajax({

            url: userSelection + ".php",
            type: "GET",
            dataType: "HTML",
            success: function(data) {

                // setTimeout(() => {

                    $('#pageContent').html(data);
                    categorie = userSelection;
                    
                // }, 1000);

            },
            error: function(xhr, textStatus, error) {

                alert(error);

            }

        });
        
    }



}

// Show the navigation menu when the user click on the button on the responsive navbar

function showMobileNavMenu() {

    if(mobileNavMenu.display == "flex") {

        mobileNavMenu.display = "none";

    } else {

        mobileNavMenu.display = "flex";

    }

}

/*
    Contact form send function. First verify user inputs before sending them to the server 
    and display the message returned by the server
*/

function sendContact() {

    let username = document.getElementById('username').value;
    let usermail = document.getElementById('usermail').value;
    let usermessage = document.getElementById('usermessage').value;

    if(username.length < 5) {

        errorMessage = 'Veuillez insérer votre nom !';
        myFunctions.showFormMessage(errorMessage, "#E7951F");
        return;

    }

    if(username.length > 50) {

        errorMessage = 'Votre nom ne doit pas dépasser 50 caractères maximum !';
        myFunctions.showFormMessage(errorMessage, "#E7951F");
        return;

    }

    if(usermail.length < 5) {

        errorMessage = 'Veuillez insérer votre adresse e-mail !';
        myFunctions.showFormMessage(errorMessage, "#E7951F");
        return;

    }

    if(usermail.length > 50) {

        errorMessage = 'Votre adresse e-mail ne doit pas dépasser 50 caractères maximum !';
        myFunctions.showFormMessage(errorMessage, "#E7951F");
        return;

    }

    if(usermessage.length < 15) {

        errorMessage = 'Veuillez insérer votre message !';
        myFunctions.showFormMessage(errorMessage, "#E7951F");
        return;

    }

    if(usermessage.length > 1500) {

        errorMessage = 'Votre message est trop long ! (1500 caractères maximum !)';
        myFunctions.showFormMessage(errorMessage, "#E7951F");
        return;

    }

    dataSend = {
        username,
        usermail,
        usermessage
    }

    let formValidationContainer = document.getElementById('form-validation-container');
    let buttonSend = formValidationContainer.innerHTML;
    myFunctions.showLoading('form-validation-container', 'form-loading');

    $.ajax({

        url: "processing/processing-contact.php",
        type: "POST",
        data: dataSend,
        dataType: "TEXT",
        success: function(data) {

            setTimeout(() => {

                if(data.includes("Erreur :")) {
                    let errorMessage = data.replace('Erreur :','');
                    myFunctions.showFormMessage(errorMessage, "#E7951F");
                    formValidationContainer.innerHTML = buttonSend;
                    return;
    
                } else {
                    
                    formValidationContainer.innerHTML = data;
                    formValidationContainer.style.color = "#30CF04";
    
                }
                
            }, 1000);

        },
        error: function(xhr, textStatus, error) {

            alert(error);

        }

    });
    
}

/*
    Estimation form send function. First verify user inputs before sending them to the server 
    and display the message returned by the server
*/

function sendEstimation() {

    let username = document.getElementById('username').value;
    let userrole = document.getElementById('userrole').value;
    let usermail = document.getElementById('usermail').value;
    let usertelnumber = document.getElementById('usertelnumber').value;
    let usersocietyname = document.getElementById('usersocietyname').value;
    let usersocietywebsite = document.getElementById('usersocietywebsite').value;
    let usersocietydescription = document.getElementById('usersocietydescription').value;
    let usersocietyobjectives = document.getElementById('usersocietyobjectives').value;
    let usersocietytargets = document.getElementById('usersocietytargets').value;
    let userbudget = document.getElementById('userbudget').value;
    let userpleasingcompetitor = document.getElementById('userpleasingcompetitor').value;
    let userunpleasantcompetitor = document.getElementById('userunpleasantcompetitor').value;
    let userclarifications = document.getElementById('userclarifications').value;

    var phoneno = /^(?:0|\(?\+33\)?\s?|0033\s?)[1-79](?:[\.\-\s]?\d\d){4}$/;


    if(username.length < 5) {

        errorMessage = 'Veuillez insérer votre nom !';
        myFunctions.showFormMessage(errorMessage, "#E7951F");
        return;

    }

    if(username.length > 50) {

        errorMessage = 'Votre nom ne doit pas dépasser 50 caractères maximum !';
        myFunctions.showFormMessage(errorMessage, "#E7951F");
        return;

    }

    if(userrole.length < 5) {

        errorMessage = 'Veuillez insérer votre fonction !';
        myFunctions.showFormMessage(errorMessage, "#E7951F");
        return;

    }

    if(userrole.length > 50) {

        errorMessage = 'Votre fonction ne doit pas dépasser 50 caractères maximum !';
        myFunctions.showFormMessage(errorMessage, "#E7951F");
        return;

    }

    if(usermail.length < 5) {

        errorMessage = 'Veuillez insérer votre adresse e-mail !';
        myFunctions.showFormMessage(errorMessage, "#E7951F");
        return;

    }

    if(usermail.length > 50) {

        errorMessage = 'Votre adresse e-mail ne doit pas dépasser 50 caractères maximum !';
        myFunctions.showFormMessage(errorMessage, "#E7951F");
        return;

    }

    if(usertelnumber.length !== 0 && !usertelnumber.match(phoneno)) {

        errorMessage = 'Veuillez insérer un numéro de téléphone valide !';
        myFunctions.showFormMessage(errorMessage, "#E7951F");
        return;

    }

}