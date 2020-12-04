<!--<script src="https://www.google.com/recaptcha/api.js"></script>-->

<?php

use zetsoft\dbitem\App\eyuf\RecaptchaItem;

if(!isset($item)){
    $item = new RecaptchaItem();
    $item->url= '/render/actions/ZRecaptchaWidget/validator';
    $item->methodType = '';
    $item->site_key = '6LcDHLwZAAAAAI3W7vkMBOleSFpq5i-TmXHZHfE9';
}

?>

<script src="https://www.google.com/recaptcha/api.js?render=<?= $item->site_key?>"></script>

<script>
    grecaptcha.ready(function() {
        // do request for recaptcha token
        // response is promise with passed token
        grecaptcha.execute('<?=$item->site_key?>', {action:'validate_captcha'})
            .then(function(token) {
                // add token value to form
                document.getElementById('g-recaptcha-response').value = token;
            });
    });
</script>


<form id="form_id" method="<?=$item->methodType ?>" action="<?= $item->url ?>">
    <input type="hidden" id="g-recaptcha-response" name="g-recaptcha-response">
    <input type="hidden" name="action" value="validate_captcha">
    <button type="submit" value="1" data-placeholder="enter" > enter </button>
</form>



<?php
/*$response = '';

if (isset($_POST['g-recaptcha-response'])) {
    $captcha = $_POST['g-recaptcha-response'];
} else {
    $captcha = false;
}

if (!$captcha) {
    //Do something with error
} else {
    $secret   = 'Your secret key here';
    $response = file_get_contents(
        "https://www.google.com/recaptcha/api/siteverify?secret=" . $secret . "&response=" . $captcha . "&remoteip=" . $_SERVER['REMOTE_ADDR']
    );
    // use json_decode to extract json response
    $response = json_decode($response);

    if ($response->success === false) {
        //Do something with error
    }
}*/

//... The Captcha is valid you can continue with the rest of your code
//... Add code to filter access using $response . score
/*if ($response->success==true && $response->score <= 0.5) {
    //Do something to denied access
}*/





