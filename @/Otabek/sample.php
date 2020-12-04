<?php

/**
 *
 *
 * Author:  Asror Zakirov
 * https://www.linkedin.com/in/asror-zakirov
 * https://github.com/asror-z
 *
 */

use zetsoft\system\kernels\ZView;

?>

<div class="my-5">
    <div class="d-flex justify-content-center">
        <h1 class="d-block" style="font-size: 4.5rem"><i class="fa fa-search"></i></h1>
    </div>
    <div class="d-flex justify-content-center">

        <h5 class="d-block"><?=Azl.'По текущим данным продукты отсутствуют '?></h5>
    </div>
</div>

<?php

    /** @var ZView $this */

    echo $this->require('/render/cards/ZVMarketWidget/ready/main.php',[
        'isCommon'=>false
    ]);

?>
