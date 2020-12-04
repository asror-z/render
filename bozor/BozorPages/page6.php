  <?php
  /** @var ZView $this */

  use zetsoft\system\kernels\ZView;
  use zetsoft\widgets\incores\ZMCheckboxWidget;
  use zetsoft\widgets\navigat\ZButtonWidget;

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
        <table id="demo" class="table table-hover">
           
            <tbody>
            <tr>
                <td>
                    <?php
                        echo ZMCheckboxWidget::widget([
                        'config' => [
                         'placeholder' => '09-00 - 20-00',
                            ]
                        ]);
                        
                    ?>
                </td>
                <td>

                </td>
                <td>hoge</td>
                <td>
                    <?php
                        echo ZButtonWidget::widget();
                    ?>
                </td>
            </tr>
            </tbody>
        </table>

</body>

</html>
