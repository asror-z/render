<?php

/**
 *
 *
 * Author:  Asror Zakirov
 * https://www.linkedin.com/in/asror-zakirov
 * https://www.facebook.com/asror.zakirov
 * https://github.com/asror-z
 *
 */


use zetsoft\widgets\notifier\ZModalWidget;


$content = '<div class="card-container">
    <!-- Card -->
<div class="card">

  <!-- Card image -->
  <img class="card-img-top" src="" alt="">

  <!-- Card content -->
  <div class="card-body">
<form id="w1" class="form-horizontal kv-form-horizontal kv-form-bs4" action="#" method="post" enctype="multipart/form-data" data-pjax="0">
<input type="hidden" name="_csrf" value="Xr-efnTSW4HALYTEub6GsAlLyp2C2Hg07keJlSd8z6k_6_kyH5528bp9tq7K0cDXQiyn0OaTQXKgAMvMajuk0w==">
        <div class="login-logo">
            <a href="/" target="_blank">
                <img src="/zetimg/<?=App?>/logo.jpg" alt="ZCore.uz">
            </a>
        </div>

        	
		
<div class="highlight-addon row field-User-name required">

<div class="col-md-12">
           <div class="md-form m-0">
                     <i class="icon-prefix prefix fa fa-th "></i>
           <input type="text" id="User-name" class="kv-editable-input form-control  " name="User[name]" placeholder="Имя">
</div>


<div class="help-block invalid-feedback"></div>
</div>
</div>

	


	
		
<div class="highlight-addon row field-User-title">

<div class="col-md-12">
           <div class="md-form m-0">
                     <i class="icon-prefix prefix fa fa-cutlery "></i>
           <input type="text" id="User-title" class="kv-editable-input form-control  " name="User[title]" placeholder="ФИО">
</div>


<div class="help-block invalid-feedback"></div>
</div>
</div>

	


	
		
<div class="highlight-addon row field-User-email required">

<div class="col-md-12">
           <div class="md-form m-0">
                     <i class="icon-prefix prefix fa fa-cloud-download "></i>
           <input type="text" id="User-email" class="kv-editable-input form-control  " name="User[email]" placeholder="E-mail">
</div>


<div class="help-block invalid-feedback"></div>
</div>
</div>

	


	
		
<div class="highlight-addon row field-User-password required">

<div class="col-md-12">
        <div class="md-form ">  
                    <i class="icon-prefix prefix fa fa-desktop"></i> 
            <div class="ml-5">  
                <div class="kv-password"><table class="kv-strength-container"><tbody><tr>
<td><input type="password" id="User-password" name="User[password]" placeholder="Пароль" class="form-control"></td>
<td class="kv-meter-container"><div class="kv-meter"><div class="kv-scorebar-border"><div class="kv-scorebar" style="background-position: 0px center;"></div><div class="kv-score kv-score-0">0%</div></div><div class="kv-verdict"><div class="badge badge-default">1Too Short</div></div></div></td>
</tr></tbody></table><input type="hidden" value="0"></div>
            </div>
</div>

<div class="help-block invalid-feedback"></div>
</div>
</div>

	


<button type="submit" class="btn btn-primary">Регистрация</button>             <button data-target="" type="button" id="w14" title="" data-toggle="tooltip" data-pjax="1" class="btn  ovr-button   btn-primary   hint--top hint--info hint--medium hint--bounce hint--rounded text-white" aria-label="" aria-hidden="true" name="">
                 
                 Вход в систему
             </button> 
             
                
        <!--<p class="mb-0">
                    </p>-->

        </form>
  </div>

</div>

</div>';

echo ZModalWidget::widget([
    'config' => [
        'type' => ZModalWidget::type['central'],
        'position' => ZModalWidget::position['top'],
        'sidePosition' => ZModalWidget::SidePositon['right'],
        //'size' => ZModalWidget::Size['lg'],
        'modalTitle' => 'Modal Title',
        'modalBodyContent' => $content,
        'styleType' => ZModalWidget::StyleType['success'],
        'frameSidePosition' => ZModalWidget::FrameSidePosition['bottom'],
        'closeButtonTitle' => 'Close',
        'checkButtonTittle' => 'Save',
        'triggerButtonStyle' => ZModalWidget::TriggerButtonStyle['secondary'],
        'triggerButtonTitle' => 'show me',
    ]
]);
echo ZModalWidget::widget([
    'config' => [
        'type' => ZModalWidget::type['central'],
        'position' => ZModalWidget::position['top'],
        'sidePosition' => ZModalWidget::SidePositon['right'],
        //'size' => ZModalWidget::Size['lg'],
        'modalTitle' => 'Modal Title',
        'modalBodyContent' => '',
        'styleType' => ZModalWidget::StyleType['success'],
        'frameSidePosition' => ZModalWidget::FrameSidePosition['bottom'],
        'closeButtonTitle' => 'Close',
        'checkButtonTittle' => 'Save',
        'triggerButtonStyle' => ZModalWidget::TriggerButtonStyle['secondary'],
        'triggerButtonTitle' => 'show me',
    ]
]);
