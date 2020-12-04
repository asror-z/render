<?php

/**
 *
 *
 * Author:  Asror Zakirov
 * https://www.linkedin.com/in/asror-zakirov
 * https://github.com/asror-z
 *
 */
?>

<div class="container" >
    <div class="row" style="height: 200vh">
        <div class="col-md-6 offset-md-3">
            <div class="scroll-parent">
            </div>
        </div>
    </div>
</div>

<script>

    $(document).ready(function () {
        $('body').scroll(function() {
            if($('body').scrollTop() + $('body').height() > $(document).height() - 100) {
                $('.scroll-parent').append('<h3>Obdev InfintyScroll</h3>')
                console.log('sdadas')
            }
        });
    })

</script>
