
<!DOCTYPE html>
<!--
  ~  Licensed to GraphHopper GmbH under one or more contributor
  ~  license agreements. See the NOTICE file distributed with this work for
    ~  additional information regarding copyright ownership.
~
~  GraphHopper GmbH licenses this file to you under the Apache License,
  ~  Version 2.0 (the "License"); you may not use this file except in
  ~  compliance with the License. You may obtain a copy of the License at
  ~
  ~       http://www.apache.org/licenses/LICENSE-2.0
  ~
  ~  Unless required by applicable law or agreed to in writing, software
  ~  distributed under the License is distributed on an "AS IS" BASIS,
  ~  WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
~  See the License for the specific language governing permissions and
~  limitations under the License.
-->

<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="keywords" content="road routing,shortest path,maps,openstreetmap,android,navigation,routenplaner,gis"/>

        <link type="image/png" rel="icon" href="./favicon.ico"/>
        <link rel="search" type="application/opensearchdescription+xml" title="GraphHopper Maps" href="opensearch.xml"/>
        <title>Driving Directions - GraphHopper Maps</title>
        <meta name="description" content="A fast route planner for biking, hiking and more! Based on OpenStreetMap including elevation data. Try out for free!"/>
        <link rel="stylesheet" href="css/leaflet.css" />
        <link rel="stylesheet" href="css/leaflet_numbered_markers.css" />
        <link rel="stylesheet" href="css/leaflet.contextmenu.css" />
        <link rel="stylesheet" href="css/leaflet.loading.css" />
        <link rel="stylesheet" href="css/ui-lightness/jquery-ui.min.css" />
        <link rel="stylesheet" href="css/L.Control.Heightgraph.css" />
        <link rel="stylesheet" href="css/flatpickr.min.css">
        <script type="text/javascript" src="js/main.js"></script>
        <link rel="stylesheet" type="text/css" href="css/style.css" />
    </head>
    <body>
        <div id="input">
            <div id="input_header">
                <div id="header_img">
                    <a class="no_link" href="https://graphhopper.com">
                        <img alt="GraphHopper" src="img/header.png"/>
                    </a>
                </div>

        <div id="options">
                    <span id="vehicles">

                    </span>
        </div>
        <form id="locationform">
            <div class="time_input">
                <input id="input_date_0" class="flatpickr input_date" type="text" placeholder="Select Date &amp; Time"/>
            </div>
            <div id="locationpoints">
                <div id="x_pointAdd" class="pointAdd"><img src="img/point_add.png"/></div>
            </div>
            <div class="clear"></div>
            <input id="searchButton" type="submit" value="Search">
        </form>
        <div id="flex-input-link" class="left" style="cursor: pointer"><small>flex</small></div>
        <div id="export-link" class="left"><a href="/maps"><img src='img/link.png'></a></div>
        <div id="gpxExportButton"><a href=""><img alt="gpx" src='img/gpx.png'></a></div>
        <div id="flex-input" style="display: none">
            <textarea id="flex-input-text" name="Text1" cols="34" rows="10"></textarea>
            <input id="flex-search-button" style="float: right; margin-right: 5px" type="submit" value="Search">
            <div style="font-size: 0.8em; height: 105px" id="ev_value"></div>
        </div>
        <div id="hosting">Powered by <a href='https://www.graphhopper.com/products/'>GraphHopper API</a></div>
    </div>
    <div class="clear"></div>
    <div id="info" class="small_text">
    </div>
    <div id="error" class="error">
    </div>

    <div id="footer">
        <div id="link_line">
            <form id="donate_form" action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
                <input type="hidden" name="cmd" value="_s-xclick"/>
                <input type="hidden" name="hosted_button_id" value="P9JQECJKH46JN"/>
                <input id="donate_form_button" class="footer-link" type="submit" name="submit" value="Donate"/>
            </form>
            <a class="footer-link" href='https://graphhopper.com/#contact'>Imprint</a>
            <a class="footer-link" href='https://graphhopper.com/terms.html'>Terms</a>
            <a class="footer-link" href='https://graphhopper.com/privacy.html'>Privacy</a>
        </div>
    </div>

    <div id="pointTemplate" class="hidden">
        <div id="{id}_Div" class="pointDiv">
            <img id="{id}_Indicator" class="hidden pointIndicator" src="img/loading.gif"/>
            <img id="{id}_Flag" class="pointFlag" src="img/marker-small-green.png"/>
            <input id="{id}_Input" class="pointInput" type="text" placeholder=""/>
            <div class="pointDelete"><img src="img/point_delete.png"></div>
            <div class="clear"></div>
            <div id="{id}_ResolveFound" class="pointResolveFound"></div>
            <div id="{id}_ResolveError" class="pointResolveError"></div>
        </div>
    </div>
</div>
<div id="gpx_dialog" title="Included GPX data:">
    <form id="GPXOptions" name="GPXOptions">
        <label class="inline">
            <input type="checkbox" id="gpx_route" name="GPXOptions" value="route">Route</label>
        <br>
        <label class="inline">
            <input type="checkbox" id="gpx_track" name="GPXOptions" value="track" checked="checked">Track</label>
        <br>
        <label class="inline">
            <input type="checkbox" id="gpx_waypoints" name="GPXOptions" value="waypoints">Waypoints</label>
        <br>
    </form>
</div>
<div id="map">
</div>

<!-- Matomo -->
<script type="text/javascript">
PIWIK=true;
        if (PIWIK) {
            var _paq = window._paq || [];
            /* tracker methods like "setCustomDimension" should be called before "trackPageView" */
            _paq.push(['trackPageView']);
            _paq.push(['enableLinkTracking']);
            (function() {
                var u="//matomo.graphhopper.com/";
                _paq.push(['setTrackerUrl', u+'matomo.php']);
                _paq.push(['setSiteId', '1']);
                var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
            g.type='text/javascript'; g.async=true; g.defer=true; g.src=u+'matomo.js'; s.parentNode.insertBefore(g,s);
          })();
        }
</script>
<noscript><p><img src="https://matomo.graphhopper.com/matomo.php?idsite=1&amp;rec=1" style="border:0;" alt=""/></p></noscript>
<!-- End Matomo Code -->
</body>
</html>

