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

<div class="col-md-1 mt-5 text-center ">
        <div class="counts-up" role="button">
            <i class="fas fa-sort-up  fr-13 text-muted"></i>
        </div>

        <div class="">
            <input type="text" value="0" class="w-50 border-0 text-center count">
        </div>

        <div class="counts-down" role="button">
            <i class="fas fa-sort-down fr-13 text-muted"></i>
        </div>
</div>


<script>
    $('.counts-up').on("click",function () {
    var main = $('.count');
     var value = $('.count').val();
     var valInt = parseInt(value);
     value++;
     main.val(value);
    });
    $('.counts-down').on("click",function () {
        var main = $('.count');
        var value = $('.count').val();
        var valInt = parseInt(value);
        if (value>0) value--;
        else value = 0;
        main.val(value);
    });

</script>

