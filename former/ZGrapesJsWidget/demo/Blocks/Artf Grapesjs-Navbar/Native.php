<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>GrapesJS Navbar Plugin</title>
    <title>GrapesJS Navbar Plugin</title>
    <link href="https://unpkg.com/grapesjs/dist/css/grapes.min.css" rel="stylesheet">
    <script src="https://unpkg.com/grapesjs"></script>
    <script src="https://cdn.jsdelivr.net/npm/grapesjs-navbar@0.1.5/dist/grapesjs-navbar.min.js"></script>
</head>
<body>
<div id="gjs" style="height:0px; overflow:hidden"></div>
<script type="text/javascript">
    var editor = grapesjs.init({
        height: '1000px',
        noticeOnUnload: 0,
        storageManager:{autoload: 0},
        container : '#gjs',
        components: ['burger-menu'],
        fromElement: true,
        Blocks: ['h-navbar'],
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
