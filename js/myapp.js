/*
file: js/myapp.js
desc: Code for app.
*/
$(document).ready(function(){

$(function() {
$("#map").googleMap({
zoom: 10, // Initial zoom level (optional)
coords: [65.848663, 24.151954], // Map center (optional)
type: "ROADMAP" // Map type (optional)

});

getAllRoutes();
getUserLocation();
addMarkers();

$("#search").submit(function(event){
addSearch();
return false; //no page refresh after submit
});
})
});

function getAllRoutes(){
$("#map").addWay({
start: "Eliaksenkatu 8, 95400 Tornio",
end: "Fredrik Langes gate 2, 9008 Tromsø, Norway",
route : 'way',
language : 'english'
});
}
function addMarkers(){
$("#map").addMarker({
address: "Kauppakatu 58, Tornio",
title: 'Lapland UAS',
url: 'http://www.lapinamk.fi'
});
var url="connection.php";
Markers(url);
}
function addSearch(){
//clear the map from previous state by initializing it
$("#map").googleMap({
zoom: 10,
coords: [65.848663, 24.151954], // Map center (optional)
type: "ROADMAP" // Map type (optional)
});
//take city name from select choise (area)
var area=$("#area").val();
var url="connection.php?city="+area;
Markers(url);
}

function Markers(url){
$.getJSON(url,function(result){
$.each(result,function(key,company){
address=company.street + ', '+company.city;
$("#map").addMarker({
address: address,
title: company.companyName,
url: company.website
});
});
});
}

function getUserLocation(){
// Тут проверяете включена локация или нет
if('geolocation' in navigator){
// Если Включена
var options = {
enableHighAccuracy: false,
// Тут меняете скорость загрузки позиции 1000 = 1 секунда
timeout: 5000,
maximumAge: 0
};
// Тут находите позицию и ставите маркер
navigator.geolocation.getCurrentPosition(success, error, options);
function success(pos){
var lng = pos.coords.longitude;
var lat = pos.coords.latitude;
// Картинка кошки =) Можете менять на кошку
var image ='images/koshka.ico';
$("#map").addMarker({
coords: [lat, lng],
title: 'Your position',
text: '<p>Your Position</p>',
center: [65.848663, 24.151954],

});
}
function error(err){

console.log(err)
}
} else {

console.log("browser not supported");
}
}