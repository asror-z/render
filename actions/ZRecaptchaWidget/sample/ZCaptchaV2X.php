<?php

use zetsoft\dbitem\App\eyuf\RecaptchaItem;
use zetsoft\system\kernels\ZView;

/**
 * Created By: XakimjonErgashov
 */

/** @var ZView $this */

if(!isset($item)) {
    $item = new RecaptchaItem();
    $item->actionUrl = '';
    $item->site_key = '6Lc26t8UAAAAAFofGeFQJhMmHQR3OexuG3vgP5Ph';
}
?>

    <script type="text/javascript">
        var onloadCallback = function() {
            grecaptcha.render('html_element', {
                'sitekey' : '<?=$item->site_key?>'
            });
        };
    </script>
<body>
<form action="<?=$item->actionUrl?>" method="POST">
    <div id="html_element"></div>
    <br>
    <input type="submit" value="Submit">
</form>
<script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit"
        async defer>
</script>
</body>


