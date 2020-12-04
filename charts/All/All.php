<?

/**
 *
 *
 * Author:  Asror Zakirov
 *
 * https://www.linkedin.com/in/asror-zakirov
 * https://www.facebook.com/asror.zakirov
 * https://github.com/asror-z
 *
 */

use zetsoft\former\chart\ChartForm;
use zetsoft\former\eyuf\ProgramForm;
use zetsoft\widgets\charts\ZChartFormWidget;
use zetsoft\widgets\charts\ZXYChartWidget;

/*
 *  render/charts/ZChartFormWidget
    render/charts/ZXYChartWidget
 *
 * */
?>

<div class="row">
    <div class="col">
        <?php
        $forms = [];

        $form = new ChartForm();
        $form->name = 'Monday';
        $form->in = 43.3;
        $form->out = 853.8;
        $forms[] = $form;


        $form = new ChartForm();
        $form->name = 'Tuesday';
        $form->in = 83.1;
        $form->out = 73.4;
        $forms[] = $form;


        $form = new ChartForm();
        $form->name = 'Wednesday';
        $form->in = 833.1;
        $form->out = 73.4;
        $forms[] = $form;


        $form = new ChartForm();
        $form->name = 'Thursday';
        $form->in = 843.1;
        $form->out = 73.4;
        $forms[] = $form;


        $form = new ChartForm();
        $form->name = 'Friday';
        $form->in = 83.1;
        $form->out = 73.4;
        $forms[] = $form;


        $form = new ChartForm();
        $form->name = 'Saturday';
        $form->in = 83.1;
        $form->out = 73.4;
        $forms[] = $form;


        $form = new ChartForm();
        $form->name = 'Sunday';
        $form->in = 83.1;
        $form->out = 73.4;
        $forms[] = $form;
            echo ZChartFormWidget::widget([
            'data' => $forms,
            'model' => $form
            ]);
        ?>
    </div>
</div>

<div class="row">
    <div class="col">
        <?php
            echo ZXYChartWidget::widget([

            ]);
        ?>
    </div>
</div>

