<?php
use zetsoft\widgets\themes\ZColWidget;
use zetsoft\widgets\themes\ZRowWidget;
?>


<?php ZRowWidget::begin(); ?>
    <?php ZColWidget::begin([
    'config'=>[
        'align' => ZColWidget::Align_Right,
        'width' => 4
        ]

    ]);?>
            Right align 
    <?php ZColWidget::end()?>

    <?php ZColWidget::begin([
    'config'=>[
        'align' => ZColWidget::Align_Center,
        'width' => 4]]);
        ?>
          Center alignlign
    <?php ZColWidget::end()?>

    <?php ZColWidget::begin([
        'config'=>[
            'align' => ZColWidget::align['left'],
            'width' => 4]]);
            ?>
        Left align
    <?php ZColWidget::end()?>
<?php ZRowWidget::end(); ?>
