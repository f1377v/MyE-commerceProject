
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






