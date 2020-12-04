<?

/**
 *
 *
 * render/blocks/ZEChartWidget
 * render/blocks/ZElfinderWidget
 * render/blocks/ZFooterChatBtnWidget
 * render/blocks/ZFullCalendarWidget
 * render/blocks/ZInfoBoxWidget
 */

use rmrevin\yii\fontawesome\FA;
use zetsoft\widgets\blocks\ZEChartNewWidget;
use zetsoft\widgets\blocks\ZElfinderWidget;
use zetsoft\widgets\blocks\ZFooterChatBtnWidget;
use zetsoft\widgets\blocks\ZFullCalendarWidget;
use zetsoft\widgets\blocks\ZFullCalendarWidget2;
use zetsoft\widgets\blocks\ZInfoBoxWidget;

?>



<div class="row">
    <div class="col">
        <?
        echo ZElfinderWidget::widget([
            'config' => [
                'type' => ['text/x-php', 'text/html']
            ]
        ]);
        ?>
    </div>
</div>


<div class="row">
    <div class="col">
        <?
        echo ZFullCalendarWidget2::widget([]);
        ?>
    </div>
</div>


<div class="row" style="margin-top: 100px;">
    <div class="col">
        <?
        echo ZFooterChatBtnWidget::widget([]);
        ?>
    </div>
</div>




<div class="row">
    <div class="col">
        <?
        echo ZInfoBoxWidget::widget([
            'config' => [
                'infoBodyColor' => ZInfoBoxWidget::color['cyan'],
                'icon' => FA::_CAMERA,
                'elementColor' => '#ffffff',
                'infoValue' => '123',
                'infoText' => 'This info text',
            ]
        ]);
        ?>
    </div>
</div>

