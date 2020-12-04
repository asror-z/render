<?php

use zetsoft\dbitem\App\eyuf\RecaptchaItem;


if (!isset($item)) {
    $item = new RecaptchaItem();
    $item->url = 'form.aspx';
    $item->methodType = 'post';
    $item->site_key = '6LcDHLwZAAAAAI3W7vkMBOleSFpq5i-TmXHZHfE9';
}

?>

<script src="https://www.google.com/recaptcha/api.js?render=<?= $item->site_key ?>"></script>

<h1>Google reCAPTHA Demo</h1>
<form id="comment_form" action="<?= $item->url ?>" method="<?= $item->methodType ?>">
    <input type="email" name="email" placeholder="Type your email" size="40"><br><br>
    <textarea name="comment" rows="8" cols="39"></textarea><br><br>
    <input type="submit" name="submit" value="Post comment"><br><br>
</form>
<script>
    // when form is submit
    $('#comment_form').submit(function () {
        // we stoped it
        event.preventDefault();
        var email = $('#email').val();
        var comment = $("#comment").val();
        // needs for recaptacha ready
        grecaptcha.ready(function () {
            // do request for recaptcha token
            // response is promise with passed token
            grecaptcha.execute('<?=$item->site_key ?>', {action: 'create_comment'}).then(function (token) {
                // add token to form
                $('#comment_form').prepend('<input type="hidden" name="g-recaptcha-response" value="' + token + '">');
                $.post("<?= $item->url?>", {email: email, comment: comment, token: token}, function (event) {
                    console.log('result');
                    console.log(result);
                    if (result) {
                        alert('Thanks for posting comment.')
                    } else {
                        alert('You are spammer ! Get the @$%K out.')
                    }
                });
            });
            ;
        });
    });
</script>
