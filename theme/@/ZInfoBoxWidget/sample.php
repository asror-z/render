<?php

use zetsoft\widgets\themes\ZRowWidget;
use zetsoft\widgets\themes\ZInfoBoxWidget;

?>

<?php ZRowWidget::begin(); ?>
<?= ZInfoBoxWidget::widget([
    'config' => [
        'iconBg' => ZInfoBoxWidget::Bg_Primary,
        'title' => 'No bg and bar primary solid'
    ]
]); ?>

<?= ZInfoBoxWidget::widget([
    'config' => [
        'iconBg' => ZInfoBoxWidget::Bg_Secondary,
        'title' => 'No bg and bar secondary gradient',
        'bGradient' => true
    ]
]); ?>

<?= ZInfoBoxWidget::widget([
    'config' => [
        'sBg' => ZInfoBoxWidget::Bg_Success,
        'title' => 'No bar success solid'
    ]
]); ?>



<?= ZInfoBoxWidget::widget([
    'config' => [
        'sBg' => ZInfoBoxWidget::Bg_Info,
        'title' => 'No bar info gradient',
        'bGradient' => true
    ]
]); ?>

<?= ZInfoBoxWidget::widget([
   'config'=>[
       'sBg' => ZInfoBoxWidget::Bg_Warning,
       'iconBg' => ZInfoBoxWidget::Bg_Danger,
       'title' => 'No bar warning solid with icon diff bg',
       'width' => 4
   ]
]); ?>

<?= ZInfoBoxWidget::widget([
    'config' => [
        'sBg' => ZInfoBoxWidget::Bg_Danger,
        'iconBg' => ZInfoBoxWidget::Bg_Warning,
        'title' => 'No bar danger gradient with icon diff bg',
        'bGradient' => true,
       'width' => 4
    ]
]); ?>

<?= ZInfoBoxWidget::widget([
   'config'=>[
       'sBg' => ZInfoBoxWidget::Bg_Dark,
       'iconBg' => ZInfoBoxWidget::Bg_Dark,
       'title' => 'No bar danger gradient with icon same bg',
       'bGradient' => true,
       'width' => 4
   ]
]); ?>


<?= ZInfoBoxWidget::widget([
    'config' => [
        'sBg' => ZInfoBoxWidget::Bg_Gray,
        'title' => 'Bar gray solid',
        'bProgressBar' => true,
        'sProgressBarText' => '70% выполнено',
        'iProgressBarValue' => 70
    ]
]); ?>

<?= ZInfoBoxWidget::widget([
    'config' => [
        'sBg' => ZInfoBoxWidget::Bg_Gray_Light,
        'title' => 'Bar gray-light solid',
        'bProgressBar' => true,
        'sProgressBarText' => '50% выполнено',
        'iProgressBarValue' => 50
    ]
]); ?>

<?= ZInfoBoxWidget::widget([
    'config' => [
        'sBg' => ZInfoBoxWidget::Bg_Black,
        'title' => 'black solid',
        'bProgressBar' => true,
        'sProgressBarText' => '30% выполнено',
        'iProgressBarValue' => 30
    ]
]); ?>

<?= ZInfoBoxWidget::widget([
    'config' => [
        'sBg' => ZInfoBoxWidget::Bg_White,
        'title' => 'Bar white solid',
        'bProgressBar' => true,
        'sProgressBarText' => '100% выполнено',
        'iProgressBarValue' => 100
    ]
]); ?>


<?= ZInfoBoxWidget::widget([
    'config' => [
        'sBg' => ZInfoBoxWidget::Bg_Primary,
        'title' => 'Bar primary gradient',
        'bGradient' => true,
        'bProgressBar' => true,
        'sProgressBarText' => '70% выполнено',
        'iProgressBarValue' => 70
    ]
]); ?>

<?= ZInfoBoxWidget::widget([
    'config' => [
        'sBg' => ZInfoBoxWidget::Bg_Success,
        'title' => 'Bar success gradient',
        'bGradient' => true,
        'bProgressBar' => true,
        'sProgressBarText' => '50% выполнено',
        'iProgressBarValue' => 50
    ]
]); ?>

<?= ZInfoBoxWidget::widget([
    'config' => [
        'sBg' => ZInfoBoxWidget::Bg_Warning,
        'iconBg' => ZInfoBoxWidget::Bg_Danger,
        'title' => 'Diff bg colors gradient',
        'bGradient' => true,
        'bProgressBar' => true,
        'sProgressBarText' => '30% выполнено',
        'iProgressBarValue' => 30
    ]
]); ?>

<?= ZInfoBoxWidget::widget([
    'config' => [
        'sBg' => ZInfoBoxWidget::Bg_Danger,
        'iconBg' => ZInfoBoxWidget::Bg_Info,
        'title' => 'Diff bg colors solid',
        'bProgressBar' => true,
        'sProgressBarText' => '100% выполнено',
        'iProgressBarValue' => 100
    ]
]); ?>
<?php ZRowWidget::end(); ?>
