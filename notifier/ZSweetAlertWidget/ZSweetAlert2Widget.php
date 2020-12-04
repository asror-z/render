<?php

namespace zetsoft\widgets\notifier;

use zetsoft\system\kernels\ZWidget;

/**
 *
 * https://sweetalert2.github.io/#usage
 * https://github.com/Dominus77/yii2-sweetalert2-widget
 *
 *
 * Alert widget renders a message from session flash or custom messages.
 * @see https://sweetalert2.github.io/
 * @package dominus77\sweetalert2
 */

class ZSweetAlert2Widget extends ZWidget
{

    public $config = [];
    public $_config = [
        'type' => ZSweetAlert2Widget::type['fire'],
        'url' => '/eyuf/cores/main/index.aspx#menu',
        'width' => null,
        'height' => null,
        'grapes' => true,
        'showCancelButton' => true,
        'funcName' => 'func',
        'option' => '',
        
        'title' => '',
        'titleText' => '',
        'position' => ZSweetAlert2Widget::type['fire'],
        'cancelButtonText' => 'Cancel',
        'text' => '',
        'url' => '',
        'icon' => '',
        'confirmButtonColor' => '',
        'cancelButtonColor' => '',
        'focusConfirm' => false,
        'confirmButtonAriaLabel' => '',
        'cancelButtonAriaLabel' => '',
        'allowOutsideClick' => true,
        'footer' => '',
        'imageWidth' => 500,
        'imageHeight' => 600,
        'showConfirmButton' => true,
        'backdrop' => '',
        'background' => '',
        'padding' => '',
        'showLoaderOnConfirm' => false,
        'autocapitalize' => '',
        'showCloseButton' => false,
        'iconHtml' => '',
        'timerProgressBar' => 5000,
        'question' => '',
        'questionText' => '',
        'confirmButtonAfterQueueText' => '',
        'AfterQueueText' => 'Good!',
        'AfterQueueTitle' => '',
        'reverseButtons' => true,

        /*VARIABLES FOR QUEUE TYPE*/
        'inputType' => '',
        'confirmButtonText' => 'Text',
        'progressSteps' => [],

    ];

    public $layout = [];
    public $_layout = [
        'fireFunc' => <<<JS
    function {funcName}(title = null, text = null,  icon = null,){
    Swal.fire({
        title: '{title}',
        titleText: '',
        text: '',
        html: `<iframe src=\'{url}\' height="{height}" width="{width}"></iframe>`,
        footer: `{footer}`,
        icon: undefined,
        iconHtml: undefined,
        toast: false,
        animation: true,
        showClass: {
          popup: 'swal2-show',
          backdrop: 'swal2-backdrop-show',
          icon: 'swal2-icon-show'
        },
        hideClass: {
          popup: 'swal2-hide',
          backdrop: 'swal2-backdrop-hide',
          icon: 'swal2-icon-hide'
        },
        customClass: undefined,
        target: 'body',
        backdrop: true,
        heightAuto: true,
        allowOutsideClick: {allowOutsideClick},
        allowEscapeKey: true,
        allowEnterKey: true,
        stopKeydownPropagation: true,
        keydownListenerCapture: false,
        showConfirmButton: false,
        showCancelButton: false,
        preConfirm: undefined,
        confirmButtonText: 'OK',
        confirmButtonAriaLabel: '',
        confirmButtonColor: undefined,
        cancelButtonText: 'Cancel',
        cancelButtonAriaLabel: '',
        cancelButtonColor: undefined,
        buttonsStyling: true,
        reverseButtons: false,
        focusConfirm: true,
        focusCancel: false,
        showCloseButton: true,
        closeButtonHtml: '<i class="close-sweetalert fas fa-times"></i>',
        closeButtonAriaLabel: 'Close this dialog',
        showLoaderOnConfirm: false,
        url: undefined,
        imageWidth: undefined,
        imageHeight: undefined,
        imageAlt: '',
        timer: undefined,
        timerProgressBar: false,
        width: {width},
        padding: {padding},
        background: undefined,
        input: undefined,
        inputPlaceholder: '',
        inputValue: '',
        inputOptions: {},
        inputAutoTrim: true,
        inputAttributes: {},
        inputValidator: undefined,
        validationMessage: undefined,
        grow: false,
        position: 'center',
        progressSteps: [],
        currentProgressStep: undefined,
        progressStepsDistance: undefined,
        scrollbarPadding: true,
        onOpen: (toast) => {
    toast.addEventListener('mouseenter', Swal.stopTimer)
    toast.addEventListener('mouseleave', Swal.resumeTimer)
  }
        /*onBeforeOpen: undefined,
        onOpen: undefined,
        onRender: undefined,
        onClose: undefined,
        onAfterClose: undefined,
        onDestroy: undefined,*/
 
    
    })
    
 }  
JS,
    ];

    public $event = [];
    public $_event = [
        'result' => 'function() { console.log("ZSweeAlert2Widget" | $eventResult) }',
        'closing' => 'function() { console.log("ZSweeAlert2Widget" | closing) }',
        'onBeforeOpen' => 'function() { console.log("ZSweeAlert2Widget" | onBeforeOpen) }',
        'onOpen' => 'function() { console.log(ZSweeAlert2Widget | onOpen) }',
        'onRender' => 'function() { console.log(ZSweeAlert2Widget | onRender) }',
        'onClose' => 'function() { console.log(ZSweeAlert2Widget | onClose) }',
        'onAfterClose' => 'function() { console.log(ZSweeAlert2Widget | onAfterClose) }',
        'onDestroy' => 'function() { console.log(ZSweeAlert2Widget | onDestroy) }',

    ];

    private $stepTitle;
    private $_aStep;

    public const type = [
        'fire' => 'fire',
        'mixin' => 'mixin',
    ];

    public function asset()
    {
        $this->fileCss('https://cdn.jsdelivr.net/npm/sweetalert2@9.8.2/dist/sweetalert2.min.css');
        $this->fileJs('https://cdn.jsdelivr.net/npm/sweetalert2@9.10.2/dist/sweetalert2.js');
        $this->fileJs('https://cdn.jsdelivr.net/npm/sweetalert2@9.10.2/dist/sweetalert2.all.min.js');
    }

    public function codes()
    {

        $this->js = strtr($this->_layout['fireFunc'], [
            '{funcName}' => $this->_config['funcName'],
            '{url}' => $this->_config['url'],
            '{height}' => $this->_config['height'],
            '{title}' => $this->_config['title'],
            '{width}' => $this->_config['width'],
            '{footer}' => $this->_config['footer'],
            '{padding}' => $this->_config['padding'],
            '{allowOutsideClick}' => $this->jscode($this->_config['allowOutsideClick']),
            '{result}' =>  $this->eventCode('result'),
            '{closing}' =>  $this->eventCode('closing'),
            '{onBeforeOpen}' =>  $this->eventCode('onBeforeOpen'),
            '{onOpen}' =>  $this->eventCode('onOpen'),
            '{onRender}' =>  $this->eventCode('onRender'),
            '{onClose}' =>  $this->eventCode('onClose'),
            '{onAfterClose}' =>  $this->eventCode('onAfterClose'),
            '{onDestroy}' =>  $this->eventCode('onDestroy'),



        ]);

        $this->css = <<<CSS
        
        .close-sweetalert {
            margin-top: -10px;
            font-size: 20px;
            transition: all 0.2s;
        }
        
        #swal2-title {
            margin-top: 5px;
            font-size: 22px;
            display: flex;
        }
        
        .swal2-footer {
            justify-content: flex-end !important;
            margin: 0 !important; 
            padding: 0 20px !important; 
            border: none !important;
        }

CSS;


    }
}
