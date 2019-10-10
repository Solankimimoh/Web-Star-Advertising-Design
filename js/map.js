var platform = new H.service.Platform({
    'apikey': 'SYOsejaCTKTsjvSib11rWr3fYW8wkJYTMgTxfKV1NBo'
});
var defaultLayers = platform.createDefaultLayers();

// Instantiate (and display) a map object:
var map = new H.Map(document.getElementById('map'),
    defaultLayers.vector.normal.map, {
        zoom: 15,
        center: {
            lat: 23.036116,
            lng: 72.523209
        },
        style: "wings",
        pixelRatio: window.devicePixelRatio || 1
    });
var behavior = new H.mapevents.Behavior(new H.mapevents.MapEvents(map));

// Create the default UI components
var ui = H.ui.UI.createDefault(map, defaultLayers);

// Create an icon, an object holding the latitude and longitude, and a marker:
var icon = new H.map.Icon("img/marker.png"),
    coords = {
        lat: 23.036116,
        lng: 72.523209
    },
    marker = new H.map.Marker(coords, {
        icon: icon
    });

// Add the marker to the map and center the map at the location of the marker:
map.addObject(marker);
map.setCenter(coords);