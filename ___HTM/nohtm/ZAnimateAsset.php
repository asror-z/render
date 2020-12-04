<?php

namespace zetsoft\assets\nohtm;

use zetsoft\assets\consts\ZAnimateConst;
use zetsoft\system\assets\ZAssetBundle;


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
class ZAnimateAsset extends ZAssetBundle implements ZAnimateConst
{

    /**
     * @var string
     */
    //public $sourcePath = '@npm/animate.css/';
    public $baseUrl = Cdn . 'https://cdn.jsdelivr.net/npm/animate.css@3.7.2/animate.css';
    /**
     * @var array
     */
    public $css = [
        'animate.min.css'
    ];


    /**
     * @inherit
     */
    public $publishOptions = [
        'only' => [
            'css/*',
        ],
    ];


    /**
     * @var array
     */
    public $depends = [
    ];


    


}
