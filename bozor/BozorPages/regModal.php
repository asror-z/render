<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/intl-tel-input@17.0.0/build/css/intlTelInput.css">



</head>
<body>
<!--<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#reg_modal" data-whatever="@mdo">Open modal for @mdo</button>-->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#reg_modal" data-whatever="@fat">reg</button>
<!--<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#reg_modal" data-whatever="@getbootstrap">Open modal for @getbootstrap</button>-->

<div class="modal fade" id="reg_modal" tabindex="-1" role="dialog" aria-labelledby="reg_modalLabel" aria-hidden="false">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <button type="button" class="btn btn-success">Login</button>
                        <button type="button" class="btn btn-success">Registration</button><br>
                        <?php
                        echo \zetsoft\widgets\inputes\ZInputWidget::widget([
                            'config' => [
                                'type' => \zetsoft\widgets\inputes\ZInputWidget::type['text'],

                            ],
                        ]);
                        ?>
                        <?php
                        echo \zetsoft\widgets\inputes\ZKPasswordInputWidget::widget([
                            'name' => 'name',
                        ]);
                        ?>
//                    <?php
                    echo \zetsoft\widgets\inputes\ZHCheckboxWidget::widget([
                        'name' => 'name',
                    ]);
                    ?>
                    <a href="#">Забыли пароль?</a>
                        <?php
                        echo \zetsoft\widgets\navigat\ZButtonWidget::widget([
                            'name' => 'name',
                        ]);
                        ?>
                </form>
            </div>
        </div>
    </div>
</div>




<script src="https://cdn.jsdelivr.net/npm/intl-tel-input@17.0.0/build/js/intlTelInput.js"></script>

<script>
    var input = document.querySelector("#phone");
    window.intlTelInput(input, {
        // allowDropdown: false,
        autoHideDialCode: false,
        // autoPlaceholder: "off",
        // dropdownContainer: document.body,
        // excludeCountries: false,
        // formatOnDisplay: false,
        // geoIpLookup: function(callback) {
        //   $.get("http://ipinfo.io", function() {}, "jsonp").always(function(resp) {
        //     var countryCode = (resp && resp.country) ? resp.country : "";
        //     callback(countryCode);
        //   });
        // },
        // hiddenInput: "full_number",
        initialCountry: "uz",
        // localizedCountries: { 'de': 'Deutschland' },
        // nationalMode: false,
        onlyCountries: ['ru', 'uz', 'de', 'us'],
        // placeholderNumberType: "MOBILE",
        // preferredCountries: ['cn', 'jp'],
        // separateDialCode: true,
        utilsScript: "https://cdn.jsdelivr.net/npm/intl-tel-input@17.0.0/build/js/utils.js",
    });
</script>


</body>
</html>
<!--use zetsoft\widgets\inputes\ZInputWidget;-->
<!--use zetsoft\widgets\inputes\ZHInputWidget;-->
<!--use zetsoft\widgets\inputes\ZInputWidget;-->
