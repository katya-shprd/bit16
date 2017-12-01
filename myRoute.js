$(document).ready(function(){
	myLocation();
	
});

function myLocation(){
	GMaps.geolocate({
        success: function(position){
          var lat=position.coords.latitude;
		  var lng=position.coords.longitude;
		  var myCoords=lat+','+lng;
		  var map=initializeMap(lat,lng);
        },
        error: function(error){
          alert('Geolocation failed: '+error.message);
        },
        not_supported: function(){
          alert("Your browser does not support geolocation");
        },
        always: function(){
         
        }
      });
}
function initializeMap(lat,lng){
	var routemap = new GMaps({
        el: '#routemap',
        lat: lat,
        lng: lng,
		zoom: 5
      });
	  routemap.drawRoute({
		origin: [65.847280, 24.150528],
		destination: [69.656601, 18.956198],
		travelMode: 'driving',
		strokeColor: '#131540',
		strokeOpacity: 0.6,
		strokeWeight: 6
	  });
	  routemap.addMarker({
        lat: 65.847280,
        lng: 24.150528,
        title: 'Tornio',
		icon: "img/here.ico",
        infoWindow: {
          content: '<p>Tornio</p>'
        }
      });
	  routemap.addMarker({
        lat: 69.65660,
        lng: 18.956198,
        title: 'Tromsö',
		icon: "img/here.ico",
        infoWindow: {
          content: '<p>Tromsö</p>'
        }
      });
}