<?php

/**
 *
 *
 * Author:  Doniyor
 *
 */

use zetsoft\assets\grapes\ZGrapeNavbarAsset;
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>GrapesJS Navbar Plugin</title>
    <?php
        ZGrapeNavbarAsset::register($this);
    ?>
    <style>
        body, html {
            height: 100%;
            margin: 0;
        }
    </style>
</head>
<body>
<div id="gjs" style="height:0px; overflow:hidden"></div>
<script type="text/javascript">
    var editor = grapesjs.init({
        height: '1000px',
        noticeOnUnload: 0,
        storageManager:{autoload: 0},
        container : '#gjs',
        fromElement: true,
        plugins: ['gjs-navbar'],
        pluginsOpts: {
            'gjs-navbar': {
                blocks: 'h-navbar',
                defaultStyle: 1,
                navbarClsPfx: 'navbar',
                labelNavbar: 'Navbar',
                labelNavbarContainer: 'Navbar Container',
                labelMenu: 'Navbar Menu',
                labelMenuLink: 'Menu link',
                labelBurger: 'Burger',
                labelBurgerLine: 'Burger Line',
                labelNavbarBlock: 'Navbar',
                labelNavbarCategory: 'Extra',
                labelHome: 'Home',
                labelAbout: 'About',
                labelContact: 'Contact',
            }
        }
    });
</script>
</body>
</html>
