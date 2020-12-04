<?php

use zetsoft\dbitem\App\eyuf\RecaptchaItem;

$item = new RecaptchaItem();
$item->url = '';
$item->site_key = '6Lc26t8UAAAAAFofGeFQJhMmHQR3OexuG3vgP5Ph'
?>

    <script type="text/javascript">
        var onloadCallback = function() {
            grecaptcha.render('recaptcha', {
                'sitekey' : '<?=$item->site_key?>'
            });
        };
    </script>
<body>
<form action="<?=$item->url?>" method="POST">
    <div id="recaptcha"></div>
    <br>
    <input type="submit" value="Submit">
</form>
<script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit"
        async defer>
</script>
</body>


