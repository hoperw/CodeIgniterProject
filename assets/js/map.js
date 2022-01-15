/* Leaflet Map */

//create map
const map = L.map('map').setView([51.505, -0.09], 2);
//disable zoom
map.touchZoom.disable();
map.doubleClickZoom.disable();
map.scrollWheelZoom.disable();
map.boxZoom.disable();
map.keyboard.disable();

//add tile layers for map
L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token={accessToken}', {
    attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
    maxZoom: 18,
    id: 'mapbox/streets-v11',
    tileSize: 512,
    zoomOffset: -1,
    accessToken: 'pk.eyJ1IjoiaG9wZXJ3MjA3IiwiYSI6ImNrd3FxYzlmYzBwaHIybnMyNHZ6em96YzIifQ.hcBc103RsNSFn3g8FqpsnA'
}).addTo(map);

//create a MapIcon object from Icon class
const MapIcon = L.Icon.extend({
    options: {
        iconSize:     [50, 33],
        shadowSize:   [50, 64],
        shadowAnchor: [4, 62],
    }
});

//create map icon objects for countries on map
const japanIcon = new MapIcon({iconUrl: '/assets/images/japan.png'}),
      indiaIcon = new MapIcon({iconUrl: '/assets/images/india.png'});
      malaysiaIcon = new MapIcon({iconUrl: '/assets/images/malaysia.png'});
      usaIcon = new MapIcon({iconUrl: '/assets/images/usa.png'});
      mexicoIcon = new MapIcon({iconUrl: '/assets/images/mexico.png'});
      gambiaIcon = new MapIcon({iconUrl: '/assets/images/gambia.png'});

//place icons on map
L.marker([35.6762, 139.6503], {icon: japanIcon}).addTo(map);
L.marker([28.7041, 77.1025], {icon: indiaIcon}).addTo(map);
L.marker([3.1390, 101.6869], {icon: malaysiaIcon}).addTo(map);
L.marker([40.2672, -97.7431], {icon: usaIcon}).addTo(map);
L.marker([19.4326, -99.1332], {icon: mexicoIcon}).addTo(map);
L.marker([13.4544, -16.5753], {icon: gambiaIcon}).addTo(map);

//create links for popups on map
const japaneseLink = document.createElement('a');
japaneseLink.setAttribute('href',"https://www.chopstickchronicles.com");
japaneseLink.innerText = "Japanese Recipes";

const indianLink = document.createElement('a');
indianLink.setAttribute('href',"https://www.veganricha.com/category/indian-vegan-recipes/");
indianLink.innerText = "Indian Recipes";

const malaysianLink = document.createElement('a');
malaysianLink.setAttribute('href',"https://woonheng.com/malaysian-vegetable-curry/");
malaysianLink.innerText = "Malaysian Recipes";

const usaLink = document.createElement('a');
usaLink.setAttribute('href',"https://www.budgetbytes.com/");
usaLink.innerText = "American Recipes";

const mexicanLink = document.createElement('a');
mexicanLink.setAttribute('href',"https://minimalistbaker.com/recipes/mexican-inspired/");
mexicanLink.innerText = "Mexican Recipes";

const gambianLink = document.createElement('a');
gambianLink.setAttribute('href',"https://rainbowplantlife.com/vegan-west-african-peanut-stew/");
gambianLink.innerText = "Gambian Recipes";

//create markers using links
L.marker([35.6762, 139.6503], {icon: japanIcon}).addTo(map).bindPopup(japaneseLink);
L.marker([28.7041, 77.1025], {icon: indiaIcon}).addTo(map).bindPopup(indianLink);
L.marker([3.1390, 101.6869], {icon: malaysiaIcon}).addTo(map).bindPopup(malaysianLink);
L.marker([40.2672, -97.7431], {icon: usaIcon}).addTo(map).bindPopup(usaLink);
L.marker([19.4326, -99.1332], {icon: mexicoIcon}).addTo(map).bindPopup(mexicanLink);
L.marker([13.4544, -16.5753], {icon: gambiaIcon}).addTo(map).bindPopup(gambianLink);




