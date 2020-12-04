<html>
<head>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.pjax/2.0.1/jquery.pjax.min.js"></script>
</head>

<body>
<div id="valtozo">
    This will be replaced.
</div>

<div id="pjax-container">
    This will be replaced.
</div>

<a href="/render/former/ZJqueryPjaxWidget/samplehtm.html" data-pjax="#valtozo">Show news</a>


<script>

    $('a[data-pjax]').pjax(undefined, {
        error: function(jqXHR, textStatus, errorThrown) {
            alert("Could not use pjax!\n\n" + jqXHR + "\n\n" + textStatus + "\n\n" + errorThrown);
        }
    });

    $('body').bind('pjax:start', function(xhr, options) {
        $(options.container).fadeOut("fast", function() {
            alert("Faded out");
        });
    }).bind('pjax:end', function(xhr, options) {
        $(options.container).fadeIn("fast");
    });

    $(document).pjax('[data-pjax] a, a[data-pjax]', '#pjax-container');

    $('a').on('click', function (e) {
        e.preventDefault();
    });
</script>
</body>
</html>


ZImgCheckboxWidget
ZInputBtnWidget
ZInputLatinWidget
ZInputMaskWidget
ZInputSpinnerWidget
ZInputUniverseWidget
ZInputWidget
ZjQueryCustomCaretWidget
ZJqueryEmojiareaJsWidget
ZJqueryTextareafullscreenWidget
ZJqueryTextareaLibraryWidget
ZKCheckboxXWidget
ZKColorInputWidget
ZKDatecontrolWidget
ZKDatepickerWidget
ZKDateRangePickerWidget
ZKDateTimePickerWidget
ZKDepDropWidget
ZKNumberWidget
ZKPasswordInputWidget
ZKRange2Widget
ZKRangeInputWidget