


    <script src="https://api-maps.yandex.ru/2.1/?lang=en_RU&amp;apikey=5fb7da25-bc18-4612-b304-83ea2266c510" type="text/javascript"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.min.js" type="text/javascript"></script>
    <style>


        #map {
            width: 95%; height: 700px;
        }
        #viewContainer {
            margin: 8px;
        }
    </style>


<body>
<div id="map"></div>
<div id="viewContainer"></div>
</body>
 <script>
     ymaps.modules.define('MultiRouteCustomView', [
         'util.defineClass'
     ], function (provide, defineClass) {
         // Class for a simple textual view of the multiroute model.
         function CustomView (multiRouteModel) {
             this.multiRouteModel = multiRouteModel;
             // Declaring the initial state.
             this.state = "init";
             this.stateChangeEvent = null;
             // The element the text will be displayed in.
             this.outputElement = $('<div></div>').appendTo('#viewContainer');

             this.rebuildOutput();

             /**
              * Subscribing to model events in order to
              *  update the multiroute's text description.
              */
             multiRouteModel.events
                 .add(["requestsuccess", "requestfail", "requestsend"], this.onModelStateChange, this);
         }

         // Mapping table for the state ID to its handler.
         CustomView.stateProcessors = {
             init: "processInit",
             requestsend: "processRequestSend",
             requestsuccess: "processSuccessRequest",
             requestfail: "processFailRequest"
         };

         // Mapping table for the route type to its handler.
         CustomView.routeProcessors = {
             "driving": "processDrivingRoute",
             "masstransit": "processMasstransitRoute",
             "pedestrian": "processPedestrianRoute"
         };

         defineClass(CustomView, {
             // Handler for model events.
             onModelStateChange: function (e) {
                 // Storing the model state and reconstructing the text description.
                 this.state = e.get("type");
                 this.stateChangeEvent = e;
                 this.rebuildOutput();
             },

             rebuildOutput: function () {
                 // Taking the handler for the current state from the table and executing it.
                 var processorName = CustomView.stateProcessors[this.state];
                 this.outputElement.html(
                     this[processorName](this.multiRouteModel, this.stateChangeEvent)
                 );
             },

             processInit: function () {
                 return "Initializing ...";
             },

             processRequestSend: function () {
                 return "Requesting data ...";
             },

             processSuccessRequest: function (multiRouteModel, e) {
                 var routes = multiRouteModel.getRoutes(),
                     result = ["The data was received successfully."]
                 if (routes.length) {
                     result.push("Total routes: " + routes.length + ".");
                     for (var i = 0, l = routes.length; i < l; i++) {
                         result.push(this.processRoute(i, routes[i]));
                     }
                 } else {
                     result.push("No rotes found.");
                 }
                 return result.join("<br/>");
             },

             processFailRequest: function (multiRouteModel, e) {
                 return e.get("error").message;
             },

             processRoute: function (index, route) {
                 // Taking the handler for this route type from the table and applying it.
                 var processorName = CustomView.routeProcessors[route.properties.get("type")];
                 return (index + 1) + ". " + this[processorName](route);
             },

             processDrivingRoute: function (route) {
                 var result = ["Car route."]
                 result.push(this.createCommonRouteOutput(route));
                 return result.join("<br/>");
             },

             processMasstransitRoute: function (route) {
                 var result = ["Examples. Route on public transport."]
                 result.push(this.createCommonRouteOutput(route));
                 result.push("The route description: <ul>" + this.createMasstransitRouteOutput(route) + "</ul>");
                 return result.join("<br/>");
             },

             processPedestrianRoute: function (route) {
                 var result = ["The walking route."]
                 result.push(this.createCommonRouteOutput(route));
                 return result.join("<br/>");
             },

             // A method that creates a common part of the description for all types of routes.
             createCommonRouteOutput: function (route) {
                 return "The length of the route: " + route.properties.get("distance").text + "<br/>" +
                     "Travel time: " + route.properties.get("duration").text;
             },

             /**
              * The method builds a list of text descriptions for all segments
              * of the route on public transport.
              */
             createMasstransitRouteOutput: function (route) {
                 var result = [];
                 for (var i = 0, l = route.getPaths().length; i < l; i++) {
                     var path = route.getPaths()[i];
                     for (var j = 0, k = path.getSegments().length; j < k; j++) {
                         result.push("<li>" + path.getSegments()[j].properties.get("text") + "</li>");
                     }
                 }
                 return result.join("");
             },

             destroy: function () {
                 this.outputElement.remove();
                 this.multiRouteModel.events
                     .remove(["requestsuccess", "requestfail", "requestsend"], this.onModelStateChange, this);
             }
         });

         provide(CustomView);
     });

 </script>
 <script>
     function init () {
         // Creating a multiroute model.
         var multiRouteModel = new ymaps.multiRouter.MultiRouteModel([
                 [55.734876, 37.59308],
                 "Myasnitskaya Street, Moscow"
             ], {
                 /**
                  * Waypoints can be dragged.
                  * The route adjusts when this happens.
                  */
                 wayPointDraggable: true,
                 boundsAutoApply: true
             }),

             // Creating a drop-down list for selecting the route type.
             routeTypeSelector = new ymaps.control.ListBox({
                 data: {
                     content: 'How to get there'
                 },
                 items: [
                     new ymaps.control.ListBoxItem({data: {content: "Car"},state: {selected: true}}),
                     new ymaps.control.ListBoxItem({data: {content: "Transport"}}),
                     new ymaps.control.ListBoxItem({data: {content: "Walk"}})
                 ],
                 options: {
                     itemSelectOnClick: false
                 }
             }),
             // Getting direct links to the list items.
             autoRouteItem = routeTypeSelector.get(0),
             masstransitRouteItem = routeTypeSelector.get(1),
             pedestrianRouteItem = routeTypeSelector.get(2);

         // Subscribing to click events on drop-down list items.
         autoRouteItem.events.add('click', function (e) { changeRoutingMode('auto', e.get('target')); });
         masstransitRouteItem.events.add('click', function (e) { changeRoutingMode('masstransit', e.get('target')); });
         pedestrianRouteItem.events.add('click', function (e) { changeRoutingMode('pedestrian', e.get('target')); });

         ymaps.modules.require([
             'MultiRouteCustomView'
         ], function (MultiRouteCustomView) {
             /**
              * Creating an instance of a textual display of the multiroute model.
              * See the custom_view.js file.
              */
             new MultiRouteCustomView(multiRouteModel);
         });

         // Creating the map with the button added to it.
         var myMap = new ymaps.Map('map', {
                 center: [55.750625, 37.626],
                 zoom: 7,
                 controls: [routeTypeSelector]
             }, {
                 buttonMaxWidth: 300
             }),

             // It will be based on the existing multiroute model.
             multiRoute = new ymaps.multiRouter.MultiRoute(multiRouteModel, {
                 /**
                  * Waypoints can be dragged.
                  * The route adjusts when this happens.
                  */
                 wayPointDraggable: true,
                 boundsAutoApply: true
             });

         // Adding a multiroute to the map.
         myMap.geoObjects.add(multiRoute);

         function changeRoutingMode(routingMode, targetItem) {
             multiRouteModel.setParams({ routingMode: routingMode }, true);

             // Disabling an option of selecting elements
             autoRouteItem.deselect();
             masstransitRouteItem.deselect();
             pedestrianRouteItem.deselect();

             // Selecting an element and closing the list.
             targetItem.select();
             routeTypeSelector.collapse();
         }
     }

     ymaps.ready(init);

 </script>


