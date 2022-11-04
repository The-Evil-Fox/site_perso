// Defines the basic categorie as home when the user lands on the page.

categorie = "home";

// Targets the responsive navigation menu for functions that modify it.

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
        
    },

    validateEmail(email) {

        const re = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        return re.test(String(email).toLowerCase());

    },

    validateURL(string) {

        var res = string.match(/(http(s)?:\/\/.)?(www\.)?[-a-zA-Z0-9@:%._\+~#=]{2,256}\.[a-z]{2,6}\b([-a-zA-Z0-9@:%_\+.~#?&//=]*)/g);
        return (res !== null)

    }

}

// Defines the color used by Javascript to display messages to the user.

myColors = {

    alert: "#CF0404",
    confirmation: "#30CF04"

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

    showMobileNavMenu();

    if(userSelection !== categorie) {

        myFunctions.showLoading('pageContent', 'content-loading');

        $.ajax({

            url: userSelection + ".php",
            type: "GET",
            dataType: "HTML",
            success: function(data) {

                setTimeout(() => {

                    $('#pageContent').html(data);
                    categorie = userSelection;
                    
                }, 1000);

            },
            error: function(xhr, textStatus, error) {

                alert(error);

            }

        });
        
    }



}

// Show the navigation menu when the user click on the button on the responsive navbar

function showMobileNavMenu() {

    mobileNavButton = document.getElementById('mobilenavbutton');

    if(mobileNavMenu.display == "flex") {

        mobileNavMenu.display = "none";
        mobileNavButton.style.color = "#fff";

    } else {

        mobileNavMenu.display = "flex";
        mobileNavButton.style.color = "#E7951F";
        // document.addEventListener('click', clicknav);

    }

}

// Show the scroll top button when the user scroll the page down

window.onscroll = function() {

    scrollTopButton = document.getElementById('scrollup');

    if (window.scrollY > 150) {

        scrollTopButton.style.display = "block";

    } else {
    
        scrollTopButton.style.display = "none";

    }
};