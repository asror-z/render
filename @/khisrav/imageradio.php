<div class="container">
    <div class="row">
        <div class="col-md-3">
            <div class="custom-control  custom-radio image-radio">
                <label class="thumbnail">
                    <input {type} >

                </label>
            </div>
        </div>
    </div>
</div>


<style>
    .borderIn{
        border:3px solid red;
        opacity: 0.5;
    }
    .thumbnail:hover{
        border:3px solid red;
        opacity: 0.6;
    }
</style>
<script >
    $('.custom-radio> label').on("click", function () {
        $("label").removeClass('borderIn');
        $(this).addClass('borderIn ');

    })
</script>
