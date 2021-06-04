/*
    Contact form send function. First verify user inputs before sending them to the server 
    and display the message returned by the server
*/

function sendContact() {

    let usernameinput = document.getElementById('username');
    let usermailinput = document.getElementById('usermail');
    let usermessageinput = document.getElementById('usermessage');

    if(usernameinput.value.length < 1) {

        errorMessage = 'Veuillez insérer votre nom !';
        myFunctions.showFormMessage(errorMessage, myColors.alert);
        usernameinput.focus();
        return;

    }

    if(usernameinput.value.length > 50) {

        errorMessage = 'Votre nom ne doit pas dépasser 50 caractères maximum !';
        myFunctions.showFormMessage(errorMessage, myColors.alert);
        usernameinput.focus();
        return;

    }

    if(usermailinput.value.length < 1) {

        errorMessage = 'Veuillez insérer votre adresse e-mail !';
        myFunctions.showFormMessage(errorMessage, myColors.alert);
        usermailinput.focus();
        return;

    }

    if(usermailinput.value.length > 50) {

        errorMessage = 'Votre adresse e-mail ne doit pas dépasser 50 caractères maximum !';
        myFunctions.showFormMessage(errorMessage, myColors.alert);
        usermailinput.focus();
        return;

    }

    if(!myFunctions.validateEmail(usermailinput.value)) {

        errorMessage = 'Veuillez insérer une adresse e-mail valide !';
        myFunctions.showFormMessage(errorMessage, myColors.alert);
        usermailinput.focus();
        return;

    }

    if(usermessageinput.value.length < 1) {

        errorMessage = 'Veuillez insérer votre message !';
        myFunctions.showFormMessage(errorMessage, myColors.alert);
        usermessageinput.focus();
        return;

    }

    if(usermessageinput.value.length !== 0 && usermessageinput.value.length < 15) {

        errorMessage = 'Votre message est trop court ! (15 caractères minimum)';
        myFunctions.showFormMessage(errorMessage, myColors.alert);
        usermessageinput.focus();
        return;

    }

    if(usermessageinput.value.length > 1500) {

        errorMessage = 'Votre message est trop long ! (1500 caractères maximum !)';
        myFunctions.showFormMessage(errorMessage, myColors.alert);
        usermessageinput.focus();
        return;

    }

    let username = document.getElementById('username').value;
    let usermail = document.getElementById('usermail').value;
    let usermessage = document.getElementById('usermessage').value;

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
                    myFunctions.showFormMessage(errorMessage, myColors.alert);
                    formValidationContainer.innerHTML = buttonSend;
                    return;
    
                } else {
                    
                    formValidationContainer.innerHTML = data;
                    formValidationContainer.style.color = myColors.confirmation;
    
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

    let usernameinput = document.getElementById('username');
    let userroleinput = document.getElementById('userrole');
    let usermailinput = document.getElementById('usermail');
    let usertelnumberinput = document.getElementById('usertelnumber');
    let usersocietynameinput = document.getElementById('usersocietyname');
    let usersocietywebsiteinput = document.getElementById('usersocietywebsite');
    let usersocietydescriptioninput = document.getElementById('usersocietydescription');
    let usersocietyobjectivesinput = document.getElementById('usersocietyobjectives');
    let usersocietytargetsinput = document.getElementById('usersocietytargets');
    let userbudgetinput = document.getElementById('userbudget');
    let userpleasingcompetitorinput = document.getElementById('userpleasingcompetitor');
    let userunpleasantcompetitorinput = document.getElementById('userunpleasantcompetitor');
    let userclarificationsinput = document.getElementById('userclarifications');

    var phonePattern = /^(?:0|\(?\+33\)?\s?|0033\s?)[1-79](?:[\.\-\s]?\d\d){4}$/;

    if(usernameinput.value.length < 1) {

        errorMessage = 'Veuillez insérer votre nom !';
        myFunctions.showFormMessage(errorMessage, myColors.alert);
        usernameinput.focus();
        return;

    }

    if(usernameinput.value.length > 50) {

        errorMessage = 'Votre nom ne doit pas dépasser 50 caractères maximum !';
        myFunctions.showFormMessage(errorMessage, myColors.alert);
        usernameinput.focus();
        return;

    }

    if(userroleinput.value.length < 1) {

        errorMessage = 'Veuillez insérer votre fonction dans l\'entreprise !';
        myFunctions.showFormMessage(errorMessage, myColors.alert);
        userroleinput.focus();
        return;

    }

    if(userroleinput.value.length > 50) {

        errorMessage = 'Votre fonction ne doit pas dépasser 50 caractères maximum !';
        myFunctions.showFormMessage(errorMessage, myColors.alert);
        userroleinput.focus();
        return;

    }

    if(usermailinput.value.length < 1) {

        errorMessage = 'Veuillez insérer votre adresse e-mail !';
        myFunctions.showFormMessage(errorMessage, myColors.alert);
        usermailinput.focus();
        return;

    }

    if(usermailinput.value.length > 50) {

        errorMessage = 'Votre adresse e-mail ne doit pas dépasser 50 caractères maximum !';
        myFunctions.showFormMessage(errorMessage, myColors.alert);
        usermailinput.focus();
        return;

    }

    if(!myFunctions.validateEmail(usermailinput.value)) {

        errorMessage = 'Veuillez insérer une adresse e-mail valide !';
        myFunctions.showFormMessage(errorMessage, myColors.alert);
        usermailinput.focus();
        return;

    }

    if(usertelnumberinput.value.length !== 0 && !usertelnumberinput.value.match(phonePattern)) {

        errorMessage = 'Veuillez insérer un numéro de téléphone valide !';
        myFunctions.showFormMessage(errorMessage, myColors.alert);
        usertelnumberinput.focus();
        return;

    }

    if(usersocietynameinput.value.length < 1) {

        errorMessage = 'Veuillez insérer le nom de votre entreprise !';
        myFunctions.showFormMessage(errorMessage, myColors.alert);
        usersocietynameinput.focus();
        return;

    }

    if(usersocietynameinput.value.length > 50) {

        errorMessage = 'Le nom de votre entreprise ne doit pas dépasser 50 caractères maximum !';
        myFunctions.showFormMessage(errorMessage, myColors.alert);
        usersocietynameinput.focus();
        return;

    }

    if(usersocietywebsiteinput.value.length !== 0 && usersocietywebsiteinput.value.length > 250) {

        errorMessage = 'L\'URL de votre site web ne dois pas dépasser 250 caractères !';
        myFunctions.showFormMessage(errorMessage, myColors.alert);
        usersocietywebsiteinput.focus();
        return;

    }

    if(usersocietywebsiteinput.value.length !== 0 && usersocietywebsiteinput.value.length > 250) {

        errorMessage = 'L\'URL de votre site web ne doit pas dépasser 250 caractères maximum !';
        myFunctions.showFormMessage(errorMessage, myColors.alert);
        usersocietywebsiteinput.focus();
        return;

    }

    if(usersocietywebsiteinput.value.length !== 0 && !myFunctions.validateURL(usersocietywebsiteinput.value)) {

        errorMessage = 'L\'URL de votre site web n\'est pas valide !';
        myFunctions.showFormMessage(errorMessage, myColors.alert);
        usersocietywebsiteinput.focus();
        return;

    }

    if(usersocietydescriptioninput.value.length < 1) {

        errorMessage = 'Veuillez insérer la description de votre entreprise !';
        myFunctions.showFormMessage(errorMessage, myColors.alert);
        usersocietydescriptioninput.focus();
        return;

    }

    if(usersocietydescriptioninput.value.length > 1500) {

        errorMessage = 'La description de votre entreprise ne doit pas dépasser 250 caractères maximum !';
        myFunctions.showFormMessage(errorMessage, myColors.alert);
        usersocietydescriptioninput.focus();
        return;

    }

    if(usersocietyobjectivesinput.value.length < 1) {

        errorMessage = 'Veuillez insérer les objectifs de votre entreprise !';
        myFunctions.showFormMessage(errorMessage, myColors.alert);
        usersocietyobjectivesinput.focus();
        return;

    }

    if(usersocietyobjectivesinput.value.length > 1500) {

        errorMessage = 'La description des objectifs de votre entreprise ne doivent pas dépasser 250 caractères maximum !';
        myFunctions.showFormMessage(errorMessage, myColors.alert);
        usersocietyobjectivesinput.focus();
        return;

    }

    if(usersocietytargetsinput.value.length < 1) {

        errorMessage = 'Veuillez insérer le public visé par votre site web !';
        myFunctions.showFormMessage(errorMessage, myColors.alert);
        usersocietytargetsinput.focus();
        return;

    }

    if(usersocietytargetsinput.value.length > 1500) {

        errorMessage = 'La description du public visé par votre site web ne doit pas dépasser 250 caractères maximum !';
        myFunctions.showFormMessage(errorMessage, myColors.alert);
        usersocietytargetsinput.focus();
        return;

    }

    if(userbudgetinput.value.length < 1) {

        errorMessage = 'Veuillez insérer votre budget !';
        myFunctions.showFormMessage(errorMessage, myColors.alert);
        userbudgetinput.focus();
        return;

    }

    if(userbudgetinput.value == "0") {

        errorMessage = 'Veuillez insérer votre budget !';
        myFunctions.showFormMessage(errorMessage, myColors.alert);
        userbudgetinput.focus();
        return;
    }

    if(isNaN(userbudgetinput.value)) {

        errorMessage = 'Votre budget ne doit être écris qu\'avec des numéros';
        myFunctions.showFormMessage(errorMessage, myColors.alert);
        userbudgetinput.focus();
        return;

    }

    if(userpleasingcompetitorinput.value.length !== 0 && userpleasingcompetitorinput.value.length > 1500) {

        errorMessage = 'La description des sites concurrents qui vous plaisent ne doivent pas dépasser 250 caractères maximum !';
        myFunctions.showFormMessage(errorMessage, myColors.alert);
        userpleasingcompetitorinput.focus();
        return;

    }

    if(userunpleasantcompetitorinput.value.length !== 0 && userunpleasantcompetitorinput.value.length > 1500) {

        errorMessage = 'La description des sites concurrents qui vous déplaisent ne doivent pas dépasser 250 caractères maximum !';
        myFunctions.showFormMessage(errorMessage, myColors.alert);
        userunpleasantcompetitorinput.focus();
        return;

    }

    if(userclarificationsinput.value.length !== 0 && userclarificationsinput.value.length > 1500) {

        errorMessage = 'Vos précisions et questions éventuelles ne doivent pas dépasser 250 caractères maximum !';
        myFunctions.showFormMessage(errorMessage, myColors.alert);
        userclarificationsinput.focus();
        return;

    }

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

    dataSend = {

        username,
        usermail,
        userrole,
        usersocietyname,
        usersocietydescription,
        usersocietyobjectives,
        usersocietytargets,
        userbudget,

    }

    if(usertelnumber.length !== 0) {

        dataSend['usertelnumber'] = usertelnumber;

    }

    if(usersocietywebsite.length !== 0) {

        dataSend['usersocietywebsite'] = usersocietywebsite;

    }

    if(userpleasingcompetitor.length !== 0) {

        dataSend['userpleasingcompetitor'] = userpleasingcompetitor;

    }

    if(userunpleasantcompetitor.length !== 0) {

        dataSend['userunpleasantcompetitor'] = userunpleasantcompetitor;

    }

    if(userclarifications.length !== 0) {

        dataSend['userclarifications'] = userclarifications;

    }

    let formValidationContainer = document.getElementById('form-validation-container');
    let buttonSend = formValidationContainer.innerHTML;
    myFunctions.showLoading('form-validation-container', 'form-loading');

    $.ajax({

        url: "processing/processing-estimation.php",
        type: "POST",
        data: dataSend,
        dataType: "TEXT",
        success: function(data) {

            setTimeout(() => {

                if(data.includes("Erreur :")) {

                    let errorMessage = data.replace('Erreur :','');
                    myFunctions.showFormMessage(errorMessage, myColors.alert);
                    formValidationContainer.innerHTML = buttonSend;
                    return;
    
                } else {
                    
                    formValidationContainer.innerHTML = data;
                    formValidationContainer.style.color = myColors.confirmation;
    
                }
                
            }, 1000);

        },
        error: function(xhr, textStatus, error) {

            alert(error);

        }

    });

}