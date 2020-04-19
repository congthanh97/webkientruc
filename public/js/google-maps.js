



    // Map 1
    function initMap() {
        var uluru = {lat: 36.845463, lng: 10.275912}; // CHANGE COORDINATES HERE // // CHANGE COORDINATES HERE //     
        var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 15,
            center: uluru,
            scrollwheel: true,
            draggable: true			
        });		
        var marker = new google.maps.Marker({
            position: uluru,
            map: map
        });
        var infowindow = new google.maps.InfoWindow({
            content:"Nous Sommes Ici"
        });
        infowindow.open(map,marker);
    }


