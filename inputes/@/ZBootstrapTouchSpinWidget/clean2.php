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

<style>

    .input-group-text   {
    padding: 0 2px !important;
    }
</style>


<div class="container">
    <div class="row">
        <div class="mt-2">
            <input id="demo0"
                   type="text"
                   value="55"
                   name="demo0"
                   data-bts-min="0"
                   data-bts-max="100"
                   data-bts-init-val=""
                   data-bts-step="1"
                   data-bts-decimal="0"
                   data-bts-step-interval="100"
                   data-bts-force-step-divisibility="round"
                   data-bts-step-interval-delay="500"
                   data-bts-prefix=""
                   data-bts-postfix=""
                   data-bts-prefix-extra-class=""
                   data-bts-postfix-extra-class=""
                   data-bts-booster="true"
                   data-bts-boostat="10"
                   data-bts-max-boosted-step="false"
                   data-bts-mousewheel="true"
                   data-bts-button-down-class="btn btn-secondary"
                   data-bts-button-up-class="btn btn-secondary"/>
                
            </div>
        </div>
    </div>
</div>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"> </script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap-touchspin@4.3.0/dist/jquery.bootstrap-touchspin.min.js"></script>
<script>
    $("input[name='demo1']").TouchSpin({
        min: 0,
        max: 100,
        boostat: 5,
        maxboostedstep: 10,
        //postfix: '%',
        prefix: '$',
        verticalbuttons: false,
        //verticalupclass: 'glyphicon glyphicon-plus',
        //verticaldownclass: 'glyphicon glyphicon-minus'
    });

    $('.input-group-btn button').removeClass('btn-primary').addClass('btn btn-success p-2 m-0 mt-2 rounded border-none');
    $('.input-group-text') .addClass('mt-2')


</script>

<script>
    $("input[name='demo0']").TouchSpin();
</script>
