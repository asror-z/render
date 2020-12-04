<?


use zetsoft\system\kernels\ZView;

Az::$app->forms->zPjax->begin();
?>


<script>

    $(document).on('ready pjax:beforeSend', function () {
        popoverX_destroy();
    });

    $(document).on('ready pjax:success', function () {
        popoverX_init();
    });
    $(document).on('ready pjax:timeout', function () {
        e.preventDefault()
    });

    function popoverX_init() {
        $('[data-toggle="popover-x"]').popoverX([]);
        $('[data-toggle="popover-x"]').popoverButton([]);
    }

    function popoverX_destroy() {
        $('[data-toggle="popover-x"]').popoverX('validateOpenPopovers');
    }
    
</script>





<?


/** @var ZView $this */
echo Az::$app->cores->date->dateTime();

Az::$app->forms->zPjax->end();
?>
</div>


