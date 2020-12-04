<?php

/**
 *
 *
 * Author:  Asror Zakirov
 * https://www.linkedin.com/in/asror-zakirov
 * https://github.com/asror-z
 *
 */

use zetsoft\system\assets\ZColor;
use zetsoft\widgets\themes\ZAdminCardWidget;
use zetsoft\widgets\themes\ZMarketAdminCardWidget;

if(!isset($percent))
    $percent=53;

if(!isset($title))
    $title='Title';

if(!isset($info))
    $info='Information card';

if(!isset($infoUrl))
    $infoUrl='infoUrl';

if(!isset($class))
    $class='align-items-center';
?>

<div class="row">
    <div class="col-md-6 offset-md-3">
        <div class="row">
            <div class="col-md-3">
                <?
                echo ZMarketAdminCardWidget::widget([
                    'config' => [
                        'percent' => $percent,
                        'title' => $title,
                        'info' => $info,
                        'infoUrl' => $infoUrl,
                        'class' => $class
                    ]
                ]);

                ?>
            </div>
            <div class="col-md-3">
                <?
                echo ZMarketAdminCardWidget::widget([
                    'config' => [
                        'percent' => $percent,
                        'title' => $title,
                        'info' => $info,
                        'infoUrl' => $infoUrl,
                        'class' => $class
                    ]
                ]);

                ?>
            </div>
            <div class="col-md-3">
                <?
                echo ZMarketAdminCardWidget::widget([
                    'config' => [
                        'percent' => $percent,
                        'title' => $title,
                        'info' => $info,
                        'infoUrl' => $infoUrl,
                        'class' => $class
                    ]
                ]);

                ?>
            </div>
            <div class="col-md-3">
                <?
                echo ZMarketAdminCardWidget::widget([
                    'config' => [
                        'percent' => $percent,
                        'title' => $title,
                        'info' => $info,
                        'infoUrl' => $infoUrl,
                        'class' => $class
                    ]
                ]);

                ?>
            </div>
        </div>
    </div>
</div>
