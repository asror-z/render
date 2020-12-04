<?php
?>

<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title></title>
    <!-- Responsive Video Slider CSS -->
    <link href="/render/navigat/ZVideoSliderWidget/rvslider.latest/css" rel="stylesheet">
</head>
<body>
<!-- Responsive Video Slider HTML: START -->
<div class="rvs-container">

    <div class="rvs-item-container">
        <div class="rvs-item-stage">

            <!-- The below is a single item, simply duplicate this layout for each item -->
            <div class="rvs-item"
                 style="background-image: url('https://upload.wikimedia.org/wikipedia/commons/b/bc/SF_-_Socialistiske_Folkeparti.svg')">
                <p class="rvs-item-text">VIDEO_TITLE <small>by VIDEO_CREDITS</small></p>
                <a href="https://youtu.be/MDKa_PzQmH0" class="rvs-play-video"></a>
            </div>

        </div>
    </div>

    <div class="rvs-nav-container">
        <a class="rvs-nav-prev"></a>
        <div class="rvs-nav-stage">

            <!-- The below is the corresponding nav item for the single item, simply duplicate this layout for each item -->
            <a class="rvs-nav-item">
                <span class="rvs-nav-item-thumb"
                      style="background-image: url('https://upload.wikimedia.org/wikipedia/commons/b/bc/SF_-_Socialistiske_Folkeparti.svg')"></span>
                <h4 class="rvs-nav-item-title">VIDEO_TITLE</h4>
                <small class="rvs-nav-item-credits">by VIDEO_CREDITS</small>
            </a>

        </div>
        <a class="rvs-nav-next"></a>
    </div>

</div>
<!-- Responsive Video Slider HTML: END -->

<!-- Placed at the end of the document so the pages load faster -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.min.js"></script>
<!-- Responsive Video Slider JS -->
<script src="/render/navigat/ZVideoSliderWidget/rvslider.latest/js/rvslider.js"></script>
<script>
$(document).ready(()=> {
 let file = '/render/asrorz/js/ALL.js'
    if ( file) {
        file.detach( "body" );

    }
})
    jQuery(function ($) {
        $('.rvs-container').rvslider();
    });
</script>
</body>
</html>
