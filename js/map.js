var map = L.map('map').setView([33.5731, -7.5898], 6);

L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
}).addTo(map);

var marker = L.marker([33.5731, -7.5898]).addTo(map)
    .bindPopup('A pretty CSS3 popup.<br> Easily customizable.')
    .openPopup();

var popup = new L.popup();

map.on('click', function (e) {
    marker.setLatLng(e.latlng).bindPopup("You clicked the map at " + e.latlng.toString())
    .openPopup();
    console.log("You clicked the map at ", e.latlng);
    $('#lat').val(e.latlng.lat);
    $('#lng').val(e.latlng.lng);
    console.log('lat lng', $('#lat'), $('#lng'));
});