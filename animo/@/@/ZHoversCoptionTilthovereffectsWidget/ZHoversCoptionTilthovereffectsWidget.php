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

namespace zetsoft\webhtm\ALL\render\animo\ZHoversCoptionTilthovereffectsWidget;


use zetsoft\system\Az;
use zetsoft\system\helpers\ZArrayHelper;
use function GuzzleHttp\Psr7\str;
use zetsoft\system\kernels\ZWidget;
use kartik\widgets\Select2;
use yii\web\JsExpression;

/**
 *
 * https://tympanus.net/Development/TiltHoverEffects/
 *
 * Refactored: Otabek Abdumalikov
 */


class ZHoversCoptionTilthovereffectsWidget extends Widget
{

    public $config = [];
    public $_config = [
        'maxCount' => 30,
        'disabled' => false,
        'contentBefore' => '',
        'theme' => \zetsoft\widgets\ALL\ZSampleWidget::theme['krajee-bs4'],
        'size' => ZSampleWidget::size['lg'],
    ];


    /**
     *
     * Plugin Events
     * https://select2.org/programmatic-control/events
     */
    public $event = [];
    public $_event = [
        'change' => 'function() { console.log("ZKSelect2Widget | $eventChange") }',
        'open' => 'function() { console.log("ZKSelect2Widget | $eventOpen") }',
    ];


    /**
     *
     * Constants
     */
    public const theme = [
        'default' => 'default',
        'classic' => 'classic',
        'bootstrap' => 'bootstrap',
        'krajee' => 'krajee',
        'krajee-bs4' => 'krajee-bs4',
    ];

    public const size = [
        'lg' => 'lg',
        'md' => 'md',
        'sm' => 'sm'
    ];


    public function asset()
    {
        //$this->fileCss('/publish/yarner/smartmenus/dist/css/sm-blue/sm-blue.css');
       // $this->fileJs('/publish/yarner/smartmenus/dist/css/sm-blue/sm-blue.js');
    }


    public function codes()
    {
        //  $this->htm = \kartik\select2\Select2::widget($this->options);

        $this->htm = <<<HTML
        <div id="test">
        
           </div>
HTML;

        $this->js = <<<JS
           console.log("Test");
JS;


        $this->css = <<<CSS
    .myClass  {
        background:#e3334d;
    }
CSS;


    }

}




