<?php

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

namespace zetsoft\widgets\inputes;


use kartik\helpers\Html;
use unclead\multipleinput\MultipleInputColumn;
use unclead\multipleinput\renderers\BaseRenderer;
use unclead\multipleinput\renderers\DivRenderer;
use unclead\multipleinput\renderers\ListRenderer;
use unclead\multipleinput\renderers\RendererInterface;
use unclead\multipleinput\renderers\TableRenderer;
use unclead\multipleinput\TabularColumn;
use yii\widgets\InputWidget;
use zetsoft\dbitem\data\ALLApp;
use zetsoft\system\kernels\ZWidget;
use kartik\select2\Select2;
use kartik\widgets\DateTimePicker;
use unclead\multipleinput\MultipleInput;
use zetsoft\system\module\Models;
use zetsoft\widgets\incores\ZListRenderer;

/**
 * Class ZMultiWidgetNew
 * @package widgets\inputes
 * https://github.com/unclead/yii2-multiple-input/wiki/Configuration
 */
class ZMultiWidget_3 extends ZWidget
{

    /**
     * Configuration
     */
    public $config = [];
    public $_config = [
        'form' => null,
        'min' => 1,
        'max' => 10,
        'isPrepend' => true,
        'attributeOptions' => [],
        'data' => [],
        
        'isCloneButton' => true,
        'isSortable' => true,
        'isAllowEmptyList' => false,
        'isEnableGuestitle' => false,
        'isShowGeneralError' => true,
        'isEmbedded' => false,
        'extraButtons' => '',
        'columnClass' => ZMultiWidget::columnClasse['MultipleInput'],
        'addButtonType' => ZMultiWidget::button['textInput'],
        'addButtonPosition' => ZMultiWidget::po['posRow'],
        'models' => [],
        'modelClass ' => '',
        
        'allowEmptyList ' => false,
        'theme' => ZMultiWidget::theme['bootstrap'],
        'iconSource' => ZMultiWidget::icon['fontawesome'],
        'renderer' => ZMultiWidget::renderer['zlistRenderer'],
        'Column options' => [
            'name' => 'multiple',
            'type' => 'text',
            'title' => '',
            'value' => null,
            'defaultValue' => '',
            'options' => [],
            'headerOptions' => [],
            'enableError' => false,
            'errorOptions' => [],
            'nameSuffix' => '',
        ],

    ];

    public const columnClass = [
        'MultipleInput' => MultipleInputColumn::class,
        'TabularColumn' => TabularColumn::class
    ];

    /**
     *
     * Constants
     */

    public const po = [
        'posHeader' => RendererInterface::POS_HEADER,
        'posRow' => RendererInterface::POS_ROW,
        'posRowBegin' => RendererInterface::POS_ROW_BEGIN,
        'posFooter' => RendererInterface::POS_FOOTER,

    ];

    public const button = [
        'textInput' => 'textInput',
        'hiddenInput' => 'hiddenInput',
        'dropDownList' => 'dropDownList',
        'listbox' => 'listBox',
        'checkboxList' => 'checkboxList',
        'radioList' => 'radioList',
        'static' => 'static',
        'checkbox' => 'checkbox',
        'radio' => 'radio',
        'dragColumn' => 'dragColumn',
    ];

    public const renderer = [
        'baseRenderer' => BaseRenderer::class,
        'listRenderer' => ListRenderer::class,
        'zlistRenderer' => ZListRenderer::class,
        'tableRenderer' => TableRenderer::class,
        'divRenderer' => DivRenderer::class
    ];

    public const theme = [
        'default' => MultipleInput::THEME_DEFAULT,
        'bootstrap' => MultipleInput::THEME_BS,
    ];

    public const icon = [
        'glyph' => MultipleInput::ICONS_SOURCE_GLYPHICONS,
        'fontawesome' => MultipleInput::ICONS_SOURCE_FONTAWESOME,
    ];


    public function codes()
    {
        $columns = [];
        if (!empty($this->_config['form'])) {

            /** @var Models $form */
            $form = new $this->_config['form']();

            /** @var ALLApp $allApp */
            $allApp = $form->allApp();

            /*
             
             */
            foreach ($allApp->columns as $key => $column) {
                $col = [];
                $col['name'] = $key;
                $col['type'] = $column->widget;
                $col['title'] = $column->title;

                Az::$app->forms->wiData->clean();
                Az::$app->forms->wiData->model = $form;
                Az::$app->forms->wiData->attribute = $key;
                $column->data = Az::$app->forms->wiData->data();
                $col['defaultValue'] = $column->value;
                $col['items'] = $column->data;
                $col['options']['data'] = $column->data;
                $columns[] = $col;
            }


        }
        /*vdd($columns);*/
        $this->options = [
            'model' => $this->model,
            'attribute' => $this->attribute,
            'name' => $this->name,
            //'theme' => $this->_config['theme'],
            'max' => $this->_config['max'],
            'min' => $this->_config['min'],
            'prepend' => $this->_config['isPrepend'],
            'attributeOptions' => [
            ],    // unclear
            'addButtonPosition' => $this->_config['addButtonPosition'],
            'addButtonOptions' => [
                'class' => 'btn btn-success',
            ],
            'removeButtonOptions' => [
                'class' => 'btn btn-danger',
            ],
            'cloneButtonOptions' => [
                'class' => 'btn btn-info',
            ],
            'columns' => $columns,
            'allowEmptyList' => $this->_config['isAllowEmptyList'],
            'columnClass' => $this->_config['columnClass'],
            'rendererClass' => $this->_config['renderer'],
            'rowOptions' => [
                'placeholder' => '{placeholder}',

            ],
            'options' => [
                'class' => $this->_config['class'],
            ],
            'sortable' => $this->_config['isSortable'],
            'cloneButton' => $this->_config['isCloneButton'],
            'extraButtons' => $this->_config['extraButtons'],
            //'enableGuestitle' => $this->_config['isEnableGuestitle'],
            'layoutConfig' => [
                'offsetClass' => '',
                'labelClass' => '',
                'wrapperClass' => '',
                'errorClass' => '',
            ],
            'iconSource' => $this->_config['iconSource'],
            'showGeneralError' => $this->_config['isShowGeneralError'],

        ];

        if ($this->_config['isEmbedded'] === true && $this->modelCheck()) {
            $this->htm .= Html::hiddenInput(Html::getInputName($this->model, $this->attribute), null);
        }


        $this->htm .= <<<HTML
        <div class="md-form col-lg-6 bg-c">
       {placeholder}
HTML;

        $this->htm .= MultipleInput::widget($this->options);

        $this->htm .= <<<HTML
          </div>
HTML;
        $this->htm = strtr($this->htm, [
            '{placeholder}' => $this->_config['hasPlace'] ? $this->_config['placeholder'] : '',
        ]);


        $this->css = <<<CSS
        .md-form label{
            position: relative !important;    
        }
       
CSS;
        $this->js = <<<JS
            afterInit = '',
            afterAddRow = '',
            beforeDeleteRow = '', 
            afterDeleteRow = '',
            afterDropRow = ''
       JS;



    }

}
