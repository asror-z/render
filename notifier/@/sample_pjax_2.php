<?


use zetsoft\system\kernels\ZView;

Az::$app->forms->zPjax->begin();
?>

<link rel="stylesheet" href="/publish/yarner/bootstrap-popover-x/css/bootstrap-popover-x.min.css">

<div class="container mt-5 pt-5">
    <!-- Button -->
    <a id="popover-btn" class="btn-floating btn-secondary"><i class="fas fa-user"></i></a>



    <!-- PopoverX content -->


    <div id="myPopover" class="popover popover-x popover-default  popover-md">
        <div class="arrow"></div>
        <div class="popover-header popover-title">
            <button type="button" class="close" data-dismiss="popover-x">&times;</button>
            <button type="button" class="ajax" >ajax</button>
            My Header</div>
        <div class="popover-body popover-content">
            <p class="text-justify">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.</p>
        </div>
    </div>

    <script type="text/javascript" src="/publish/yarner/bootstrap-popover-x/js/bootstrap-popover-x.min.js"></script>
<script>
    $(document).ready(function() {
        // use the popoverButton plugin
        $('#popover-btn').popoverButton({
            placement: 'bottom bottom-left',
            target: '#myPopover',
            closeOpenPopovers: false,
            keyboard: false,
            show: false,
        }).on('click.popoverX', function () {
            console.log('clickTarget')
        }).on('focusin.popoverX', function () {
            console.log('focusin.popoverX')
        }).on('mouseleave.popoverX', function () {
            console.log('mouseleave.popoverX')
        }).on('focusout.popoverX', function () {
            console.log('focusout.popoverX')
        }).on('mouseenter.popoverX', function () {
            console.log('mouseenter.popoverX')
        });

        $('myPopover').popoverX({
            closeOpenPopovers: true,
            autoPlaceSmallScreen: true,
            smallScreenWidth: 640,
            keyboard: true,
            show: false,
            backdrop: null,
            remote: ''
        }).on('hidden.bs.modal', function () {
            console.log('hidden.bs.modal')
        }).on('show.bs.modal', function () {
            console.log('show.bs.modal')
        });
    });

    $('.ajax').click(function () {
          
    });
</script>


<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>


<?

/** @var ZView $this */
echo Az::$app->cores->date->dateTime();

Az::$app->forms->zPjax->end();
?>


