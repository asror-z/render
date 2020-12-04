<?php


use zetsoft\models\user\User;
use zetsoft\models\App\eyuf\EyufDocument;
use zetsoft\system\kernels\ZView;
use zetsoft\system\module\Models;
use zetsoft\widgets\former\ZDynaWidget;
use zetsoft\widgets\incores\ZDynaCheckboxWidget;

echo 'test';
$action->title = Azl . 'Пользователь';

$action->icon = 'fa fa-birthday-cake';
$action->icon =true;
$action->type = WebItem::type['html'];



$mainForm->configs->nameOn = [
    'photo',
    'email',
    'name',
    'role',
];

echo ZDynaCheckboxWidget::widget([
    'id' => '',
    'name' => 'selection_all',
    'config' => [
        'class' => 'select-on-check-all',
        'color' => ZDynaCheckboxWidget::color['red'],
        'label' => 'check all'
    ]
]);

$modelClass  = EyufDocument::class;

/** @var Models $model */
$model = new $modelClass();
$columns = $model->columns;

foreach ($columns as $key => $column) {
    echo ZDynaCheckboxWidget::widget([
        'name' => $key,
        'value' => $key,
        'config' => [
            'label' => $column->title,
            'class' => 'aziz',
            'color' => ZDynaCheckboxWidget::color['red']
        ]
    ]);
}

?>
    <button onclick="showLoc()">Show info</button>
    <span id="Get" class="btn btn-info">button</span>
<?

$jscheckbox = <<<JS
 
      $('.select-on-check-all').change(function (event) {
        if (e.currentTarget.checked) {
            $('.icheck-material-red').find('input[type="checkbox"]').prop('checked', true);
        } else {
            $('.icheck-material-red').find('input[type="checkbox"]').prop
            ('checked', false);
        }
    });
        
    $(document).on("click", "#Get", function() {

        var keys = "";

        $(".aziz").each(function (index) {
            if ($(this).prop("checked")) {
                keys += $(this).val() + "|";
            }
        });

        if (keys === "")
            alert("Элементы не выбраны?");

        else {
            if (window.confirm("Вы действительно хотите клонировать все эти данные?")) {
                window.location.href = "http://eyuf.zettest.uz/render/%40%20Other/lazy1/cleanMafa.html?value=" + keys;
            }
        }
    });
JS;
