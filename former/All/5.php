<?php

/**
 *
 *
 * Author:  Asror Zakirov
 * https://www.linkedin.com/in/asror-zakirov
 * https://github.com/asror-z
 *
 */

use zetsoft\models\App\eyuf\EyufScholar;
use zetsoft\widgets\former\ZSearchAutoAjaxWidget;
use zetsoft\widgets\former\ZSmartWizardWidget;
use zetsoft\widgets\former\ZTableWrapWidget;
use zetsoft\widgets\former\ZTopSearchWidget;
use zetsoft\widgets\former\ZViewWidget;

?>


<!--<div class="row" style="margin-top: 50px;">
 <div class="col">  <?php
/*  echo ZSearchAutoAjaxWidget::widget ([

  ]);

  */?>
 </div>
</div>-->

<div class="row" style="margin-top: 50px;">
 <div class="col">  <?php
  echo ZSmartWizardWidget::widget([
      'config' => [

      ],
      'data' => [
          ['Step1 title', 'Step1 Subtitle', 'Step1 text'],
          ['Step2 title', 'Step2 Subtitle', 'Step2 text'],
          ['Step3 title', 'Step3 Subtitle', 'Step3 text'],
          ['Step4 title', 'Step4 Subtitle', 'Step4 text'],
          ['Step5 title', 'Step5 Subtitle', 'Step5 text'],
          ['Step6 title', 'Step6 Subtitle', 'Step6 text'],

      ]
  ]);

  ?>
 </div>
</div>

<div class="row" style="margin-top: 50px;">
 <div class="col">  <?php
  echo ZTableWrapWidget::widget([]);

  ?>
 </div>
</div>

<div class="row" style="margin-top: 50px;">
 <div class="col">  <?php
  echo ZTopSearchWidget::widget([

  ]);

  ?>
 </div>
</div>

<div class="row" style="margin-top: 50px;">
 <div class="col">  <?php
  $model = new EyufScholar();
  echo ZViewWidget::widget([
      'model' => $model,

  ]);

  ?>
 </div>
</div>

