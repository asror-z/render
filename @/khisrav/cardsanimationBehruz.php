<div class="container">
    <div class="row">
        <div class="col-md-3">
            <div class="custom-control  custom-checkbox image-checkbox">
                <label class="thumbnail">
                    <img src="https://images-na.ssl-images-amazon.com/images/G/01/AmazonExports/Fuji/2019/July/amazonbasics_520x520._SY304_CB442725065_.jpg" alt="#"  class="img-fluid">

                </label>
            </div>
        </div>
        <div class="col-md-3">
            <div class="custom-control  custom-checkbox image-checkbox">

                <label class="thumbnail">
                    <img src="https://images-na.ssl-images-amazon.com/images/G/01/AmazonExports/Fuji/2019/July/amazonbasics_520x520._SY304_CB442725065_.jpg" alt="#"  class="img-fluid">
                </label>
            </div>
        </div>
        <div class="col-md-3">
            <div class="custom-control  custom-checkbox image-checkbox">

                <label class="thumbnail">
                    <img src="https://images-na.ssl-images-amazon.com/images/G/01/AmazonExports/Fuji/2019/July/amazonbasics_520x520._SY304_CB442725065_.jpg" alt="#"  class="img-fluid">
                </label>
            </div>
        </div>
        <div class="col-md-3">
            <div class="custom-control  custom-checkbox image-checkbox">

                <label class="thumbnail" >
                    <img src="https://images-na.ssl-images-amazon.com/images/G/01/AmazonExports/Fuji/2019/July/amazonbasics_520x520._SY304_CB442725065_.jpg" alt="#" class="img-fluid">
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
    $('.custom-checkbox > label').on("click", function () {
        $("label").removeClass('borderIn');
        $(this).addClass('borderIn ');

    })
</script>
