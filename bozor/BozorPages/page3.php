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



    <style>
        .input-required label:after{
            display: inline-block;
            content: '*';
            padding-left: 10px;
        }
        .link-collor{
            color: limegreen;
            text-decoration: underline;
        }
        .form-agree .custom-control-input:checked~.custom-control-label::before,.form-subscribe-news .custom-control-input:checked~.custom-control-label::before{
            border-color: limegreen;
            background-color: limegreen;
        }

        .iti__flag {background-image: url("/render/bozor/@ Pages/page_12_profil/img/flags.png");}

        @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
            .iti__flag {background-image: url("/render/bozor/@ Pages/page_12_profil/img/flags@2x.png");}
        }
        .about-regstration{
            padding: 21px 25px;
            background-color: #f3f3f3;
            border-radius: 10px;
        }
        .iti{
            width: 100%;
        }
        .my-profil{
            border-bottom: 1px solid #ced4da;
            padding-bottom: 10px;
        }
        .my-profil a{
            padding: 10px 20px;
            text-decoration: none;
            color: #000;
        }
        .my-profil a.active{
            position: relative;
        }
        .my-profil a.active::after{
            display: block;
            content: '';
            height: 5px;
            width: 100%;
            background-color: #28a745;
            position: absolute;
            bottom: -5px;
        }

    </style>
</head>
<body>

<div class="container container-full">

    <div class="row mb-5 mt-5 justify-content-center">
        <div class="col-lg-12">
            <!--<div class="my-profil">-->
                <a href="#" class="active">Изменить профиль</a>
          <!--  </div>-->
        </div>
    </div>

    <div class="row justify-content-between">
        <div class="col-lg-7">
            <form action="" method="post" name="regForm">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="form-field-name input-required">
                            <label for="first-name">Имя:</label>
                        </div>
                    </div>
                    <div class="col-lg-8 mb-3">
                        <!--<input type="text" name="first-name" class="form-control" id="first-name" required="required">-->
                     <div>
                        <?php
                          echo \zetsoft\widgets\inputes\ZInputWidget::widget([
                              'config' => [
                                  'type' => \zetsoft\widgets\inputes\ZInputWidget::type['text'],
                                  
                              ],
                          ]);
                        ?>
                    </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="form-field-name input-required">
                            <label for="last-name">Фамилия:</label>
                        </div>
                    </div>
                    <div class="col-lg-8 mb-3">
                        <!--<input type="text" name="first-name" class="form-control" id="first-name" required="required">-->
                        <?php
                        echo \zetsoft\widgets\inputes\ZInputWidget::widget([
                            'config' => [
                                'type' => \zetsoft\widgets\inputes\ZInputWidget::type['text'],

                            ],
                        ]);
                        ?>
                    </div>

                    <div class="col-lg-4">
                        <div class="form-field-name input-required">
                            <label for="middle-name">Отчество:</label>
                        </div>
                    </div>
                    <div class="col-lg-8 mb-3">
                        <!--<input type="text" name="first-name" class="form-control" id="first-name" required="required">-->
                        <?php
                        echo \zetsoft\widgets\inputes\ZInputWidget::widget([
                            'config' => [
                                'type' => \zetsoft\widgets\inputes\ZInputWidget::type['text'],

                            ],
                        ]);
                        ?>
                    </div>

                    <div class="col-lg-4">
                        <div class="form-field-name input-required">
                            <label for="email">E-Mail:</label>
                        </div>
                    </div>
                    <div class="col-lg-8 mb-3">
                        <!--<input type="text" name="first-name" class="form-control" id="first-name" required="required">-->
                        <?php
                        echo \zetsoft\widgets\inputes\ZInputWidget::widget([
                            'config' => [
                                'type' => \zetsoft\widgets\inputes\ZInputWidget::type['text'],

                            ],
                        ]);
                        ?>
                    </div>

                    <div class="col-lg-4">
                        <div class="form-field-name input-required">
                            <label for="phone">Контактный телефон:</label>
                        </div>
                    </div>
                    <div class="col-lg-8 mb-3">
                        <!--<input type="text" name="first-name" class="form-control" id="first-name" required="required">-->
                        <?php
                        echo \zetsoft\widgets\inputes\ZTelInputWidget::widget([

                        ]);
                        ?>
                    </div>

                    <div class="col-lg-4">
                        <div class="form-field-name input-required">
                            <label for="password">Пароль:</label>
                        </div>
                    </div>
                    <div class="col-lg-8 mb-3">
                        <?php
                        echo \zetsoft\widgets\inputes\ZKPasswordInputWidget::widget([
                             'name' => 'name',
                        ]);
                        ?>
                    </div>

                    <div class="col-lg-4">
                        <div class="form-field-name input-required">
                            <label for="password-confirm">Повторите пароль:</label>
                        </div>
                    </div>
                    <div class="col-lg-8 mb-3">
                        <?php
                        echo \zetsoft\widgets\inputes\ZKPasswordInputWidget::widget([
                            'name' => 'name',
                        ]);
                        ?>
                    </div>

                    <div class="col-lg-4">
                        <div class="form-field-name">
                            <label for="subscribe-news">Подписаться на новости</label>
                        </div>
                    </div>
                    <div class="col-lg-8 mb-3">
                        <!-- <input type="checkbox" name="subscribe-news" class="" id="subscribe-news"> -->

                        <?php
                        echo \zetsoft\widgets\inputes\ZHCheckboxWidget::widget([
                            'name' => 'name',
                        ]);
                        ?>
                    </div>

                    <div class="col-lg-4">
                        <div class="form-field-name input-required">
                            <label for="form-captcha">Проверочный код:</label>
                        </div>
                    </div>
                    <div class="col-lg-8 mb-3">
                        <?php
                        echo \zetsoft\widgets\inputes\ZInputWidget::widget([
                            'config' => [
                                'type' => \zetsoft\widgets\inputes\ZInputWidget::type['text'],

                            ],
                        ]);
                        ?>
                    </div>
                    <div class="col-lg-4"></div>
                    <div class="col-lg-8 mb-5">
                        <img src="/render/bozor/@ Pages/page_12_profil/captcha.png">
                        <a href="#" class="link-collor">
                            <?php
                            echo \zetsoft\widgets\navigat\ZButtonWidget::widget([
                                'name' => 'name',
                            ]);
                            ?>
                        Обновить</a>
                    </div>

                    <div class="col-lg-12">
                        <?php
                        echo \zetsoft\widgets\navigat\ZButtonWidget::widget([
                            'name' => 'name',
                        ]);
                        ?>
                    </div>




                </div>
            </form>
        </div>
        <div class="col-lg-4">


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
use zetsoft\widgets\inputes\ZInputWidget;
use zetsoft\widgets\inputes\ZHInputWidget;
use zetsoft\widgets\inputes\ZInputWidget;
