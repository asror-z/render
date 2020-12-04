
    <script src="https://api-maps.yandex.ru/2.1/?load=Geolink&amp;lang=en_US&amp;apikey=5fb7da25-bc18-4612-b304-83ea2266c510" type="text/javascript"></script>
    <style type="text/css">
        #whiteText {
            background-color: #110;
            color: white;
            padding: 5px 0px 5px 8px;
        }

        #box {
            width: 100%;
            height: 100%;
            padding: 0;
            margin: 0;
            font-family: Arial, sans-serif;
            font-size: 15px;
            line-height: 22px;
        }
    </style>

<div id="box">
    <!-- To add a geolink to a page, you need to wrap the desired text in an HTML element with the "ymaps-geolink" CSS class
	and download the API code with the Geolink module.-->
    <p ><span class="ymaps-geolink">Moscow, Lva Tolstogo Street, 16</span> is the address of our office.</p>

    <!-- You can set various parameters for a geolink: search area of the object (data-bounds), object type (data-type),
		and the text to display in the title of the popup (data-description). -->
    <p id="whiteText">
        <span class="ymaps-geolink" data-bounds="[[55.73333783240489,37.586741441564136],
        [55.73433517114847,37.59017466910319]]" data-type="biz">Cafes</span> near our office.
    </p>
    <p>Take the metro to the station Park Kultury (on the ring). Exit the metro station and go to the right along
        Komsomolskiy Prospekt about 250 meters.
        Take another right on Timura Frunze Street. Continue along this street until you reach a red brick building with the sign
        "dom 11, str 2-5," where you will see a gate and a Yandex sign.</p>
    <p>If you are going to Yandex.Money, go to <span class="ymaps-geolink" data-bounds="[[55.63333783240489,37.486741441564136],
        [55.75433517114847,37.69017466910319]]" data-type="geo">Lva Tolstogo, 18B</span>.</p>
</div>
