<link rel="stylesheet" href="/css/fontello-ie7.css">

<link rel="stylesheet" href="/demo/demo_files/fontello.css">
<link rel="stylesheet" type="text/css" href="/demo/demo_files/jquery.rcrumbs.css">
<link rel="stylesheet" type="text/css" href="/demo/demo_files/demo.css">
<script src="/demo/demo_files/jquery-1.9.1.js.Без названия"></script>
<script src="/demo/demo_files/jquery.rcrumbs.js.Без названия"></script>
<div class="content">
    <div class="description">
        <h1>Automatic resize (with animation)</h1>
        <span class="description-toggler">
    <i class="icon-info-circle"></i>
    </span>
        <div class="details">
            <p>The following breadcrumbs is loaded inside a div with a width of 100%. Thus, when the browser window is
                resized the div is also resized and the breadcrumbs is rerendered when the available space can display
                more or less items.</p>
        </div>
    </div>
    <div class="rcrumbs" id="breadcrumbs">
        <ul>
            <li class="show"><a href="javascript:">Home</a><span class="divider">&gt;</span></li><li class="show"><a href="javascript:">jQuery plugins</a><span class="divider">&gt;</span></li><li class="show"><a href="javascript:">Navigation</a><span class="divider">&gt;</span></li><li class="show"><a href="javascript:">Breadcrumbs</a><span class="divider">&gt;</span></li><li class="show"><a href="javascript:">rCrumbs</a><span class="divider">&gt;</span></li><li class="show"><a href="javascript:">Demo</a><span class="divider">&gt;</span></li><li class="show"><a href="javascript:">This is a demonstration to show how the rCrumbs jQuery plugin works</a></li></ul>
    </div>

    <div class="description">
        <h1>Automatic resize (without animation) </h1><span class="description-toggler"><i class="icon-info-circle"></i><i class="direction icon-down-open"></i></span>

        <div class="details">
            <p>Same as above but with the animation option deactivated.</p>
        </div>
    </div>
    <div class="rcrumbs" id="breadcrumbs-without-anim">
        <ul><li class="show"><a href="javascript:">Home</a><span class="divider">&gt;</span></li><li class="show"><a href="javascript:">jQuery plugins</a><span class="divider">&gt;</span></li><li class="show"><a href="javascript:">Navigation</a><span class="divider">&gt;</span></li><li class="show"><a href="javascript:">Breadcrumbs</a><span class="divider">&gt;</span></li><li class="show"><a href="javascript:">rCrumbs</a><span class="divider">&gt;</span></li><li class="show"><a href="javascript:">Demo</a><span class="divider">&gt;</span></li><li class="show"><a href="javascript:">This is a demonstration to show how the rCrumbs jQuery plugin works</a></li></ul>
    </div>

    <div class="description">
        <h1>Fixed breadcrumbs width</h1><span class="description-toggler"><i class="icon-info-circle"></i><i class="direction icon-down-open"></i></span>

        <div class="details">
            <p>This breadcrumbs is loaded inside a div with a width of 565px. The display of the navigation items
                is done only once (on page load).<br>
                The windowResize option is deactivated in order to avoid triggering the window resize event which is only needed
                when a rCrumbs is displayed inside a div with a percentage width.</p>
        </div>
        <div class="rcrumbs" id="breadcrumbs-fixed-width">
            <ul><li><a href="javascript:">Home</a><span class="divider">&gt;</span></li><li><a href="javascript:">jQuery plugins</a><span class="divider">&gt;</span></li><li><a href="javascript:">Navigation</a><span class="divider">&gt;</span></li><li><a href="javascript:">Breadcrumbs</a><span class="divider">&gt;</span></li><li class="show"><a href="javascript:">rCrumbs</a><span class="divider">&gt;</span></li><li class="show"><a href="javascript:">Demo</a><span class="divider">&gt;</span></li><li class="show"><a href="javascript:">This is a demonstration to show how the rCrumbs jQuery plugin works</a></li></ul>
        </div>
    </div>
</div>

<script>
    $("#breadcrumbs").rcrumbs();
    $("#breadcrumbs-fixed-width").rcrumbs({windowResize: false});
    $("#breadcrumbs-without-anim").rcrumbs({animation: {activated: false}});

    $('.description-toggler').on('click', function () {
        $(this).next('.details').first().toggle();
        var directionIcon = $(this).children('.direction');
        if (directionIcon.hasClass('icon-down-open')) {
            directionIcon.removeClass('icon-down-open');
            directionIcon.addClass('icon-up-open');
        } else {
            directionIcon.removeClass('icon-up-open');
            directionIcon.addClass('icon-down-open');
        }
    });
</script>
