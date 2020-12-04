<?php

/**
 *
 *
 * Author:  Asror Zakirov
 * https://www.linkedin.com/in/asror-zakirov
 * https://github.com/asror-z
 *
 */
  ?>
<div class='zwidget parent-div ZKSelect2Widget-51537' data-id='ZKSelect2Widget-51537' data-css='' ajaxable='true'><!--BEGIN--><div class='widgetsWrap' parent-id='ZKSelect2Widget-51537' widget='zetsoft\widgets\inputes\ZKSelect2Widget' config='{"label":null,"name":null,"depend":null,"class":"kv-editable-input kselect2","cooler":false,"begin":false,"namespace":"inputs","service":"depDrops","method":"ajax","args":"","grapes":true,"grapeIcon":"fas fa-ghost","grapeName":"ZKSelect2Widget-test","grapeTitle":"ZKSelect2Widget: Hello home!","badge":null,"hidden":false,"badgeType":null,"ttText":null,"ttSide":"top","ttColor":"info","ttSize":"medium","ttAnimate":"default","placeholder":null,"readonly":false,"disabled":false,"confirm":true,"changeSubmit":false,"enableEvent":false,"formClass":null,"formAttr":null,"formModel":null,"hasIcon":false,"hasAnimate":false,"hasBadge":false,"hasPlace":true,"ariaHidden":true,"icon":null,"animate":null,"multiple":false,"visible":true,"pjax":1,"btnSize":"default","models":null,"attribute":null,"depdrop":true,"addonPrependContent":false,"addonAppendContent":false,"isHideSearch":false,"isMaintainOrder":false,"contentBefore":"","contentAfter":"","ajax.data":null,"ajax.result":null,"allowClear":true,"theme":"krajee-bs4","size":"lg","inpLength":0,"url":null,"tags":false,"escapeMarkup":null,"templateResult":null,"templateSelection":null,"grapeImg":"\/render\/former\/ZGrapesJsWidget\/asset\/main\/asset.jpg"}'><div class="kv-plugin-loading loading-ZKSelect2Widget-51537">&nbsp;</div><div class="input-group s2-input-group input-group-lg kv-input-group-hide group-ZKSelect2Widget-51537"><div class="input-group-prepend"></div><select id="ZKSelect2Widget-51537" class="kv-editable-input kselect2 form-control" name="name" data-s2-options="s2options_e9bc2761" data-krajee-select2="select2_3fd41773" style="width: 1px; height: 1px; visibility: hidden;">
                <option value=""></option>
            </select><div class="input-group-append"></div></div></div><!--END--><!--

$model = $this->modelGet('zetsoft\models\core\CoreInput');

echo zetsoft\widgets\inputes\ZKSelect2Widget::widget([
    'model' => '$model',
    'id' => 'ZKSelect2Widget-51537',
    'attribute' => 'string_2',
]);

--></div>
