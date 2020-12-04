  <?php
  /** @var ZView $this */

  use zetsoft\system\kernels\ZView;

  $this->type = WebItem::type['part'];

  ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment</title>

    <style>

    </style>


</head>

<body>


<section class="main-form">
    <form action="" method="post" name="addReg">
        <div class="container">
            <div class="row">
                <div class="col-auto">
                    <h2 class="addres">Укажите адрес доставки</h2>
                </div>

                <div class="col-lg-10 mt-5">
                    <?php
                        echo \zetsoft\widgets\inputes\ZInputWidget::widget([
                             'config' => [
                                 'type' => \zetsoft\widgets\inputes\ZInputWidget::type['text'],
                                 'class' => 'mb-3',
                                 'placeholder' =>  'Улица',
                             ],
                        ]);
                    ?>
                </div>
                <div class="col-lg-10">
                    <div class="row">
                        <div class="col-lg-3 col-md-5">
                            <?php
                            echo \zetsoft\widgets\inputes\ZInputWidget::widget([
                                'config' => [
                                    'type' => \zetsoft\widgets\inputes\ZInputWidget::type['text'],
                                    'placeholder' =>  'Квартира',
                                ],
                            ]);
                            ?>
                        </div>

                        <div class="col-lg-3 col-md-5">
                            <?php
                            echo \zetsoft\widgets\inputes\ZInputWidget::widget([
                                'config' => [
                                    'type' => \zetsoft\widgets\inputes\ZInputWidget::type['text'],
                                    'class' => 'mb-lg-5',
                                    'placeholder' =>  'Подъезд',
                                ],
                            ]);
                            ?>
                        </div>

                        <div class="col-lg-3 col-md-5">
                            <?php
                            echo \zetsoft\widgets\inputes\ZInputWidget::widget([
                                'config' => [
                                    'type' => \zetsoft\widgets\inputes\ZInputWidget::type['text'],
                                    'class' => '',
                                    'placeholder' =>  'Этаж',
                                ],
                            ]);
                            ?>
                        </div>

                        <div class="col-lg-3 col-md-5">
                            <?php
                            echo \zetsoft\widgets\inputes\ZInputWidget::widget([
                                'config' => [
                                    'type' => \zetsoft\widgets\inputes\ZInputWidget::type['text'],
                                    'class' => '',
                                    'placeholder' =>  'Домофон',
                                ],
                            ]);
                            ?>
                        </div>

                    </div>
                </div>
                <div class="col-lg-5 mb-5">
                    <div class="form-input-name input-required">
                        <label for="phone">Номер телефона получателя</label>
                    </div>
                    <?php
                        echo \zetsoft\widgets\inputes\ZTelInputWidget::widget([]);
                    ?>
                </div>
                </div>

            </div>
        </div>
        <div class="map-receiver">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10">

                            <?php
                                echo \zetsoft\widgets\places\ZYandexWidget::widget();
                            ?>

                    </div>
                    <div class="col-lg-5 mt-3 d-flex justify-content-center">
                        <?php
                        echo \zetsoft\widgets\navigat\ZButtonWidget::widget([
                            'config'=> [
                                'color' => \zetsoft\system\assets\ZColor::color['green-special'],
                                'text' => 'Отмена',
                                'btn' => true,
                                'btnType' => \zetsoft\widgets\navigat\ZButtonWidget::btnType['link'],
                                'btnStyle' => \zetsoft\widgets\navigat\ZButtonWidget::btnStyle['btn-transparent'],
                                'class' => 'btn btn-outline-dark w-100 mr-2  rounded',
                                'url' => '#',
                                'btnRounded' => false,

                            ],
                        ]);
                        ?>
                        <?php
                        echo \zetsoft\widgets\navigat\ZButtonWidget::widget([
                            'config'=> [
                                'color' => \zetsoft\widgets\inputes\ZKColorInputWidget::color['green-special'],
                                'text' => 'Сохранить',
                                'btn' => true,
                                'btnType' => \zetsoft\widgets\navigat\ZButtonWidget::btnType['link'],
                                'btnStyle' => \zetsoft\widgets\navigat\ZButtonWidget::btnStyle['btn-transparent'],
                                'class' => 'btn btn-success w-100  rounded',
                                'url' => '#',
                                'btnRounded' => false,

                            ],
                        ]);
                        ?>
                        <!--<button type="reset" class="btn btn-outline-dark w-100 mr-2">Отмена</button>
                        <button type="submit" class="btn btn-success w-100 ">Сохранить</button>-->
                    </div>
                </div>
            </div>
        </div>
    </form>
</section>
<!-- ==== main_form_end ==== --><!--<script src="https://cdn.jsdelivr.net/npm/intl-tel-input@17.0.0/build/js/intlTelInput.js"></script>-->


</body>

</html>
