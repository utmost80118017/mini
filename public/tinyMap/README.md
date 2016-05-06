# jQuery-tinyMap Plugin

This plugin will help to create the Google Maps easier on page.

Online documentation and demonstration:  
https://code.essoduke.org/tinyMap/ 

## Install
Include the jQuery library and tinyMap. 
```HTML
<script src="jquery.js"></script>
<script src="jquery.tinyMap.js"></script>
```
###bower
```
$bower install jquery-tinyMap
```

Create the HTML container.
```html
<div id="map"></div>
```

Setting up the container's width and height with CSS:

```css
#map {
    width: 'MAP WIDTH';
    height: 'MAP HEIGHT';
}
```

## Usage

Online documentation: https://code.essoduke.org/tinyMap/docs (Traditional Chinese only)

```javascript
// Basic
$(selector).tinyMap({
    // Map center
    'center': {
        'lat': 'Lat', 
        'lng': 'Lng'
    },
    // or 'center': 'lat, lng'
    // or 'center': [lat, lng]
    // or 'center': 'ADDRESS'
    // or 'center': 'N48°45.5952  E20°59.976' // WGS84 format
    'zoom': 14
});
```

### Create the Markers
```javascript
$(selector).tinyMap({
    'marker': [
        {
            // Custom Identity string (Optional)
            'id'  : 'Marker ID',
            // Marker place location
            'addr': ['Lat', 'Lng'],
            // Or address string. e.g. `1600 Pennsylvania Ave NW, Washington, DC 20500`
            // Or Object {lat: 'lat', lng: 'lng'}
            // Or latlng string 'lat, lng'
            'title': 'Display on Mouseover', // (Optional)
            'text': 'Display in infoWindow', // (Optional)
            'icon': 'http://domain/icon.png' // (Optional)
            // You could define own properties by yourself.
            'hello': 'yes'
            // Binding Click event
            'event': function () {
                console.log(this.text); // Get marker's text property.
                console.log(event.latLng.lat()); // Get markers' position.
                // Access own property
                console.log(this.hello);
            }
            /* More events
            'event': {
                'click': function (event) {...},
                'mouseover': function (event) {...}
            }
            */
            /* or Run Once
            'event': {
                'click': {
                    'func': function () {...}
                    'once': true / false
                },
                'mouseover': {
                    ...
                }
            }
            */
        }
    ]
});
```

## Methods
###panTo
```javascript
// Methods
// e.g. Move map center to the location.
$(selector).tinyMap('panTo', 'Address string');
$(selector).tinyMap('panTo', ['Lat', 'Lng']);
$(selector).tinyMap('panTo', {lat: 'Lat', lng: 'Lng'});
```
###modify
```javascript
// Dynamic setting up
// e.g. Disable draggable
$(selector).tinyMap('modify', {
    'draggable': false
    //Resetting  zoom level
    'zoom': 16
});
// e.g. Insert markers
$(selector).tinyMap('modify', {
    'marker': [
        {'addr': '...'},
        {'addr': '...'},
        ...
    ]
});
// e.g. Move the specified marker to new location.
$(selector).tinyMap('modify', {
    'marker': [
        {'id': 'Marker ID', 'addr': ['lat', 'lng']},
        {'id': 'Marker ID', 'addr': ['lat', 'lng']},
        ...
    ]
});
```
###query
```javascript
// Query LatLng from Address
$(selector).tinyMap('query', 'Taipei 101, Taiwan', function (addr) {
    console.log(addr.geometry.location.lat()); // Latitude
    console.log(addr.geometry.location.lng()); // Longitude
});
// Query Address from LatLng
$(selector).tinyMap('query', ['25.034516521123315','121.56496524810791'], function (addr) {
    console.log(addr.formatted_address); //110台灣台北市信義區信義連通天橋(臺北101至Att4Fun)
});
// Support multiple format of LatLng
$(selector).tinyMap('query', {lat: 25.034516521123315, lng: 121.56496524810791}, function...);
$(selector).tinyMap('query', '25.034516521123315, 121.56496524810791', function...);
```

###get
Get layers on the map.
```javascript
// Get specified layer
var layer = $(selector).tinyMap('get', 'marker');
// Or multiple layers
var layers = $(selector).tinyMap('get', 'marker,direction');

// Get specified items of layer
var layers = $(selector).tinyMap('get', {
    'marker': [0, 2] // Get the 1st and 3rd markers. (Index must be integer)
    'polyline': ['A', 'C'] // Get the matched Id of polylines.
    'circle': [0, 'A'] // Also could be mixed.
});

// Get map instance
var map = $(selector).tinyMap('get', 'map');

// Callback
$(selector).tinyMap('get', 'marker', function (items) {
    console.dir(items);
});
```
###clear
Clear specitied items of layers.
```javascript
// Clear overlayers
// @param {Object} layer Layer Object.
$(selector).tinyMap('clear', 'marker,polyline...');

// Specified items in layer
$(selector).tinyMap('clear', {
    'marker': [0, 2] // Remove the 1st and 3rd markers. (Index must be integer)
    'polyline': ['A', 'C'] // Remove the matched Id of polylines.
    'circle': [0, 'A'] // Also could be mixed.
    'direction': [] // Empty array for remove all of them.
});

// Clear all layers
$(selector).tinyMap('clear'); 
```

###close
Close all opened infoWindow of layers.
```javascript
// Close all infoWindows of layers
// @param {Object} layer Layer Object.
$(selector).tinyMap('close', 'marker,polyline...');

// Specified items in layer
$(selector).tinyMap('close', {
    'marker': [0, 2] // Remove the 1st and 3rd markers. (Index must be integer)
    'polyline': ['A', 'C'] // Remove the matched Id of polylines.
    'circle': [0, 'A'] // Also could be mixed.
    'direction': [] // Empty array for remove all of them.
});

// Close all infoWindows of layers
$(selector).tinyMap('close'); 
```

###getKML
```javascript
// Overlays KML output
// Get the kml string.
var kml = $(selector).tinyMap('getKML'); 

// Or using options:
$(selector).tinyMap('getKML', {
    'download': false,  // TRUE for direct download the KML file.
    'marker': true,    // Include marker overlay
    'polyline': true,  // Include polyline overlay
    'polygon': true,   // Include polygon overlay
    'circle': true,    // Include circle overlay
    'direction': true  // Include direction overlay
});
```
## API Configure
You could setup the api before using the tinyMap.

```javascript
// Set up before tinyMap executes.
$.fn.tinyMapConfigure({
    // Google Maps API location
    'api': '//maps.google.com/maps/api/js',
    // Device sensor control
    'sensor': false,
    // Map Lanuguage
    'language': 'zh-TW',
    // Google Maps API Libraries
    'libraries': 'adsense, geometry...',
    // MarkerClusterer library location
    'clusterer': '//google-maps-utility-library-v3.googlecode.com/svn/trunk/markerclusterer/src/markerclusterer_compiled.js'
});

// Then executes.
$(selector).tinyMap(...);
```
## Using tinyMap instance

```javascript
// Create the map first.
var map = $(selector);
map.tinyMap(...);

// Get the instance from map.
var instance = map.data('tinyMap'); 
// Access map class
var map = instance.map;
// Get markers directly
var markers = instance._markers;
// Or access via `get` method.
var markers = instance.get('marker');
// You cloud browse all availables methods by
console.log(instance);
```

## License

This plugin is released under the [MIT License](http://opensource.org/licenses/MIT).

