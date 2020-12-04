<?php
/**
 * @copyright Copyright (c) 2016 Sergey Zimoglyadov, Kit.tools
 * @license https://opensource.org/licenses/BSD-3-Clause The BSD 3-Clause License
 */

namespace kittools\webuipopover;

use yii\helpers\Html;
use yii\helpers\Json;
use yii\web\JsExpression;

/**
 * This is just an example.
 *
 * use kittools\webuipopover\WebUIPopover;
 *
 * echo WebUIPopover::widget([
 *     'label' => 'Button popup',
 *     'tagName' => 'a',
 *     'body' => 'Content popup'
 * ]);
 *
 * WebUIPopover::begin([
 *     'label' => 'Button popup',
 *     'tagName' => 'button',
 *     'tagOptions' => [
 *         'class' => 'btn btn-success',
 *     ],
 *     'pluginOptions' => [
 *         'placement' => 'right',
 *         'animation' => 'pop',
 *         'title' => 'Popover title',
 *         'onShow' => 'function($element) {console.log($element);}'
 *     ],
 * ]);
 *
 * echo 'Content popup';
 *
 * WebUIPopover::end();
 *
 * @author Sergey Zimoglyadov <wppdevelop@gmail.com>
 * @link https://github.com/kit-tools/yii2-webui-popover
 * @package kit-tools\yii2-webui-popover
 */
class WebUIPopover extends \yii\base\Widget
{
    /**
     * @var string The body content in the WebUIPopover component. Note that anything between
     * the [[begin()]] and [[end()]] calls of the WebUIPopover widget will also be treated
     * as the body content, and will be rendered before this.
     */
    public $body;

    /**
     * @var array The HTML attributes for the input tag.
     * @see \yii\helpers\Html::renderTagAttributes() for details on how attributes are being rendered.
     */
    public $options = [];

    /**
     * @var array The options for the WebUI Popover plugin.
     * Please refer to the WebUI Popover plugin Web page for possible options.
     * @see https://github.com/sandywalker/webui-popover/blob/master/README.md
     */
    public $pluginOptions = [];

    /**
     * @var string The label of the button. Defaults to 'Show popup'.
     */
    public $label = 'Show popup';

    /**
     * @var string The tag name of the button. Defaults to 'a'.
     */
    public $tagName = 'a';

    /**
     * @var array The rest of the options will be rendered as the attributes of the resulting tag. The values will be
     * HTML-encoded using encode(). If a value is null, the corresponding attribute will not be rendered. See
     * renderTagAttributes() for details on how attributes are being rendered.
     */
    public $tagOptions = [];

    /**
     * @inheritdoc
     */
    public function init()
    {
        parent::init();
        if (!isset($this->options['id'])) {
            $this->options['id'] = $this->getId();
        }

        echo $this->renderButton();
        echo $this->renderBodyBegin();
    }

    /**
     * @inheritdoc
     */
    public function run()
    {
        echo $this->renderBodyEnd();
        $this->registerClientScript();
    }

    /**
     * @param mixed $item
     * @return null|string The generated button popover
     */
    protected function renderButton()
    {
        $html = '';
        $options = array_merge(
            ['id' => $this->options['id']],
            $this->tagOptions
        );
        switch ($this->tagName) {
            case 'a':
                $html .= Html::a($this->label, '#', $options);
                break;
            default:
                $html .= Html::tag($this->tagName, $this->label, $options);
                break;
        }
        return $html;
    }

    /**
     * Renders the begin tag popup container before rendering the content.
     * @return string the rendering result
     */
    protected function renderBodyBegin()
    {
        echo Html::beginTag('div', ['class' => 'webui-popover-content']) . "\n";
    }

    /**
     * Renders the close tag popup container after rendering the content.
     * @return string the rendering result
     */
    protected function renderBodyEnd()
    {
        echo $this->body;
        echo Html::endTag('div') . "\n";
    }

    /**
     * Registers the client script required for the plugin
     */
    protected function registerClientScript()
    {
        $view = $this->getView();
        WebUIPopoverAsset::register($view);

        $id = $this->options['id'];
        if (!empty($this->pluginOptions)) {
            foreach($this->pluginOptions as $option => $value){
                if (in_array($option, ['onShow', 'onHide'])) {
                    $this->pluginOptions[$option] = new JsExpression($value);
                }
            }
        }
        $options = Json::encode($this->pluginOptions);
        $js = "$('#$id').webuiPopover($options);";
        $view->registerJs($js);
    }
}
