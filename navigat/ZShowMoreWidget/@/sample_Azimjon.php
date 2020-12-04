<?php


use zetsoft\system\kernels\ZView;
use zetsoft\widgets\inputes\ZIconPickerWidget;
use zetsoft\widgets\navigat\ZShowMoreWidget;
use zetsoft\widgets\navigat\ZShowMoreWidgetAzimjon;

/*echo ZShowMoreWidget::widget([
    'config' =>[
        'comment'=>'consectetur adipiscing elit. Proin blandit nunc sed sem dictum id feugiat quam blandit. Donec nec sem sed arcu interdum commodo ac ac diam. Donec consequat semper rutrum. Vestibulum et mauris elit. Vestibulum mauris lacus, ultricies.consectetur adipiscing elit. Proin blandit nunc sed sem dictum id feugiat quam blandit. Donec nec sem sed arcu interdum commodo ac ac diam. Donec consequat semper rutrum. Vestibulum et mauris elit. Vestibulum mauris lacus, ultricies.'
    ]
]);*/


/** @var ZView $this */

ZShowMoreWidgetAzimjon::begin([
    'config' => [
        'begin' => true
    ]
]);

echo ZIconPickerWidget::widget();
?>

<div class="alert">
    <ul>
        <li>salom</li>
        <li>salom</li>
        <li>salom</li>
        <li>salom</li>
        <li>salom</li>
        <li>salom</li>
        <li>salom</li>
        <li>salom</li>
        <li>salom</li>
        <li>salom</li>
        <li>salom</li>
        <li>salom</li>
        <li>salom</li>
        <li>salom</li>
        <li>salom</li>
        <li>salom</li>
        <li>salom</li>
        <li>salom</li>
    </ul>
    sadasdsad

    consectetur adipiscing elit. Proin blandit nunc sed sem dictum id feugiat quam blandit. Donec nec sem sed arcu interdum commodo ac ac diam. Donec consequat semper rutrum. Vestibulum et mauris elit. Vestibulum mauris lacus, ultricies.consectetur adipiscing elit. Proin blandit nunc sed sem dictum id feugiat quam blandit. Donec nec sem sed arcu interdum commodo ac ac diam. Donec consequat semper rutrum. Vestibulum et mauris elit. Vestibulum mauris lacus, ultricies.
</div>
<?php

ZShowMoreWidgetAzimjon::end();
