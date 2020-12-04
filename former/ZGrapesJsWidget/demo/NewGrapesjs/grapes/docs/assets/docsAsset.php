<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    
    <?

    /**
     * Author: Asadbek Ruzmetov
     */

    use zetsoft\assets\testing\GrapeAsset;

    GrapeAsset::register($this);
    ?>
    <style>
        body, html{ height: 100%; margin: 0;}
    </style>
</head>

<body>

<div id="gjs" style="height:0%; overflow:hidden">
    <img style="margin: 18% 0 0 45%" src="http://artf.github.io/grapesjs/img/grapesjs-logo.png" />
</div>


<script type="text/javascript">
    var editor = grapesjs.init({
        height: '500px',
        noticeOnUnload: 0,
        container: '#gjs',
        fromElement: true,
        assetManager: {
    assets: [
     'http://placehold.it/350x250/78c5d6/fff/image1.jpg',
     // Pass an object with your properties
     {
       type: 'image',
       src: 'http://placehold.it/350x250/459ba8/fff/image2.jpg',
       height: 350,
       width: 250
     },
     {
       // As the 'image' is the base type of assets, omitting it will
       // be set as `image` by default
       src: 'http://placehold.it/350x250/79c267/fff/image3.jpg',
       height: 350,
       width: 250
     },
    ],
  }
    });
    
</script>
</body>
</html>
