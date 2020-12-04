
<div class="container">
    <div class="row">
        <div class="">
            <div class=" input-group parennt bootstrap-touchspin bootstrap-touchspin-injected">
                <input width="auto" class="mt-2" id="demo1" type="text" value="50ss" name="demo1" >
                
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
        postfix: '%',
        //prefix: '$',
        verticalbuttons: false,n
        //verticalupclass: 'glyphicon glyphicon-plus',
        //verticaldownclass: 'glyphicon glyphicon-minus'
    });

    $('.input-group-btn button').removeClass('btn-primary').addClass('btn btn-success p-2 pl-3 pr-3 m-0 mt-2 border-none');
   /* $('.input-group-text') .addClass('mt-2 pt-2 pb-2 pl-3 pr-3 d-inline-block')*/


</script>


