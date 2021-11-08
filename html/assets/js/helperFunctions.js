
    //Helper function to retrieve the current location coordinates 
    function getLocationSearch() {
        
        if (navigator.geolocation) {        
            navigator.geolocation.getCurrentPosition(showPositionSearch);
        } else { 
        temp.innerHTML = "Geolocation is not supported by this browser.";
        
          }
    
    }
        
    function showPositionSearch(position) {
        var temp = document.getElementById("changebtn");  
        temp.innerHTML = "Latitude: " + position.coords.latitude + 
        "<br>Longitude: " + position.coords.longitude;
    }

    function getLocationSubmit() {
        
        if (navigator.geolocation) {        
            navigator.geolocation.getCurrentPosition(showPositionSubmit);
        } else { 
        temp.innerHTML = "Geolocation is not supported by this browser.";
        
          }
    
    }

    function showPositionSubmit(position) {
        var latitudetemp = document.getElementById("Latitude");  
        latitudetemp.value = position.coords.latitude
        var longitudetemp = document.getElementById("Longitude");  
        longitudetemp.value = position.coords.longitude
    }

    function validateForm(){
        var format = /[!@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?]+/;
        var nametemp = document.getElementById("Name");
        var emailtemp = document.getElementById("email");
        var usernametemp = document.getElementById("username");
        var passwordtemp = document.getElementById("password");
        var passwordconfirmtemp = document.getElementById("passwordconfirm");

        if (!nametemp.checkValidity() || format.test(nametemp.value)){
            alert("Name input is not valid. Please try again.");
        }
        

        if (!emailtemp.checkValidity()){
            alert("Email input is not valid. Please try again.");
        }

        if (!usernametemp.checkValidity() || format.test(usernametemp.value)){
            alert("Username input is not valid. Please try again.");
        }

    
        if (!passwordtemp.checkValidity()){ 
                alert("Password input is not valid. Please try again.");
        } else if (passwordtemp.value != passwordconfirmtemp.value){
                alert("Passwords must match. Please try again.");
        }
    }




