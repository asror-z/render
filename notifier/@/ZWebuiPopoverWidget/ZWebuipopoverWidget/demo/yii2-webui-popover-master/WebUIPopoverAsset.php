<?php
/**
 * @copyright Copyright (c) 2016 Sergey Zimoglyadov, Kit.tools
 * @license https://opensource.org/licenses/BSD-3-Clause The BSD 3-Clause License
 */

namespace kittools\webuipopover;

use yii\web\AssetBundle;

/**
 * WebUIPopover bundle for \kittools\webuipopover\WebUIPopover.
 *
 * @author Sergey Zimoglyadov <wppdevelop@gmail.com>
 * @link https://github.com/kit-tools/yii2-webui-popover
 * @package kit-tools\yii2-webui-popover
 */

class WebUIPopoverAsset extends AssetBundle
{
    public $sourcePath = '@vendor/bower/webui-popover/dist/';

    public $js = [
        'jquery.webui-popover.js'
    ];

    public $css = [
        'jquery.webui-popover.css'
    ];

    public $depends = [
        'yii\web\JqueryAsset',
    ];
}