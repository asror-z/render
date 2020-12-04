<?php

/**
 *
 *
 * Author:  Asror Zakirov
 * https://www.linkedin.com/in/asror-zakirov
 * https://github.com/asror-z
 *
 */
$this->fileJs('https://cdn.jsdelivr.net/npm/imgcheckbox@0.5.3/jquery.imgcheckbox.min.js');
?>
<div class="d-flex list-unstyled" id="className">
    <input type="checkbox" id="cb1" />
    <label for="cb1"><img src="https://picsum.photos/seed/1/100" /></label>

    <input type="checkbox" id="cb2" />
    <label for="cb2"><img src="https://picsum.photos/seed/2/100" /></label>

    <input type="checkbox" id="cb3" />
    <label for="cb3"><img src="https://picsum.photos/seed/3/100" /></label>

    <input type="checkbox" id="cb4" />
    <label for="cb4"><img src="https://picsum.photos/seed/4/100" /></label>

</div>

<script>
    $("#className label img").imgCheckbox({
        graySelected: true, //Boolean
        scaleSelected: true, //Boolean
        fixedImageSize: false, //Boolean / String
        scaleCheckMark: true, //Boolean
        fadeCheckMark: false,  //Boolean
        checkMarkSize: "20px", //Boolean or string
        checkMarkPosition: "top-left", //String
        addToForm: false, //Boolean / jQuery
        preselect: [],  //[Integer] / Boolean
        radio: false, //Boolean
        canDeselect: false, //	Boolean
        onload: function () {
            console.log('loaded')
        },
        onclick: function (el) {
            console.log('clicked')
        },
        debugMessages: false,
    });
</script>
