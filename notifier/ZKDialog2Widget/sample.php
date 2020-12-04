<?php

use yii\web\JsExpression;
use zetsoft\widgets\notifier\ZKDialog2Widget;

?>

<button type="button" id="btn-alert" class="btn btn-info">Alert</button>
<button type="button" id="btn-confirm" class="btn btn-warning">Confirm</button>
<button type="button" id="btn-prompt" class="btn btn-primary">Prompt</button>
<button type="button" id="btn-dialog" class="btn btn-secondary">Dialog</button>

<?php
echo ZKDialog2Widget::widget([
    'config' => [
        'libName' => 'krajeeDialog', // a custom lib name
        'options' => [  // customized BootstrapDialog options
            'size' => ZKDialog2Widget::size['type-wide'], // large dialog text
            'type' => ZKDialog2Widget::type['type-info'], // bootstrap contextual color
            'title' => 'My Dialog',
            'nl2br' => false,
            'buttons' => [
                [
                    'id' => 'cust-submit-btn',
                    'label' => 'Submit',
                    'cssClass' => 'btn-primary',
                    'hotkey' => 'S',
                    'action' => new JsExpression("function(dialog) {
                    if (typeof dialog.getData('callback') === 'function' && dialog.getData('callback').call(this, true) === false) {
                        return false;
                    }
 
                    return dialog.close();
                }")
                ],
                [
                    'id' => 'cust-cancel-btn',
                    'label' => 'Cancel',
                    'cssClass' => 'btn-outline-secondary',
                    'hotkey' => 'C',
                    'action' => new JsExpression("function(dialog) {
                    if (typeof dialog.getData('callback') === 'function' && dialog.getData('callback').call(this, false) === false) {
                        return false;
                    }
 
                    return dialog.close();
                }")
                ],
            ]
        ]
    ],

]);
?>

<script>
    $("#btn-alert").on("click", function () {
        krajeeDialog.alert("This is a Krajee Dialog Alert!")
    });
    $("#btn-confirm").on("click", function () {
        krajeeDialog.confirm("Are you sure you want to proceed?", function (event) {
            if (result) {
                alert('Great! You accepted!');
            } else {
                alert('Oops! You declined!');
            }
        });
    });
    $("#btn-prompt").on("click", function () {
        krajeeDialog.prompt({label: 'Provide reason', placeholder: 'Upto 30 characters...'}, function (event) {
            if (result) {
                alert('Great! You provided a reason: \n\n' + result);
            } else {
                alert('Oops! You declined to provide a reason!');
            }
        });
    });

    $("#btn-dialog").on("click", function () {
        krajeeDialog.dialog(
            'This is a <b>custom dialog</b>. The dialog box is <em>draggable</em> by default and <em>closable</em> ' +
            '(try it). Note that the Ok and Cancel buttons will do nothing here until you write the relevant JS code ' +
            'for the buttons within "options". Exit the dialog by clicking the cross icon on the top right.',
            function (event) {
                alert(result);
            }
        );
    });
</script>
 
