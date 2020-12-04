<?php

use Codeception\PHPUnit\ResultPrinter\HTML;
use zetsoft\widgets\places\ZNGoogleMapWidget;
use zetsoft\system\kernels\ZWidget;

class google extends ZWidget
{

    /**
     * Configuration
     */
    public $config = [];
    public $_config = [];


    /**
     *
     * Plugin Events
     * https://select2.org/programmatic-control/events
     */
    public $event = [];
    public $_event = [];
    public function codes()
    {

        $this->htm = <<<HTML
            <div id="map"></div>
            <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBkxS5l87lclaC6MIWSGejdCXL13wSShRo&callback=initMap" async
            defer></script>
        HTML;
        $this->css = <<<CSS
            #map {
                height: 100%;
            }
        CSS;
        $this->js= <<<JS
         function initMap() {


var map = new google.maps.Map(document.getElementById('map'), {
    /*
     * The initial Map center. Required.
     * lat : Latitude in degrees. Values will be clamped to the range [-90, 90]. This means that if the value specified is less than -90, it will be set to -90. And if the value is greater than 90, it will be set to 90.
     * lng : Longitude in degrees. Values outside the range [-180, 180] will be wrapped so that they fall within the range. For example, a value of -190 will be converted to 170. A value of 190 will be converted to -170. This reflects the fact that longitudes wrap around the globe.
     */
    center: {lat: 41.3, lng: 69.3},
    /*
     * The initial Map zoom level. Required. Valid values: Integers between zero, and up to the supported maximum zoom level.
     */

    zoom: 18,

    /*
     * Color used for the background of the Map div. This color will be visible when tiles have not yet loaded as the user pans. This option can only be set when the map is initialized.
     */
    backgroundColor: 'none',
    /*
      * The enabled/disabled state of the Pan control.
     * Note: The Pan control is not available in the new set of controls introduced in v3.22 of the Google Maps JavaScript API. While using v3.22 and v3.23, you can choose to use the earlier set of controls rather than the new controls, thus making the Pan control available as part of the old control set. See What's New in the v3.22 Map Controls.
     */
    panControl: true,
    /*
     * The enabled/disabled state of the Rotate control.
    */
    rotateControl: true,
    /*
     * When false, map icons are not clickable. A map icon represents a point of interest, also known as a POI. By default map icons are clickable.
     */
    clickableIcons: true,
    /*
     * Size in pixels of the controls appearing on the map. This value must be supplied directly when creating the Map, updating this value later may bring the controls into an undefined state. Only governs the controls made by the Maps API itself. Does not scale developer created custom controls.
     */
    controlSize: 28,
    /*
     * If false, prevents the map from being dragged. Dragging is enabled by default.
    * Note: This property is deprecated. To disable dragging on the map, you can use the gestureHandling property, and set it to "none".
     */
    draggable: true,
    /*
     * Enables/disables all default UI. May be overridden individually.
     */
    disableDefaultUI: false,
    /*
     * Enables/disables zoom and center on double click. Enabled by default.
    * Note: This property is not recommended. To disable zooming on double click, you can use the gestureHandling property, and set it to "none".
     */
    disableDoubleClickZoom: false,
    /*
     * The name or url of the cursor to display when mousing over a draggable map. This property uses the css cursor attribute to change the icon. As with the css property, you must specify at least one fallback cursor that is not a URL. For example: draggableCursor: 'url(http://www.example.com/icon.png), auto;'.
     */
    draggableCursor: '',
    /*
     * The name or url of the cursor to display when the map is being dragged. This property uses the css cursor attribute to change the icon. As with the css property, you must specify at least one fallback cursor that is not a URL. For example: draggingCursor: 'url(http://www.example.com/icon.png), auto;'.
     */
    draggingCursor: '',
    /*
     * The enabled/disabled state of the Fullscreen control.
     */
    fullscreenControl: true,
    /*
      * The initial Map mapTypeId. Defaults to ROADMAP.
    */
    mapTypeId: 'roadmap',
    /*
     * The display options for the Fullscreen control.
    */
    fullscreenControlOptions: false,
    /*
     * This setting controls how the API handles gestures on the map. Allowed values:
     * "cooperative": Scroll events and one-finger touch gestures scroll the page, and do not zoom or pan the map. Two-finger touch gestures pan and zoom the map. Scroll events with a ctrl key or ⌘ key pressed zoom the map.
     * In this mode the map cooperates with the page.
     * "greedy": All touch gestures and scroll events pan or zoom the map.
     * "none": The map cannot be panned or zoomed by user gestures.
     * "auto": (default) Gesture handling is either cooperative or greedy, depending on whether the page is scrollable or in an iframe.
     */
    gestureHandling: "auto",
    /*
     * The heading for aerial imagery in degrees measured clockwise from cardinal direction North. Headings are snapped to the nearest available angle for which imagery is available.
     */
    heading: 90,
    /*
     *  Controls the automatic switching behavior for the angle of incidence of the map. The only allowed values are 0 and 45. The value 0 causes the map to always use a 0° overhead view regardless of the zoom level and viewport. The value 45 causes the tilt angle to automatically switch to 45 whenever 45° imagery is available for the current zoom level and viewport, and switch back to 0 whenever 45° imagery is not available (this is the default behavior). 45° imagery is only available for satellite and hybrid map types, within some locations, and at some zoom levels. Note: getTilt returns the current tilt angle, not the value specified by this option. Because getTilt and this option refer to different things, do not bind() the tilt property; doing so may yield unpredictable effects.
     */
    tilt: 45,
    /*
     * If false, prevents the map from being controlled by the keyboard. Keyboard shortcuts are enabled by default.
     */
    keyboardShortcuts: true,
    /*
    *The initial enabled/disabled state of the Map type control.
    */
    mapTypeControl: true,
    /*
    *The initial display options for the Map type control.
    */
    mapTypeControlOptions: {
        style: google.maps.MapTypeControlStyle.DROPDOWN_MENU
    },
    /*
    * The maximum zoom level which will be displayed on the map. If omitted, or set to null, the maximum zoom from the current map type is used instead. Valid values: Integers between zero, and up to the supported maximum zoom level.
     */
    maxZoom: 30,
    /*
    * The minimum zoom level which will be displayed on the map. If omitted, or set to null, the minimum zoom from the current map type is used instead. Valid values: Integers between zero, and up to the supported maximum zoom level.
    */
    minZoom: 2,
    /*
    *If true, do not clear the contents of the Map div.
    */
    noClear: false,
    /*
     * If false, disables zooming on the map using a mouse scroll wheel. The scrollwheel is enabled by default.
     * Note: This property is not recommended. To disable zooming using scrollwheel, you can use the gestureHandling property, and set it to either "cooperative" or "none".
     */
    scrollwheel: true,
    /*
    *The enabled/disabled state of the Zoom control.
     */
    zoomControl: true,
    /*
    * The display options for the Zoom control.
    */
    zoomControlOptions: {
        position: google.maps.ControlPosition.LEFT_BOTTOM
    },
    /*
     *  The initial enabled/disabled state of the Scale control.
     */
    scaleControl: true,
    /*
     * A StreetViewPanorama to display when the Street View pegman is dropped on the map. If no panorama is specified, a default StreetViewPanorama will be displayed in the map's div when the pegman is dropped.
      */
    streetView: {},
    /*
     * The initial enabled/disabled state of the Street View Pegman control. This control is part of the default UI, and should be set to false when displaying a map type on which the Street View road overlay should not appear (e.g. a non-Earth map type).
      */
    streetViewControl: true,
    /*
     * The initial display options for the Street View Pegman control.
     */
    streetViewControlOptions: {
        position: google.maps.ControlPosition.LEFT_BOTTOM
    },
    /*
    * Defines a boundary that restricts the area of the map accessible to users. When set, a user can only pan and zoom while the camera view stays inside the limits of the boundary.
     */
    restriction: {
        /*
        * By default bounds are relaxed, meaning that a user can zoom out until the entire bounded area is in view. Bounds can be made more restrictive by setting the strictBounds flag to true. This reduces how far a user can zoom out, ensuring that everything outside of the restricted bounds stays hidden.
        */

    },
    /*
     * Styles to apply to each of the default map types. Note that for satellite/hybrid and terrain modes, these styles will only apply to labels and geometry.
     */
    // Styles a map in night mode.
    styles: [
        {elementType: 'geometry', stylers: [{color: '#242f3e'}]},
        {elementType: 'labels.text.stroke', stylers: [{color: '#242f3e'}]},
        {elementType: 'labels.text.fill', stylers: [{color: '#746855'}]},
        {
            featureType: 'administrative.locality',
            elementType: 'labels.text.fill',
            stylers: [{color: '#d59563'}]
        },
        {
            featureType: 'poi',
            elementType: 'labels.text.fill',
            stylers: [{color: '#d59563'}]
        },
        {
            featureType: 'poi.park',
            elementType: 'geometry',
            stylers: [{color: '#263c3f'}]
        },
        {
            featureType: 'poi.park',
            elementType: 'labels.text.fill',
            stylers: [{color: '#6b9a76'}]
        },
        {
            featureType: 'road',
            elementType: 'geometry',
            stylers: [{color: '#38414e'}]
        },
        {
            featureType: 'road',
            elementType: 'geometry.stroke',
            stylers: [{color: '#212a37'}]
        },
        {
            featureType: 'road',
            elementType: 'labels.text.fill',
            stylers: [{color: '#9ca5b3'}]
        },
        {
            featureType: 'road.highway',
            elementType: 'geometry',
            stylers: [{color: '#746855'}]
        },
        {
            featureType: 'road.highway',
            elementType: 'geometry.stroke',
            stylers: [{color: '#1f2835'}]
        },
        {
            featureType: 'road.highway',
            elementType: 'labels.text.fill',
            stylers: [{color: '#f3d19c'}]
        },
        {
            featureType: 'transit',
            elementType: 'geometry',
            stylers: [{color: '#2f3948'}]
        },
        {
            featureType: 'transit.station',
            elementType: 'labels.text.fill',
            stylers: [{color: '#d59563'}]
        },
        {
            featureType: 'water',
            elementType: 'geometry',
            stylers: [{color: '#17263c'}]
        },
        {
            featureType: 'water',
            elementType: 'labels.text.fill',
            stylers: [{color: '#515c6d'}]
        },
        {
            featureType: 'water',
            elementType: 'labels.text.stroke',
            stylers: [{color: '#17263c'}]
        }
    ]
});
var myLatLng = {lat: 41.3, lng: 69.3};
var marker = new google.maps.Marker({
    position: myLatLng,
    map: map,
    title: 'Hello World!',
    icon: ''
});
// There is array with lat and lng coordinates 
var flightPlanCoordinates = [];
var flightPath = new google.maps.Polyline({
    path: flightPlanCoordinates,
    geodesic: true,
    strokeColor: '#FF0000',
    strokeOpacity: 1.0,
    strokeWeight: 2
});

/*      infoWindow = new google.maps.InfoWindow();

      maxZoomService = new google.maps.MaxZoomService();

      map.addListener('click', showMaxZoom);
*/


/* function showMaxZoom(e) {
     maxZoomService.getMaxZoomAtLatLng(e.latLng, function(response) {
         if (response.status !== 'OK') {
             infoWindow.setCo  ntent('Error in MaxZoomService');
         } else {
             infoWindow.setContent(
                 'The maximum zoom at this location is: ' + response.zoom);
         }
         infoWindow.setPosition(e.latLng);
         infoWindow.open(map);
     });
 }*/

flightPath.setMap(map);

}
JS;
    }
}
