categorie = "home";
mobileNavMenu = document.getElementById('mobilenavigationmenu').style;

myFunctions = {
    
    showLoading: function(container) {

        document.getElementById(container).innerHTML = "<img class='contentLoadingImage' src='assets/loading.gif'>";

    }

}

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

function generateContent(userSelection) {

    if(mobileNavMenu.display == "flex") {

        mobileNavMenu.display = "none";

    }

    if(userSelection !== categorie) {

        myFunctions.showLoading('pageContent');

        $.ajax({

            url: userSelection + ".php",
            type: "GET",
            dataType: "HTML",
            success: function(data) {

                $('#pageContent').html(data);
                categorie = userSelection;

            },
            error: function(xhr, textStatus, error) {

                alert(error);

            }

        });
        
    }



}

function showMobileNavMenu() {

    if(mobileNavMenu.display == "flex") {

        mobileNavMenu.display = "none";

    } else {

        mobileNavMenu.display = "flex";

    }

}