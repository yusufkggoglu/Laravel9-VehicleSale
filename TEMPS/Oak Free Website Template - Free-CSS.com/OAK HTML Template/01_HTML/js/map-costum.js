    // When the window has finished loading create our google map below
    google.maps.event.addDomListener(window, 'load', init);

    function init() {
        // Basic options for a simple Google Map
        // For more options see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions
        var mapOptions = {
            // How zoomed in you want the map to start at (always required)
            zoom: 14,

            // The latitude and longitude to center the map (always required)
            center: new google.maps.LatLng(42.6610638, 21.1986866), // New York


            mapTypeControl: true,
            mapTypeControlOptions: {
                style: google.maps.MapTypeControlStyle.HORIZONTAL_BAR,
                position: google.maps.ControlPosition.LEFT_BOTTOM
            },
            zoomControl: true,
            zoomControlOptions: {
                position: google.maps.ControlPosition.LEFT_CENTER
            },
            scaleControl: true,
            streetViewControl: true,
            streetViewControlOptions: {
                position: google.maps.ControlPosition.LEFT_TOP
            },

            // How you would like to style the map. 
            // This is where you would paste any style found on Snazzy Maps.
            styles: [{
                "featureType": "poi",
                "elementType": "all",
                "stylers": [{
                    "hue": "#000000"
                }, {
                    "saturation": -100
                }, {
                    "lightness": -100
                }, {
                    "visibility": "off"
                }]
            }, {
                "featureType": "poi",
                "elementType": "all",
                "stylers": [{
                    "hue": "#000000"
                }, {
                    "saturation": -100
                }, {
                    "lightness": -100
                }, {
                    "visibility": "off"
                }]
            }, {
                "featureType": "administrative",
                "elementType": "all",
                "stylers": [{
                    "hue": "#000000"
                }, {
                    "saturation": 0
                }, {
                    "lightness": -100
                }, {
                    "visibility": "off"
                }]
            }, {
                "featureType": "road",
                "elementType": "labels",
                "stylers": [{
                    "hue": "#ffffff"
                }, {
                    "saturation": -100
                }, {
                    "lightness": 100
                }, {
                    "visibility": "off"
                }]
            }, {
                "featureType": "water",
                "elementType": "labels",
                "stylers": [{
                    "hue": "#000000"
                }, {
                    "saturation": -100
                }, {
                    "lightness": -100
                }, {
                    "visibility": "off"
                }]
            }, {
                "featureType": "road.local",
                "elementType": "all",
                "stylers": [{
                    "hue": "#ffffff"
                }, {
                    "saturation": -100
                }, {
                    "lightness": 100
                }, {
                    "visibility": "on"
                }]
            }, {
                "featureType": "water",
                "elementType": "geometry",
                "stylers": [{
                    "hue": "#ffffff"
                }, {
                    "saturation": -100
                }, {
                    "lightness": 100
                }, {
                    "visibility": "on"
                }]
            }, {
                "featureType": "transit",
                "elementType": "labels",
                "stylers": [{
                    "hue": "#000000"
                }, {
                    "saturation": 0
                }, {
                    "lightness": -100
                }, {
                    "visibility": "off"
                }]
            }, {
                "featureType": "landscape",
                "elementType": "labels",
                "stylers": [{
                    "hue": "#000000"
                }, {
                    "saturation": -100
                }, {
                    "lightness": -100
                }, {
                    "visibility": "off"
                }]
            }, {
                "featureType": "road",
                "elementType": "geometry",
                "stylers": [{
                    "hue": "#bbbbbb"
                }, {
                    "saturation": -100
                }, {
                    "lightness": 26
                }, {
                    "visibility": "on"
                }]
            }, {
                "featureType": "landscape",
                "elementType": "geometry",
                "stylers": [{
                    "hue": "#dddddd"
                }, {
                    "saturation": -100
                }, {
                    "lightness": -3
                }, {
                    "visibility": "on"
                }]
            }]
        };

        // Get the HTML DOM element that will contain your map 
        // We are using a div with id="map" seen below in the <body>
        var mapElement = document.getElementById('map');

        // Create the Google Map using our element and options defined above
        var map = new google.maps.Map(mapElement, mapOptions);

        // Icon Map 
        var image = 'img/map-pin.png';

        // Let's also add a marker while we're at it
        var marker = new google.maps.Marker({
            position: new google.maps.LatLng(42.6610638, 21.1986866),
            map: map,
            icon: image,
            title: 'OAK Theme'
        });
    }