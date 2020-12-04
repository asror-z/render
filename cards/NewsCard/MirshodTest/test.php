<?php

/**
 *
 *
 * Author:  Asror Zakirov
 * https://www.linkedin.com/in/asror-zakirov
 * https://github.com/asror-z
 *
 */

/*$hafta = 2;

if ($hafta==1){
echo 'yakshanba';
}else if ($hafta==2){
echo 'dushanba';
}else if ($hafta==3){
   echo 'seshanba';
}else if ($hafta==4){
   echo 'chorshanba';
}else if ($hafta==5){
   echo 'payshanba';
}else if ($hafta==6){
   echo 'juma';
}else if ($hafta==7){
   echo 'shanba';
}*/ ?>

<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ketting najim</title>
</head>
<body>
<form action="#" method="post">
    <input type="text" name="name">
    <input type="number" name="password">
    <button type="submit" name="sub">Click!</button>
</form>
<?php

if (isset($_POST['sub'])) {

    $name = $_POST['name'];
    $password = $_POST['password'];
    if (empty($name) || empty($password)) {
        echo 'formani toldiring';
    } else {

        header('Location: test.php');
    }


}

if ()


?>
</body>
</html>
