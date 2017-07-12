 function initMap() {
        // Create a map object and specify the DOM element for display.
        var map = new google.maps.Map(document.getElementById('googleMap'), {
          center: {lat: 41.878114, lng: -87.629798},
          scrollwheel: false,
          zoom: 12
        });
      }
