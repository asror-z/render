<?php

use zetsoft\widgets\ajaxify\ZStatusWidget; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<div class="container">
    <?php

    echo ZStatusWidget::widget();

    //    Az::$app->cores->session->setUserSession();
    //    Az::$app->cores->session->set('hello', 'value');
    //   echo  Az::$app->cores->session->get('hello');
    //    $user = new User();
    //    $user->email = 'qqq@qqq.qq';
    //    $user->password = '$model->password';
    //    $user->role = '$model->role';
    //    $user->save();
    //

    ?>
    <?= $this->userIdentity()->id?>
    <p id="status"><?= $this->userIdentity()->status?></p>
    <p id="status1"><?php
    $date = strtotime($this->userIdentity()->lastseen);
        $lastStr = time() - $date;
        echo "last seen: ".(int)gmdate("i", $lastStr) . " minutes ago";
        echo '<br>';
        ?></p>



</body>
</html>
