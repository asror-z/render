<?php
use zetsoft\widgets\iconers\ZBootstrapIconpickerWidget;
echo ZBootstrapIconpickerWidget::widget([
     'config' => [
        'align'=> 'center', // Only in div tag
        'cols'=> 7, 
        'rows'=> 7,
        'search'=> true,
        'searchText'=> 'Search',
      
    ] 
]);

?>

