<?php

/**
 *
 *
 * Created By: Shakxzod Namazbaev
 * Created_at: 03.12.2019
 *
 */

namespace ееуыештп ;

use rmrevin\yii\fontawesome\FA;
use rmrevin\yii\fontawesome\FAS;
use zetsoft\system\assets\ZColor;
use zetsoft\system\Az;
use zetsoft\system\kernels\ZWidget;

class ZLink11Widget extends ZWidget
{

    /**
     * Configuration
     */
    public $config = [];
    public $_config = [
        'style' => ZLinkWidget::btnStyle['btn-primary'],
        'type' => ZLinkWidget::btnType['submit'],
        'size' => ZLinkWidget::size['btn-sm'],

        'title' => 'Кнопка',
        'method' => ZLinkWidget::method['post'],
        'btnRounded' => true,
        'btnFloating' => true,
        'iconsSm' => true,
        'color' => ZColor::color['none'],
        'url' => '#',

        'hasConfirm' => true,
        'confirmText' => 'Вы уверены?',

        'hasBadge' => true,
        'badgeType' => ZLinkWidget::badgeType['badge-default'],
        'badgeText' => '100',

        'target' => ZLinkWidget::target['_self'],

        'hintRounded' => true,
        'ttSize' => ZLinkWidget::ttSize['medium'],
        'ttSide' => ZLinkWidget::ttSide['top'],
        'ttColor' => ZLinkWidget::ttColor['info'],
        'ttAnimate' => ZLinkWidget::ttAnimate['bounce'],

        'iconColor' => '#ffffff'
    ];

    /**
     *
     * Constants
     *
     */


    /**
     *
     * Plugin Events
     * https://select2.org/programmatic-control/events
     */


    public $event = [];
    public $_event = [
        'click' => 'function() { console.log("self | $eventClick") }',
        'dblclick' => 'function() { console.log("self | $eventDblclick") }',
        'mouseenter' => 'function() { console.log("self | $eventMouseEnter") }',
        'mouseleave' => 'function() { console.log("self | $eventMouseLeave") }',
        'keyup' => 'function() { console.log("self | $eventKeyup") }',
    ];



    public const btnType = [
        'none' => '',
        'reset' => 'reset',
        'button' => 'button',
        'submit' => 'submit'
    ];


    public const target = [
        '_blank' => '_blank',
        '_self' => '_self',
        '_top' => '_top',
    ];

    public const size = [
        'btn-lg' => 'btn-lg',
        'btn-md' => 'btn-md',
        'btn-sm' => 'btn-sm',
    ];


    public function asset()
    {
        $this->fileCss('https://cdn.jsdelivr.net/npm/hint.css@2.6.0/hint.min.css');

    }




    public function layout()
    {

        $this->layout = [
            'main' => <<<HTML
             <a 
             id="{id}"
             href="{url}" 
             title="{title}" 
             data-toggle="tooltip" 
             {confirmCode}
             data-method="{data-method}"
             data-pjax="{data-pjax}"
             class="btn {btn-rounded} {btn-floating} {icons-sm} {style}  {type} {size} hint--{ttSide} hint--{ttColor} hint--{ttSize} hint--{ttAnimate} {hint--rounded} color-icon"
             aria-label="{title}" 
             aria-hidden="{aria-hidden}">
             >
                 {iconCode}
                 {badgeCode}
             </a> 
                
HTML,

            'confirm' => <<<HTML
                data-confirm="{data-confirm}" 
             
HTML,
            'icon' => <<<HTML
                <i class="{iconClass}"></i>
             
HTML,
            'badge' => <<<HTML
                <span class="badge {badgeType} counter">{badgeText}</span>
             
HTML,

            'style' => <<<CSS
             .color-icon{
                color: transparent;
             }
              .ovr{
                overflow : visible!important;
              }
              
              .my-btn-icon{
                position: relative;
                 left: 3px;
              }
CSS,

            'event' => <<<JS
            $('#{id}')
            .on('click', {click})
            .on('dblclick', {dblclick})
            .on('keyup', {keyup})
            .on('mouseenter', {mouseenter})
            .on('mouseleave', {mouseleave});
JS,

        ];
    }


    public function codes()
    {

        $this->js .= strtr($this->layout['event'], [
            '{id}' => $this->id,

            '{click}' => $this->eventCode('click'),
            '{keyup}' => $this->eventCode('keyup'),
            '{dblclick}' => $this->eventCode('dblclick'),
            '{mouseenter}' => $this->eventCode('mouseenter'),
            '{mouseleave}' => $this->eventCode('mouseleave'),
        ]);

        $this->css .= strtr($this->layout['style'], [
            'transparent' => $this->_config['iconColor']
        ]);


        $badgeCode = strtr($this->layout['badge'], [
            '{badgeType}' => $this->_config['badgeType'],
            '{badgeText}' => $this->_config['badgeText']
        ]);

        $iconCode = strtr($this->layout['icon'], [
            '{icon}' => $this->_config['icon'],
        ]);

        $confirmCode = strtr($this->layout['confirm'], [
            '{data-confirm}' => $this->_config['confirmText'],
        ]);


        if ($this->_config['visible'])

            $this->htm .= strtr($this->layout['main'], [
                '{id}' => $this->id,

                '{url}' => $this->_config['url'],
                '{title}' => $this->_config['title'],

                '{data-method}' => $this->_config['method'],
                '{type}' => $this->_config['type'],
                '{size}' => $this->_config['size'],
                '{style}' => $this->_config['style'],
                '{target}' => $this->_config['target'],

                '{data-pjax}' => $this->_config['pjax'] ? 'data-pjax' : '',
                '{btn-floating}' => $this->_config['btnFloating'] ? 'btn-floating' : '',
                '{icons-sm}' => $this->_config['iconsSm'] ? 'icons-sm' : '',
                '{hint--rounded}' => $this->_config['hintRounded'] ? 'hint--rounded' : '',
                '{aria-hidden}' => $this->_config['ariaHidden'] ? 'true' : '',
                '{btn-rounded}' => $this->_config['btnRounded'] ? 'btn-rounded' : '',

                '{ttSize}' => $this->_config['ttSize'],
                '{ttSide}' => $this->_config['ttSide'],
                '{ttColor}' => $this->_config['ttColor'],
                '{ttAnimate}' => $this->_config['ttAnimate'],

                '{confirmCode}' => $confirmCode,
                '{iconCode}' => $iconCode,
                '{badgeCode}' => $badgeCode,
            ]);


    }
}
